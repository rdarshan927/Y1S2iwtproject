<?php

    $HOST = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'iwt';

    $CONNECT = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE);

    if(!$CONNECT){
        die("Connection failed: ".mysqli_connect_error());
    }
    // else{
        // echo "Connected successfully";
    // }

?>