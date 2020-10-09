<?php

include "db.php";

$result = [];

if(!empty($_GET["author"]) || $_GET["author"] == "All"){

  $author = $_GET["author"];

  foreach ($database as $cd) {
    if ($cd["author"] == $author) {
      $result[] = $cd;
    }
  }

} elese{
  $result = $database;
}


header('Content-Type: application/json');
// codifica tra client e server
echo json_encode($result);
?>
