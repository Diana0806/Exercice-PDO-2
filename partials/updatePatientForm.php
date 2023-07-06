<form action="/process/process-update-patient.php" method="post">

    <label for="lastname">Nom de famille :</label>
    <input type="text" name="lastname" value="<?php echo $patient['lastname'] ?>">

    <label for="firstname">Prénom :</label>
    <input type="text" name="firstname" value="<?php echo $patient['firstname'] ?>">

    <label for="birthdate">Date de naissance :</label>
    <input type="text" name="birthdate" value="<?php echo $patient['birthdate'] ?>">

    <label for="phone">Téléphone :</label>
    <input type="text" name="phone" value="<?php echo $patient['phone'] ?>">

    <label for="mail">Email :</label>
    <input type="text" name="mail" value="<?php echo $patient['mail'] ?>">

    <input type="hidden" name="id" value="<?php echo $patient['id'] ?>">

    <button type="submit">Modifier</button>

</form>