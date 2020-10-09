// npm install jquery
const $ = require('jquery');
// npm install handlebars
const Handlebars = require("handlebars");

$(document).ready(function(){

  // Chiamata all'API locale in server.php
  $.ajax({
    "url": "http://localhost:81/php-ajax-dischi/server.php",
    "method": "GET",
    "success": function(data) {
      render(data);
      printAuthor(data);
    },
    "error": function(error) {
      alert("Errore!");
    }
  });

  $("#select").change(function(){
    var author = $(this).val();

    $.ajax({
      "url": "http://localhost:81/php-ajax-dischi/server.php",
      "data":{
        "author": author
      },
      "method": "GET",
      "success": function(data) {
        render(data);
      },
      "error": function(error) {
        alert("Errore!");
      }
    });
  });


  // Funzione per stampare attraverso il template Handlebars
  function render(data) {
    $(".cds").html("");
    var source = $("#cd-template").html();
    var template = Handlebars.compile(source);

    for(var i = 0; i < data.length; i++) {

      var context = {
        "poster": data[i].poster,
        "title": data[i].title,
        "author": data[i].author,
        "year": data[i].year
      }
      printAuthor(data[i]["author"]);
      var html = template(context);
      $(".cds").append(html);
    }
  }

  // Funzione per la stampa degli autori per la ricerca sulla topbar
  function printAuthor(data){
    var authors = [];

    for (var i = 0; i < data.length; i++) {
      var author = data[i]["author"];

      if (!authors.includes(author)) {
        var source = $("#author-option-template").html();
        var template = Handlebars.compile(source);

        var context = {
          "author": author
        }
        var html = template(context);
        $("#select").append(html);
        authors.push(author);
      }
    }

  }
});
