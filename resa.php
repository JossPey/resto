<?php
require_once(__DIR__ . '/templates/header.php');
?>


<!--Resa form-->
<main>
    <div class="container">
        <h1>Réservation de table</h1>

        <form class="resa" action="resa.php" method="POST">
            <label for="name">Nom & Prénom :</label>
            <input type="text" id="name" name="name" autocomplete="off" required><br><br>
            <label for="phone">Numéro de téléphone :</label>
            <input type="text" id="phone" name="phone" autocomplete="off" required><br><br>
            <label for="allergies">Allergies potentielles :</label>
            <input type="text" id="allergies" name="allergies" autocomplete="off"><br><br>
            <label for="Nombres">Nombre de couverts (10max) :</label>
            <input type="text" id="couverts" name="couverts" autocomplete="off" required><br><br>
            <label for="date">Date :</label>
            <input type="date" id="date" name="date" autocomplete="off" required><br><br>
            <select name="hour" id="hour" placeholder="Selectionner une heure" required>
                <option value="hour-select">12h00</option>
                <option value="hour-select">12h15</option>
                <option value="hour-select">12h30</option>
                <option value="hour-select">12h45</option>
                <option value="hour-select">13h00</option>

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

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div><br>

            <!--login form offcanvas-->

            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Reserver</button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">


                <main class="form-signin w-100 m-auto">
                    <form>
                        <h1 class="h3 mb-3 fw-normal">Connectez-vous.</h1>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" required>
                            <label for="floatingPassword">Mot de passe</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me"> Se souvenir de moi
                            </label>
                        </div>

                        <button onclick="alert('Votre reservation à bien été prise en compte !')" id="okLogin" class="w-100 btn btn-lg btn-primary" type="submit">C'est parti</button>
                    </form>
                </main>


            </div>



        </form>
    </div>
</main>


<?php
require_once(__DIR__ . '/templates/footer.php');
?>