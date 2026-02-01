</div> <!-- fermeture de .wrapper dal header.php -->

<!-- script Bootstrap -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>

<footer>
  <div class="am">
    <p> &copy; <?= date('Y') ?> Cfitech, Mariam & Hajar</p>
  </div>

  <div class="footerlink am">
    <!-- home -->
    <a href="./index.php" class="nav-item<?php if (isset($nav) && $nav === "index"): ?> active<?php endif ?>">Accueil</a>

    <!-- debug -->
    <a href="./sessionActuelle.php" class="nav-item<?php if (isset($nav) && $nav === "sessionActuelle"): ?> active<?php endif ?>">......</a>

    <!-- reset -->
    <a href="./resetSessions.php" class="nav-item<?php if (isset($nav) && $nav === "resetSessions"): ?> active<?php endif ?>">......</a>
  </div>

  <div class="am">
    <?php
    date_default_timezone_set("Europe/Brussels"); // fuso orario
    ?>
    <p class="date"><?= date("d/m/Y H:i") ?></p>
  </div>

</footer>

</body>

</html>