<?php
require_once('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
</head>
<body>
    <h1>Rendez-vous</h1>

    <?php

    try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        
        $db = new PDO( $dns, $user, $password);

        
        $query = "SELECT * FROM appointments WHERE id = :id";
        $request = $db->prepare($query);
        $request->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $request->execute();

        if ($request->rowCount() > 0) {
            $appointment = $request->fetch(PDO::FETCH_ASSOC);
            echo "<p><strong>ID :</strong> " . $appointment['ID'] . "</p>";
            echo "<p><strong>dateHour :</strong> " . $appointment['dateHour'] . "</p>";
            echo "<p><strong>Date de naissance :</strong> " . $appointment['birthdate'] . "</p>";

            //   // Add the link to the update page
            //   echo "<a href='update-rendezvous.php?id=" . $appointment['id'] . "'>Modifier le RDV</a>";
            
        } else {
            echo "Aucun RDV trouvé.";
        }
    } else {
        echo "Identifiant du RDV non valide.";
    }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</body>
</html>
