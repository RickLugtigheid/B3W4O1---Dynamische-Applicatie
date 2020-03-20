<?php
//©Rick Lugtigheid 2020
//get the information we need to connect to the database
    $serverName = "127.0.0.1";
    $username = "root";//This is the username for php myadmin
    $password = "mysql";//the default password for ampps/phpmyadmin is mysql
    $db = "school"; //The name of the database

    try{
        //argument 1 is to connect to the server and find the database
        //the second and third is to verify to php myadmin that you are the admin
        $handle = new PDO("mysql:host=$serverName;dbname=$db","$username", "$password");
        //the first Attribute will report it to the webpage if something goes wrong
        //the second trows the error to the catch 
        $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $table = $handle->query("SELECT * FROM characters ORDER BY `name`");

        //database conected
    }catch(PDOException $e){
        //database conection error
        die("[Database error]<br> <br>Error: $e");
    }