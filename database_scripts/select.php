<?php
require("../config.php");

$sql = "SELECT r.Naam AS Recept, i.Naam AS Ingredient
        FROM Recepten AS r
        LEFT JOIN Recept_Ingredienten ri ON r.ReceptID = ri.ReceptID
        LEFT JOIN Ingredienten i ON ri.IngredientID = i.ID";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

if ($stmt->rowCount() > 0) {
    foreach ($result as $row) {
        echo "<h1>Recept: " . $row["Recept"] . "</h1>";
        echo '<ul>';
        while ($row = $stmt->fetch()) {
            echo "<li>" . $row["Ingredient"] . "</li>";
        }
        echo '</ul>';
    }
}