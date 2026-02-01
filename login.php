<!-- e) Une page Login qui nous permettra de nous connecter avec un identifiant et mot de passe de votre choix. Pas de titre pour cette page. Par contre je veux un titre par défaut (revoyez le cours). -->

<!--questo se nel caso non c'è titolo metterà Conversion-->
<title>
  <?php
  if (isset($title)):
    echo $title;
  else:
    echo "Conversion";
  endif
  ?>
</title>

<?php
$nav = "login";
$erreur = null;

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
  if (($_POST['pseudo'] === "Mariam" && $_POST['password'] === "123") || ($_POST['pseudo'] === "Hajar" && $_POST['password'] === "123")) {
    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['connected'] = true;
    header("Location: ./profil.php");
  } else {
    $erreur = "<p class='textError'>Identifiants incorrects ! </p>";
  }
}

require "header.php";

if (is_connected()) {
  header("Location: ./profile.php");
}
?>


<main class="main login-main">

  <!--mostra il messaggio errore-->
  <?php if ($erreur) : ?>
    <div class="alert alert-danger"> <?php echo $erreur ?> </div>
  <?php endif; ?> <!--alert alert-danger"  est bootsrap-->

  <section>
    <div class="login">
      <h1>Login</h1>
      <br>
      <section class="card">
        <form action="./login.php" method="POST">
          <input type="text" name="pseudo" placeholder="Entrez votre pseudo">
          <br>
          <input type="password" name="password" placeholder="Entrez votre password">
          <br>
          <button type="submit" class="btn-form-log">Se connecter</button>
        </form>
      </section>
    </div>

  </section>
</main>


<?php
require "footer.php";
?>