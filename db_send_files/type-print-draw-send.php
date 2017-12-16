<?php

    include '../connection/db_connect.php';
    mysqli_select_db($connection,'typrdrstoreinfo');

    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //

    $tableExists = 'SELECT 1 FROM typrdrstoreinfo LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE typrdrstoreinfo (
        name varchar(100),
        numOfPapers int
        )';
        mysqli_query($connection,$createTable);
    }
    
    //
    // INSERT DATA INTO DATABASE
    //
    
    $name = $_POST['nameTyPrDr'];
    $numberOfPapers = $_POST['numOfPprTyPrDr'];
    $values = "('$name','$numberOfPapers')";
    $query = "INSERT INTO typrdrstoreinfo VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';

?>