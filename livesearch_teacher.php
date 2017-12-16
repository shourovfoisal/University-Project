<?php
$db = new PDO('mysql:host=localhost;dbname=teachers','root','');

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = $db -> prepare("SELECT * FROM teacher_details WHERE name LIKE ?");
    $query -> execute(["%$search%"]);
    $count = $query -> rowCount();
    if($count == 0) {
        echo "";
    }
    else {
        echo "<ul class='live-search-results'>";
        while($r = $query->fetch(PDO::FETCH_OBJ)) {
            $name = $r -> name;
            $status = $r -> status;
            $no_of_papers = $r -> no_of_papers;
            echo "<li><button type='button' class='btn btn-info live-teacher-name'><p>$name</p></button></li>
            <li class='live-teacher-status invisible'>$status</p></li>
            <li class='live-teacher-papers invisible'><p>$no_of_papers</p></li>
            ";
        }
        echo "</ul>";
    }
}
    
?>