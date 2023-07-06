<?php

include_once('../connexion.php');

if(
    !empty($_POST['id'])
    && !empty($_POST['dateHour'])
    && !empty($_POST['idPatient'])
){

    $data = [
        'id' => $_POST['id'],
        'dateHour' => $_POST['dateHour'],
        'idPatient' => $_POST['idPatient'],
    ];
    $sql = "UPDATE patients SET id=:id, dateHour=:dateHour, idPatient=:idPatient WHERE id=:id";
    $request= $db->prepare($sql);
    $request->execute($data);
}
header('Location: ../liste-rendezvous.php');


?>