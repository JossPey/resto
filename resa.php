<?php
require_once(__DIR__ . '/templates/header.php');
?>


<main>
    <div class="container">
        <h1>Réservation de table</h1>

        <form class="resa" action="resa.php" method="POST">
            <label for="name">Nom & Prénom :</label>
            <input type="text" id="name" name="name" autocomplete="off" required><br><br>
            <label for="phone">Numéro de téléphone :</label>
            <input type="text" id="phone" name="phone" autocomplete="off" required><br><br>
            <label for="allergies">Alergies potentielles :</label>
            <input type="text" id="allergies" name="allergies" autocomplete="off"><br><br>
            <label for="Nombres">Nombre de couverts :</label>
            <input type="text" id="couverts" name="couverts" autocomplete="off" required><br><br>
            <label for="date">Date :</label>
            <input type="date" id="date" name="date" autocomplete="off" required><br><br>
            <select name="hour" id="hour" placeholder="Selectionner une heure" required>
                <option value="hour-select">11h00</option>
                <option value="hour-select">11h15</option>
                <option value="hour-select">11h30</option>
                <option value="hour-select">11h45</option>
                <option value="hour-select">12h00</option>
                <option value="hour-select">12h15</option>
                <option value="hour-select">12h30</option>
                <option value="hour-select">12h45</option>
                <option value="hour-select">13h00</option>
                <option value="hour-select">13h15</option>
                <option value="hour-select">13h30</option>
                <option value="hour-select">13h45</option>
                <option value="hour-select">14h00</option>

                <option value="hour-select">18h00</option>
                <option value="hour-select">18h15</option>
                <option value="hour-select">18h30</option>
                <option value="hour-select">18h45</option>
                <option value="hour-select">19h00</option>
                <option value="hour-select">19h15</option>
                <option value="hour-select">19h30</option>
                <option value="hour-select">19h45</option>
                <option value="hour-select">20h00</option>
                <option value="hour-select">20h15</option>
                <option value="hour-select">20h30</option>
                <option value="hour-select">20h45</option>
                <option value="hour-select">21h00</option>
            </select><br><br>
            <input type="submit" value="Réserver"><br><br>
        </form>
    </div>
</main>


<?php
require_once(__DIR__ . '/templates/footer.php');
?>