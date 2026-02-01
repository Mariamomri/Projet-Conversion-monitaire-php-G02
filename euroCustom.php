<?php
require "header.php";

if (!is_connected()) {
  header("Location: ./login.php");
}

// Se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $tasso = floatval($_POST["tasso"]);
  $importo = floatval($_POST["importo"]);
  $direzione = $_POST["direzione"];

  if ($direzione === "euro_to") {
    $risultato = $importo * $tasso;
    $tipo = "Euro → Custom";
  } else {
    $risultato = $importo / $tasso;
    $tipo = "Custom → Euro";
  }

  $_SESSION["transactions"][] = [
    "type" => $tipo,
    "amount" => $importo,
    "result" => $risultato
  ];
}
?>

<h1>Euro / Monnaie personnalisée</h1>

<form method="POST">

  <!-- Tasso scelto dall'utente -->
  <input type="number" step="0.01" name="tasso" placeholder="Taux de conversion">

  <input type="number" step="0.01" name="importo" placeholder="Montant">

  <select name="direzione">
    <option value="euro_to">Euro → Custom</option>
    <option value="to_euro">Custom → Euro</option>
  </select>

  <button type="submit">Convertir</button>
</form>

<?php
if (isset($risultato)) {
  echo "<p>Résultat : $risultato</p>";
}
?>

<?php
require "footer.php";
?>