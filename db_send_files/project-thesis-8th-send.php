<?php
    include '../connection/db_connect.php';
    mysqli_select_db($connection,'project_thesis_8th_store_info');


    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //


    $tableExists = 'SELECT 1 FROM project_thesis_8th_store_info LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE project_thesis_8th_store_info (
        courseno varchar(100),
        name varchar(100),
        stdcntint int,
        stdcntext int
        )';
        mysqli_query($connection,$createTable);
    }


    //
    // INSERT DATA INTO DATABASE
    //


    $course = $_POST['crsProjectThesis8th'];
    $name = $_POST['nameProjectThesis8th'];
    $numberOfStudentInternal = $_POST['numOfStdIntProjectThesis8th'];
    $numberOfStudentExternal = $_POST['numOfStdExtProjectThesis8th'];
    //echo $serial.' '.$name.' '.$designation.' '.$numberOfPapers.'<br>';
    $values = "('$course','$name','$numberOfStudentInternal','$numberOfStudentExternal')";
    $query = "INSERT INTO project_thesis_8th_store_info VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';

?>