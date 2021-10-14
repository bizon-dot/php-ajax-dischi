<?php
require __DIR__ . "/database.php";


if (isset($_GET["query"]) && !($_GET["query"] == "All")) {
    $data = [];
    $query = $_GET["query"];
  
    header('Content-Type: application/json');
    foreach ($db as $album) {
        if ($album["genre"] == $query ) {
           $data[]=$album;
        }
    }
    echo (json_encode($data));

} else {
     header('Content-Type: application/json');
     echo (json_encode($db));
}







?>