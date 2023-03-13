<?php

function connection(){
    $host= "localhost";
    $user= "root";
    $pass ="";
    $bd = "bd_bancoop";

    $connect = mysqli_connect($host,  $user,  $pass);

    mysql_select_db($connect, $bd = "bd_bancoop");

    return  $connect;
};

?>