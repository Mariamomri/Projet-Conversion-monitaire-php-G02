<?php
require "header.php";

if (!is_connected()) {
  header("Location: ./login.php");
}

$tasso = 10.90; // 1 euro = 10.90 dirham

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $importo = floatval($_POST["importo"]);
  $direzione = $_POST["direzione"];

  if ($direzione === "euro_to") {
    $risultato = $importo * $tasso;
    $tipo = "Euro → Dirham";
  } else {
    $risultato = $importo / $tasso;
    $tipo = "Dirham → Euro";
  }

  $_SESSION["transactions"][] = [
    "type" => $tipo,
    "amount" => $importo,
    "result" => $risultato
  ];
}
?>

<h1>Euro / Dirham</h1>

<form method="POST">
  <input type="number" step="0.01" name="importo">

  <select name="direzione">
    <option value="euro_to">Euro → Dirham</option>
    <option value="to_euro">Dirham → Euro</option>
  </select>

  <button type="submit">Convertir</button>
</form>

<?php if (isset($risultato)) echo "<p>Résultat : $risultato</p>"; ?>

<?php
require "footer.php";
?>