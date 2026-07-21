<!-- d) Une page Profil avec comme titre profil qui affichera une image de profile ainsi que votre Nom et Prénom. Elle reprendra aussi toutes vos transactions effectuer dans un tableau. -->

<?php

$title = "Profil";
$nav = "profil";
require "header.php";

if (!is_connected()) {
  header("Location: ./login.php");
}
?>

<main class="main">
  <section class="Profil">
    <section class="smain">
      <img src="1af8d3b487b77085d5288814f151e1de_w200.webp" alt="coriandoli" class="coriandoli">
      <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?> !</h1>
      <img src="profilf.png" alt="img profil" width="150px" class="img-profil">
    </section>

    <section>

      <h1>Profil</h1>

      <p><strong>Prénom:</strong> <?php echo $_SESSION['pseudo']; ?></p>
      <p><strong>Nom:</strong> <?php
                                if ($_SESSION['pseudo'] === "Mariam") {
                                  echo "Omri";
                                } elseif ($_SESSION['pseudo'] === "Hajar") {
                                  echo "Hajar stp entrudui ton nom de famille dans le fichier profil.php";
                                }
                                ?></p>

      <h2>Historique transactions effectuer</h2>

      <table border="1">
        <tr>
          <th>Type</th>
          <th>Montant</th>
          <th>Résultat</th>
        </tr>

        <?php
        // Mostriamo tutte le conversioni salvate
        if (!empty($_SESSION["transactions"])) {
          foreach ($_SESSION["transactions"] as $t) {
            echo "<tr>
                                <td>" . $t["type"] . "</td>
                                <td>" . $t["amount"] . "</td>
                                <td>" . $t["result"] . "</td>
                              </tr>";
          }
        }
        ?>
      </table>
    </section>
</main>

<?php require "footer.php"; ?>