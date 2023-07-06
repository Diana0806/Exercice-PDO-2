<form action="./process/process-add-rendezvous.php" method="POST">
        <label for="id">ID :</label>
        <input type="text" name="id" id="id" required><br><br>

        <label for="dateHour">Date et hour de RDV :</label>
        <input type="text" name="dateHour" id="dateHour" required><br><br>

        <label for="idPatient">ID du Patient :</label>
        <input type="text" name="idPatient" id="idPatient" required><br><br>

        <input type="submit" value="Créer le RDV">
    </form>