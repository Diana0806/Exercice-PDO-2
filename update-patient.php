<?php

include_once('connexion.php');

$query = "SELECT * FROM patients WHERE id = :id";
$request = $db->prepare($query);
$request->bindParam(':id', $_GET['id'], $db::PARAM_INT);
$request->execute();

$patient = $request->fetch();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Mise à jour du patient</h1>

    <h2>Modifier le patient</h2>

    <?php include_once('partials/updatePatientForm.php') ?>


</body>

</html>