<?php
require "header.php";

if (!is_connected()) {
  header("Location: ./login.php");
}

// Tasso di conversione semplice
$tasso = 161.50; // 1 euro = 161.50 yen

// Se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $importo = floatval($_POST["importo"]);
  $direzione = $_POST["direzione"];

  if ($direzione === "euro_to") {
    $risultato = $importo * $tasso;
    $tipo = "Euro → Yen";
  } else {
    $risultato = $importo / $tasso;
    $tipo = "Yen → Euro";
  }

  // Salviamo la conversione
  $_SESSION["transactions"][] = [
    "type" => $tipo,
    "amount" => $importo,
    "result" => $risultato
  ];
}
?>

<h1>Euro / Yen</h1>

<form method="POST">
  <input type="number" step="0.01" name="importo" placeholder="Montant">

  <select name="direzione">
    <option value="euro_to">Euro → Yen</option>
    <option value="to_euro">Yen → Euro</option>
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