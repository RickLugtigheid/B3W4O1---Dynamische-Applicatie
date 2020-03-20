<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>©Rick Lugtigheid 2020</title>
</head>
<body>
    <?php require "assets/includes/connect.inc.php"; 
    //get the selected character
    $id = $_GET['id'];
    /*
    if(isset($_GET['char'])){
        
    }*/
    //get the information from the table

    $stmt = $handle->prepare("SELECT * FROM characters WHERE id=?");
    $stmt->execute([$id]);
    $char = $stmt->fetch();
    ?>

    <h1 id="tile"><?="$char[1]"?></h1>
    <br>
    <?php
        //show seleceted character
        echo "<div class='char'>";
        echo "<img src='assets/images/$char[2]' alt='No Image found'>";
        echo "<p>$char[4]</p>";
        echo "<div class='stats'><b>h:$char[3]</b><br> <b>a:$char[6]</b><br> <b>d:$char[7]</b><br><br> <b>Weapon: </b>$char[8]</div>";
        echo "</div>";

        include "assets/includes/footer.inc.php";
    ?>
</body>
</html>