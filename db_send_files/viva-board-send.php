<?php
    include '../connection/db_connect.php';
    mysqli_select_db($connection,'vivastoreinfo');


    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //


    $tableExists = 'SELECT 1 FROM vivastoreinfo LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE vivastoreinfo (
        serial int PRIMARY KEY,
        name varchar(100),
        stdcnt int
        )';
        mysqli_query($connection,$createTable);
    }


    //
    // INSERT DATA INTO DATABASE
    //


    $serial = $_POST['slViva'];
    $name = $_POST['nameViva'];
    $stdcnt = $_POST['stdsViva'];
    //echo $serial.' '.$name.' '.$designation.' '.$numberOfPapers.'<br>';
    $values = "('$serial','$name','$stdcnt')";
    $query = "INSERT INTO vivastoreinfo VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';
?>