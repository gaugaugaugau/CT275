<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_NAME','qlbanhang');
    $connect=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to mySQL: ".mysql_error());
    $db=mysqli_select_db($connect,DB_NAME) or die ("Failed to connect to mySQL" .mysql_error());
    mysqli_set_charset($connect,'UTF8');
?>