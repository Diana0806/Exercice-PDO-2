<?php

include_once('../connexion.php');

if(
    !empty($_POST['lastname'])
    && !empty($_POST['firstname'])
    && !empty($_POST['birthdate'])
    && !empty($_POST['phone'])
    && !empty($_POST['mail'])
    && !empty($_POST['id'])
){

    $data = [
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'birthdate' => $_POST['birthdate'],
        'phone' => $_POST['phone'],
        'mail' => $_POST['mail'],
        'id' => $_POST['id'],
    ];
    $sql = "UPDATE patients SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate, phone=:phone, mail=:mail WHERE id=:id";
    $request= $db->prepare($sql);
    $request->execute($data);
}
header('Location: ../liste-patients.php');






?>