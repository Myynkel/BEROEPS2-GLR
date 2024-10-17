<?php
require '../config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // Validaties
    if (empty($email) || empty($pwd)) {
        echo "Alle velden moeten ingevuld zijn.";
    } else {
        // Selecteer de gebruiker met het ingevoerde emailadres
        $sql = "SELECT * FROM gebruikers WHERE email = :email";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':email', $email);

        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($pwd, $user['wachtwoord'])) {
                echo "Inloggen geslaagd!";
                header('location: ../index.html');
            } else {
                echo "Onjuist wachtwoord.";
            }
        } else {
            echo "Geen gebruiker gevonden met dit emailadres.";
        }
    }
}

// Sluit de verbinding
$conn = null;

include 'view/login_view.php';