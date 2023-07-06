<?php

// require_once('connexion.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
//     $patientId = $_POST["patientId"];
//     $dateHour = $_POST["dateHour"];

//     $sql = "INSERT INTO appointments (dateHour, idPatients) VALUES ('$dateHour', $patientId)";

    
// }
?>

<?php

require_once('connexion.php');

var_dump($_POST);

if(
    isset($_POST['id']) && !empty($_POST['id'])
    &&  isset($_POST['dateHour']) && !empty($_POST['dateHour'])
    &&  isset($_POST['idPatient']) && !empty($_POST['idPatient'])
    
){
    $data = [
        'id' => $_POST['id'],
        'dateHour' => $_POST['dateHour'],
        'idPatient' => $_POST['idPatient'],
    ];
    $sql = "INSERT INTO appointments (id, dateHour, idPatient) VALUES (:id, :dateHour, :idPatient)";
    $request= $db->prepare($sql);
    $request->execute($data);
}
header('Location: ../liste-rendezvous.php');


?>