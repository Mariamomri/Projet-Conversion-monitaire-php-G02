<?php
$title = "bourse";
$nav = "bourse";
require "header.php"; ?>

<main class="main wrapper sfondo">
  <section class="colonna">
    <section class="bourse-intro">
      <h1>Bourse</h1>
      <p>
        Suivez l’évolution des principales actions en temps réel.
        Ce tableau vous donne une vue rapide des tendances du marché financier.
      </p>
    </section>

    <section class="bourse-table">
      <table>
        <thead>
          <tr>
            <th>Action</th>
            <th>Prix</th>
            <th>Variation</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Apple (AAPL)</td>
            <td>189.12 €</td>
            <td class="up">+1.24%</td>
          </tr>

          <tr>
            <td>Microsoft (MSFT)</td>
            <td>312.45 €</td>
            <td class="down">-0.87%</td>
          </tr>

          <tr>
            <td>Tesla (TSLA)</td>
            <td>215.78 €</td>
            <td class="up">+3.12%</td>
          </tr>

          <tr>
            <td>Amazon (AMZN)</td>
            <td>142.33 €</td>
            <td class="down">-0.45%</td>
          </tr>

          <tr>
            <td>Meta (META)</td>
            <td>367.20 €</td>
            <td class="up">+0.92%</td>
          </tr>
        </tbody>
      </table>
    </section>
  </section>
</main>



<?php
require "footer.php";
?>