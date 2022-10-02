<?php

    $server = 'localhost';
    $username = 'root';
    $password = 'Husenahmad';
    $db = 'Valudas_Management';

        $con = mysqli_connect($server, $username, $password, $db);
       

        if($con)
        {
            // echo 'Connection Successfull';
        }
        else
        {
            echo 'Connection Not Successfull';
        }

?>