<?php
require_once('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil du patient</title>
</head>
<body>
    <h1>Profil du patient</h1>

    <?php

    try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        
        $db = new PDO( $dns, $user, $password);

        
        $query = "SELECT * FROM patients WHERE id = :id";
        $request = $db->prepare($query);
        $request->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $request->execute();

        if ($request->rowCount() > 0) {
            $patient = $request->fetch(PDO::FETCH_ASSOC);
            echo "<p><strong>Prénom :</strong> " . $patient['firstname'] . "</p>";
            echo "<p><strong>Nom :</strong> " . $patient['lastname'] . "</p>";
            echo "<p><strong>Date de naissance :</strong> " . $patient['birthdate'] . "</p>";
            echo "<p><strong>Phone :</strong> " . $patient['phone'] . "</p>";
            echo "<p><strong>Mail :</strong> " . $patient['mail'] . "</p>";


              // Add the link to the update page
              echo "<a href='update-patient.php?id=" . $patient['id'] . "'>Modifier le patient</a>";
            
        } else {
            echo "Aucun patient trouvé.";
        }
    } else {
        echo "Identifiant du patient non valide.";
    }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</body>
</html>