<?php
require_once(__DIR__ . '/templates/header.php');
?>


<main class="form-signin w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal">Connectez-vous.</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">C'est parti</button>
  </form>
</main>
      

<?php
require_once(__DIR__ . '/templates/footer.php');
?>