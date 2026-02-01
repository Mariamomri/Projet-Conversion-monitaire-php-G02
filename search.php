<?php
include "header.php";

// Prendiamo il testo cercato
$ricerca = strtolower($_GET["q"]);

// Lista pagine cercabili
$paginas = [
  "accueil" => "index.php",
  "planetes" => "page2.php",
  "profil" => "profile.php",
  "conversion" => "conversions/euro_dollars.php"
];

echo "<h1>Résultats pour : $ricerca</h1>";

// Cerchiamo corrispondenze
foreach ($paginas as $parola => $link) {
  if (strpos($parola, $ricerca) !== false) {
    echo "<p><a href='$link'>$parola</a></p>";
  }
}

require "footer.php";
