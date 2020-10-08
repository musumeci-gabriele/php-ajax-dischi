<?php
include 'db.php';

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi in Php</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>

  <body>
    <!-- topbar -->
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="logo">
        </div>
      </div>
    </header>
    <!-- // topbar-->


    <!-- Locandine -->
    <main>

      <div class="container">
        <div class="cds">

          <!-- lista di cd-->
          <?php foreach ($database as $info): ?>
            <div class="cd">
              <div class="cd-poster">
                <img src="<?php echo $info["poster"] ?>" alt="poster">
              </div>

              <h2 class="cd-title"><?php echo $info["title"] ?></h2>
              <h3 class="cd-author"><?php echo $info["author"] ?></h3>
              <p class="cd-year"><?php echo $info["year"] ?></p>
            </div>
          <?php endforeach; ?>
          <!--// lista di cd -->

        </div>
      </div>

    </main>
    <!--// Locandine -->


    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
