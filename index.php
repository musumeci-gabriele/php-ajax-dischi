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

        <div class="header-container">
          <div class="logo">
            <img src="img/logo.png" alt="logo">
          </div>

          <select id="select" class="authors" name="authors">
            <option value="All">All</option>
          </select>
        </div>

      </div>
    </header>
    <!-- // topbar-->


    <!-- Locandine -->
    <main>
      <div class="container">
        <div class="cds">
        </div>
      </div>
    </main>
    <!--// Locandine -->

    <!-- Template Handlebars per i dischi-->
    <script id="cd-template" type="text/x-handlebars-template">
      <div class="cd">
        <div class="cd-poster">
          <img src="{{poster}}">
        </div>
        <h2 class="cd-title">{{title}}</h2>
        <h3 class="cd-author">{{author}}</h3>
        <p class="cd-year">{{year}}</p>
      </div>
    </script>
    <!-- // template handlebars per i dischi-->

    <!-- template per la ricerca degli autori -->
    <script id="author-option-template" type="text/x-handlebars-template">
        <option value="{{author}}">{{author}}</option>
    </script>
    <!--// template per la ricerca degli autori -->

    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
