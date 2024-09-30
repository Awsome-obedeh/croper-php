<?php
    define("HOST", "localhost");
    define("DB_USER","root");
    define("PASSWORD", '');
    define("DB_NAME", "corperdb");

    // creaet a connection with  my database
    $conn= new mysqli(HOST,DB_USER,PASSWORD,DB_NAME);
    if($conn->connect_error){
       
        // kill connection
        die("dabase could not connect" . mysqli_connect_error());
    }
   


?>