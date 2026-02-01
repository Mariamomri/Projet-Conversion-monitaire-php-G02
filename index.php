<!-- a) Une page d’accueil avec comme titre Accueil avec une image, un titre et une petite description. (N’importe quel sujet différends de votre projet précédent). -->


<?php
session_start();
$_SESSION['role'] = "admin";
$_SESSION['user'] = [
  'firstname' => 'Mariam',
  'lastname' => 'Omri',
  'login' => 'mariamomri',
  'password' => '123'
];

$title = "Accueil";
$nav = "index";
require "header.php";
?>

<main class="main wrapper">
  <section>
    <h1>Accueil</h1>
    <br>
    <!-- Immagine semplice -->
    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Solar_sys.jpg" width="300">
    <br>
    <p>Bienvenue sur le site de conversion monitaire</p>
  </section>
</main>

<?php require "footer.php"; ?>