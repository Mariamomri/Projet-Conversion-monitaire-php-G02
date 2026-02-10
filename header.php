<?php
// ...existing code...
// Avvia la sessione e carica le funzioni prima di qualsiasi output
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once __DIR__ . "/functions/autentifications.php";
// ...existing code...
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Mariam Omri">
  <meta name="description" content="Projet php decembre 2025">
  <meta name="keywords" content="HTML, CSS, PHP Responsive">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">


  <!-- link bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="logo">
        <img src="échange-de-signes-change-euro-et-dollar-conversion-monétaire-illustration-vectorielle-isolée-sur-fond-blanc-258991261.webp" alt="logo-img" width="100px">
        <h1 class="titheader">Conversion</h1>
      </div>

      <nav>
        <a href="./index.php" class="nav-item<?php if (isset($nav) && $nav === "index"): ?> active<?php endif ?>">Accueil</a>
        <a href="./bourse.php" class="nav-item<?php if (isset($nav) && $nav === "bourse"): ?> active<?php endif ?>">Bourse</a>

        <?php if (is_connected()): ?>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="conversionMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Conversion
            </a>
            <ul class="dropdown-menu" aria-labelledby="conversionMenu">
              <li><a class="dropdown-item" href="euroDollars.php">Euro/Dollars</a></li>
              <li><a class="dropdown-item" href="euroYen.php">Euro/Yen</a></li>
              <li><a class="dropdown-item" href="euroPounds.php">Euro/Pounds</a></li>
              <li><a class="dropdown-item" href="euroFrancsRDC.php">Euro/Francs RDC</a></li>
              <li><a class="dropdown-item" href="euroDirham.php">Euro/Dirham</a></li>
              <li><a class="dropdown-item" href="euroCustom.php">Euro/Custom</a></li>
            </ul>
          </div>

          <a href="./profile.php" class="nav-item <?php if (isset($nav) && $nav === "profil"): ?> active<?php endif ?>">Profil</a>
        <?php endif; ?>
      </nav>
      <nav>
        <?php if (!is_connected()): ?>
          <a href="login.php" class="nav-item<?php if (isset($nav) && $nav === "login"): ?> active<?php endif ?>">Login</a>
        <?php else : ?>
          <a class="nav-item log" href="./logout.php">Logout</a>
        <?php endif; ?>
      </nav>

    </header>