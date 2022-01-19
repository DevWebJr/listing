<?php

$con = mysqli_connect("localhost:3308","root","","live_search");

if(!$con){
    echo "Connection failed".mysqli_connect_error();
}

?>