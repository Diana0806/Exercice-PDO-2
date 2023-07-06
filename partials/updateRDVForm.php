<form action="/process/process-update-rendezvous.php" method="post">

    <label for="id">ID :</label>
    <input type="text" name="id" value="<?php echo $patient['id'] ?>">

    <label for="dateHour">Date et hour de RDV :</label>
    <input type="text" name="dateHour" value="<?php echo $patient['dateHour'] ?>">

    <label for="idPatient">ID du Patient :</label>
    <input type="text" name="idPatient" value="<?php echo $patient['idPatient'] ?>">

    <!-- <input type="hidden" name="id" value="<?php echo $patient['id'] ?>"> -->

    <button type="submit">Modifier</button>

</form>