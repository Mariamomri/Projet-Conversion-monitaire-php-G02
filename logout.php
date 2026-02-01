<!-- f) Un onglet Logout qui vous déconnectera. Mais aussi qui supprimera toutes les conversions que vous avez fait mais pas les taux de conversion. -->


<?php
session_start();

// Cancella SOLO le transazioni
unset($_SESSION["transactions"]);

// Disconnette l'utente
unset($_SESSION["connected"]);
unset($_SESSION['pseudo']);

header("Location: index.php");

// c) supprimera toutes les conversions que vous avez fait mais pas les taux de conversion.
unset($_SESSION['dernier+']);
unset($_SESSION['dernier-']);
unset($_SESSION['dernier/']);
unset($_SESSION['dernier*']);

?>