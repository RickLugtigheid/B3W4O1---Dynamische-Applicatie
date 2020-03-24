<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>©Rick Lugtigheid 2020</title>
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <?php require "assets/includes/connect.inc.php"; 
        //get the information from the table
        $rows = $table->fetchAll(PDO::FETCH_NUM);
        $count = $table->rowCount();
    ?>
</head>
<body>
    <header><h1>Alle <?=$count?> characters uit de database</h1></header>
    <div id="center-div">
    <?php 
        foreach($rows as $row) {
            echo "<div class='char'>";
            //schow each character
            echo "<img src='assets/images/$row[2]' alt='No Image found' class='charImg'>";
            echo "<h2 class='name'>$row[1]</h2>";
            echo "<div class='stats'><img src='assets/images/heartIcon.svg' class='icon'> <b>$row[3]</b><br> <img src='assets/images/attackIcon.svg' class='icon'> <b>$row[6]</b><br> <img src='assets/images/shieldIcon.svg' class='icon'> <b>$row[7]</b></div>";
            echo "<a href='character.php?id=$row[0]' class='show'><img src='assets/images/searchIcon.svg' class='icon right'> bekijk<a/> <br><hr>";
            echo "</div>";
        }?>
    </div>
        <?php include "assets/includes/footer.inc.php";?>
</body>
</html>