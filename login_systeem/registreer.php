<?php
// Gegevens database van Michael
$servername = "";
$username = "";
$password = "";
$database = "";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Verbinden met de database
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

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
            echo "Registratie succesvol! Je kunt nu inloggen.";
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
?>
