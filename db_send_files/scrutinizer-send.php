<?php

    include '../connection/db_connect.php';
    mysqli_select_db($connection,'scrutstoreinfo');

    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //

    $tableExists = 'SELECT 1 FROM scrutstoreinfo LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE scrutstoreinfo (
        serial int PRIMARY KEY,
        name varchar(100),
        numOfPapers int
        )';
        mysqli_query($connection,$createTable);
    }
    
    //
    // INSERT DATA INTO DATABASE
    //
    
    $serial = $_POST['slScrut'];
    $name = $_POST['nameScrut'];
    $numberOfPapers = $_POST['numOfPprScrut'];
    $values = "('$serial','$name','$numberOfPapers')";
    $query = "INSERT INTO scrutstoreinfo VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';

?>