<?php
    //database constant
    define('db_host', 'localhost');
    define('db_user', 'root');
    define('db_pass', '');
    define('db_name', 'gallery_db');
    
    $connection = mysqli_connect(db_host,db_user,db_pass,db_name) ;
    if($connection){
        echo "yes";
    }



?>