<?php


define('dbname', "mysql:host=localhost;dbname=lawyer_website");
define('user', "root");
define('password', "");



try{


    $pdo = new PDO(  dbname,  user,  password);

}
catch(PDOException $e)
{
    echo "Database Connection Failed: " . $e->getMessage();
}




?>



  