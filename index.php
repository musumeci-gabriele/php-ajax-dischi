<?php
include 'db.php';






?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/app.css">
    <title>Dischi in Php</title>
  </head>

  <body>

    <!-- Locandine -->
    <div class="container">

          <!-- lista di stampa -->
          <ul>

              <?php foreach ($database as $info): ?>

                <li>
                  <h2><?php echo $info["title"] ?></h2>
                  <h3><?php echo $info["author"] ?></h3>
                  <p><?php echo $info["year"] ?></p>
                  <?php echo $info["poster"] ?>
                </li>

              <?php endforeach; ?>

          </ul>
          <!--// lista di stampa -->

    </div>
    <!--// Locandine -->


    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
