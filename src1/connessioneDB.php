<?php
$conn = new mysqli("localhost", "root", "", "albineseDB");

if ($conn->connect_error) {
    die("Errore di connessione: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: index.php");
        exit();
    } else {
        $message = "Username o password errati.";
    }
}
?>