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

<main class="main wrapper sfondo">
  <section>
    <h1>Bienvenue sur le site de conversion monitaire</h1>
    <br>
    <!-- Immagine semplice -->

    <p>Découvrez notre site de conversion monétaire simple, rapide et intuitif.</p>
  </section>
</main>

<?php require "footer.php"; ?>