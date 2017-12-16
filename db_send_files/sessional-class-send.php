<?php
    include '../connection/db_connect.php';
    mysqli_select_db($connection,'classstoreinfo');
    
    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //

    $tableExists = 'SELECT 1 FROM classstoreinfo LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE classstoreinfo (
        courseno varchar(100),
        name varchar(100),
        credit decimal(4,2),
        stdcnt int
        )';
        mysqli_query($connection,$createTable);
    }


    //
    // INSERT DATA INTO DATABASE
    //

    $course = $_POST['crsClass'];
    $name = $_POST['nameClass'];
    $credit = $_POST['credClass'];
    $numberOfStudent = $_POST['numOfStdClass'];
    $values = "('$course','$name','$credit','$numberOfStudent')";
    $query = "INSERT INTO classstoreinfo VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';
?>