<?php

    include '../connection/db_connect.php';
    mysqli_select_db($connection,'data_entry_store_info');

    //
    // CREATE A NEW TABLE IF IT ALREADY DOESN'T EXIST
    //

    $tableExists = 'SELECT 1 FROM data_entry_store_info LIMIT 1';
    $tableExists = (mysqli_query($connection,$tableExists))?1:0;
    if($tableExists === 0)
    {
        $createTable = 'CREATE TABLE data_entry_store_info (
        name varchar(100),
        numOfTheoSubs int,
        numOfSessSubs int,
        numOfStds int
        )';
        mysqli_query($connection,$createTable);
    }
    
    //
    // INSERT DATA INTO DATABASE
    //
    
    $name = $_POST['nameDataEntry'];
    $theoritical_subjects = $_POST['numOfThSubDataEntry'];
    $sessional_subjects = $_POST['numOfSessSubDataEntry'];
    $no_of_students = $_POST['numOfStdDataEntry'];
    $values = "('$name','$theoritical_subjects','$sessional_subjects','$no_of_students')";
    $query = "INSERT INTO data_entry_store_info VALUES $values";
    mysqli_query($connection,$query);
    echo 'Submitted!';

?>