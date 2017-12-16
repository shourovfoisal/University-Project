<?php

    include '../connection/db_connect.php';
    mysqli_select_db($connection,'modstoreinfo');

    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //

    $tableExists = 'SELECT 1 FROM modstoreinfo LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE modstoreinfo (
        serial int PRIMARY KEY,
        name varchar(100),
        designation varchar(100),
        numOfPapers int
        )';
        mysqli_query($connection,$createTable);
    }
    
    //
    // INSERT DATA INTO DATABASE
    //
    
    $serial = $_POST['slMod'];
    $name = $_POST['nameMod'];
    $designation = $_POST['desMod'];
    $numberOfPapers = $_POST['numOfPprMod'];
    $values = "('$serial','$name','$designation','$numberOfPapers')";
    $query = "INSERT INTO modstoreinfo VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';

?>