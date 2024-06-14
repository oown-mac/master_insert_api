<?php

function dbconnection()
{
    $con=mysqli_connect("localhost","root","","rongrot_app");
    // $con=mysqli_connect("localhost","root","rongrot_app");

    // $con->set_charset("utf8");
    
    return $con;
}


?>