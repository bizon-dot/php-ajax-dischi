<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpDISK</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "database.php" ?>
    <div class="container">
        <div class="container-album">
            <?php 
            foreach ($db as $album) {
                echo ' <div class="album">';
                echo ($album["title"] . "<br>");
                echo '</div>';
            }?>
          
            </div>
        </div>
        
    </div>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- MainJs -->
    <script src="js/main.js"></script>
</body>
</html>