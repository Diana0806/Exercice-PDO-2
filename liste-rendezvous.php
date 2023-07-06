<?php
require_once('connexion.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des rendez-vous</title>
</head>
<body>
    <h1>Liste des rendez-vous</h1>

    <a href="ajout-rendezvous.php">Créer un nouveau rendez-vous</a><br><br>

    <?php
    $query = "SELECT * FROM appointments";
    $request = $db->query($query);

    if ($request->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th></tr>";
        while ($row = $request->fetch($db::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['dateHour']."</td>";
            echo "<td>".$row['idPatients']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Il n'y pas de RDV disponible.";
    }
    ?>
</body>
</html>