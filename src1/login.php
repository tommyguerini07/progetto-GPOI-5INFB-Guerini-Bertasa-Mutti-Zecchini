<?php
session_start();

$conn = new mysqli("localhost", "root", "", "albineseDB");

if ($conn->connect_error) {
    die("Errore di connessione: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM utenti WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if ($password === $user["password"]) {

            $_SESSION["user"] = $username;
            header("Location: index.php");
            exit();

        } else {
            $message = "Password errata.";
        }


    } else {
        $message = "E-mail non trovata.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polisportiva Albinese - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card">
            <h2>Accedi</h2>
            
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" class="login-btn">Entra</button>
            </form>
            
            <div class="login-footer">
                <p>Non hai un account? <a href="registrati.php">Registrati ora</a></p>
                <p><a href="index.php">Ritorna alla home</a></p>
            </div>

            <div class="error-popup<?php echo !empty($message) ? ' visible' : ''; ?>" role="alert" aria-live="assertive">
                <?php echo htmlspecialchars($message); ?>
            </div>

        </div>
    </div>

</body>
</html>
    </div>

</body>
</html>