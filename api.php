<?php
function query ($str,$db){
    $filterdAlbum = [];
    foreach ($db as $album) {
        ($album["genere"] == $str) ? array_push($filterdAlbum,$album) : null;
    }
    print_r($filterdAlbum);
    return $filterdAlbum;
}



require __DIR__ . "/database.php";


if (isset($_GET["query"])) {
    header('Content-Type: application/json');
    echo (json_encode($db));

} else {
     header('Content-Type: application/json');
     echo (json_encode($db));
}






?>