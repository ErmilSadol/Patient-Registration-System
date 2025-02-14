<?php

    $con= new mysqli('localhost','root','','patient');

    if(!$con){
        die(mysqli_error($con));
    }

?>