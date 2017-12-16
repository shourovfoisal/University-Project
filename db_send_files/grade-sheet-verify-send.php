<?php
    include '../connection/db_connect.php';
    mysqli_select_db($connection,'grade_sheet_verify_store_info');


    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //


    $tableExists = 'SELECT 1 FROM grade_sheet_verify_store_info LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE grade_sheet_verify_store_info (
        serial int PRIMARY KEY,
        name varchar(100),
        stdcnt int
        )';
        mysqli_query($connection,$createTable);
    }


    //
    // INSERT DATA INTO DATABASE
    //


    $serial = $_POST['slGradeSheetVerify'];
    $name = $_POST['nameGradeSheetVerify'];
    $stdcnt = $_POST['stdsGradeSheetVerify'];
    //echo $serial.' '.$name.' '.$designation.' '.$numberOfPapers.'<br>';
    $values = "('$serial','$name','$stdcnt')";
    $query = "INSERT INTO grade_sheet_verify_store_info VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';
?>