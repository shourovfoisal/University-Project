<?php
    include '../connection/db_connect.php';
    mysqli_select_db($connection,'teststoreinfo');


    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //


    $tableExists = 'SELECT 1 FROM teststoreinfo LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE teststoreinfo (
        courseno varchar(100),
        name varchar(100),
        testcnt int,
        stdcnt int
        )';
        mysqli_query($connection,$createTable);
    }


    //
    // INSERT DATA INTO DATABASE
    //


    $course = $_POST['crsTest'];
    $name = $_POST['nameTest'];
    $testcnt = $_POST['noOfTest'];
    $numberOfStudent = $_POST['numOfStdTest'];
    //echo $serial.' '.$name.' '.$designation.' '.$numberOfPapers.'<br>';
    $values = "('$course','$name','$testcnt','$numberOfStudent')";
    $query = "INSERT INTO teststoreinfo VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';

?>