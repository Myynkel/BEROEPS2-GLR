<?php

require '../config.php';


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // Validaties
    if (empty($email) || empty($pwd)) {
        echo "Alle velden moeten ingevuld zijn.";
    } else {
        // Wachtwoord hashen
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


        //voegt nieuwe rij toe aan tabel gebruikers in database
        $sql = "INSERT INTO gebruikers (email, wachtwoord) VALUES (:email, :wachtwoord)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':wachtwoord', $hashedPwd);


        if ($stmt->execute()) {
            header("Location: login.php"); // Direct doorsturen naar login
            exit();
        } else {
            echo "Fout bij registratie.";
        }
    }
}
//sluit verbinding
$conn = null;

include 'view/registreren_view.php';

