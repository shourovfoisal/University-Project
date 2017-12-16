<?php
    include '../connection/db_connect.php';
    mysqli_select_db($connection,'paper_script_store_info');
    
    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //

    $tableExists = 'SELECT 1 FROM paper_script_store_info LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE paper_script_store_info (
        courseno varchar(100),
        name varchar(100),
        stdcnt int
        )';
        mysqli_query($connection,$createTable);
    }


    //
    // INSERT DATA INTO DATABASE
    //

    $course = $_POST['crsPaperScript'];
    $name = $_POST['namePaperScript'];
    $numberOfStudent = $_POST['numOfStdPaperScript'];
    $values = "('$course','$name','$numberOfStudent')";
    $query = "INSERT INTO paper_script_store_info VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';
?>