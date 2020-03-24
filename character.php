<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

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
    <header>
        <h1><?="$char[1]"?></h1>
        <a href="index.php"><img src='assets/images/arrowLeft.svg' class='icon'> Terug</a>
    </header>
    <div id="center-div" style="padding-bottom: 1%;">
    <?php
        //show seleceted character
        echo "<img src='assets/images/$char[2]' alt='No Image found'>";
        echo "<div id='bio'>".nl2br($char['4'])."</div>";
        echo "<div id='charStats' style='background-color: $char[5];'<b><img src='assets/images/heartIcon.svg' class='icon'> $char[3]</b><br> <img src='assets/images/attackIcon.svg' class='icon'> $char[6]<br> <img src='assets/images/shieldIcon.svg' class='icon'> $char[7]<br><br> ";
        if($char[8] != null){echo "<b class='itemTile'>Weapon: </b>$char[8]";}
        if($char[9] != null){echo "<br><b class='itemTile'>Armor: </b>$char[9]";};?>
    </div></div>
    
    <?php include "assets/includes/footer.inc.php";?>
</body>
</html>