<?php
session_start();
// Abilita il riporto degli errori per mysqli (importante per il try-catch)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli("localhost", "root", "", "albineseDB");
} catch (mysqli_sql_exception $e) {
    die("Errore di connessione: " . $e->getMessage());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $conferma = $_POST["conferma_password"];

    if ($password !== $conferma) {
        $message = "Le password non coincidono.";
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO utenti (nome, cognome, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nome, $cognome, $email, $password);

            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            // Controlliamo se l'errore è dovuto a un duplicato (codice errore 1062)
            if ($e->getCode() == 1062) {
                $message = "Email già utilizzata. Riprova con un altro indirizzo.";
            } else {
                $message = "Errore durante la registrazione: " . $e->getMessage();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <h2>Registrati</h2>

        <?php if (!empty($message)) : ?>
            <p class="error" style="color: #ff4d4d; text-align: center; margin-bottom: 15px; font-weight: bold;">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label>Cognome</label>
                <input type="text" name="cognome" value="<?php echo isset($_POST['cognome']) ? htmlspecialchars($_POST['cognome']) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>Conferma Password</label>
                <input type="password" name="conferma_password" required>
            </div>

            <button type="submit" class="login-btn">Registrati</button>
        </form>

        <div class="login-footer">
            <p>Hai già un account? <a href="login.php">Accedi</a></p>
        </div>
    </div>
</div>

</body>
</html>