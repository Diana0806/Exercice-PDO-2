<?php

require_once('connexion.php');

$query = "SELECT * FROM patients";
    $request = $db->query($query);
    $patients = $request->fetchAll($db::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajout Rendezvous</title>
</head>
<body>
    <h2>Ajout Rendezvous</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="patientId">Choisir un patient:</label>
        <select name="patientId" required>
            <?php foreach ($patients as $patient) { ?>
                <option value="<?php echo $patient["id"]; ?>"><?php echo $patient["firstname"] . " " . $patient["lastname"]; ?></option>
            <?php } ?>
        </select>
        <br><br>
        <label for="dateHour">Date et hour de RDV:</label>
        <input type="datetime-local" name="dateHour" required><br><br>
        <input type="submit" value="Créer le RDV">
    </form>
</body>
</html>
