<?php
require "header.php";

if (!is_connected()) {
  header("Location: ./login.php");
}

$tasso = 3100; // 1 euro = 3100 francs congolais

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $importo = floatval($_POST["importo"]);
  $direzione = $_POST["direzione"];

  if ($direzione === "euro_to") {
    $risultato = $importo * $tasso;
    $tipo = "Euro → Francs RDC";
  } else {
    $risultato = $importo / $tasso;
    $tipo = "Francs RDC → Euro";
  }

  $_SESSION["transactions"][] = [
    "type" => $tipo,
    "amount" => $importo,
    "result" => $risultato
  ];
}
?>

<h1>Euro / Francs RDC</h1>

<form method="POST">
  <input type="number" step="0.01" name="importo">

  <select name="direzione">
    <option value="euro_to">Euro → Francs RDC</option>
    <option value="to_euro">Francs RDC → Euro</option>
  </select>

  <button type="submit" class="calcola">Convertir</button>
</form>

<?php if (isset($risultato)) echo "<p>Résultat : $risultato</p>"; ?>

<?php
require "footer.php";
?>