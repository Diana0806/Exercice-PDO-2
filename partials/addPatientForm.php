<form action="./process/process-add-patient.php" method="POST">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" required><br><br>

        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" required><br><br>

        <label for="birthdate">Date de naissance :</label>
        <input type="date" name="birthdate" id="birthdate" required><br><br>

        <label for="phone">Numéro de Téléphone :</label>
        <input type="tel" name="phone" id="phone" required><br><br>

        <label for="mail">Mail :</label>
        <input type="text" name="mail" id="mail" required><br><br>

        <input type="submit" value="Créer le patient">
    </form>