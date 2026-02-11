<?php
require "header.php";

if (!is_connected()) {
  header("Location: ./login.php");
}

// Tasso fisso semplice
$tasso = 1.08;

// Se il form è inviato
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $importo = floatval($_POST["importo"]);
  $direzione = $_POST["direzione"];

  if ($direzione === "euro_to") {
    $risultato = $importo * $tasso;
    $tipo = "Euro → Dollar";
  } else {
    $risultato = $importo / $tasso;
    $tipo = "Dollar → Euro";
  }

  // Salviamo la conversione
  $_SESSION["transactions"][] = [
    "type" => $tipo,
    "amount" => $importo,
    "result" => $risultato
  ];
}
?>

<h1>Euro / Dollar</h1>

<form method="POST">
  <input type="number" step="0.01" name="importo" placeholder="Montant">

  <select name="direzione">
    <option value="euro_to">Euro → Dollar</option>
    <option value="to_euro">Dollar → Euro</option>
  </select>

  <button type="submit" class="calcola">Convertir</button>
</form>

<?php
if (isset($risultato)) {
  echo "<p>Résultat : $risultato</p>";
}
?>

<?php
require "footer.php";
?>