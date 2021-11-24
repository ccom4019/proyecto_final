<?php
    function connectDB()
    {
        try
        {
            $pdoObj = new PDO('mysql:host=136.145.29.193; dbname=roxmaral_db','roxmaral','R@mar12345');
            return $pdoObj;
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            die("ERROR: Unable to connect to database!");
            return false;
        }
    }
?>