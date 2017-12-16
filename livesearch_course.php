<?php
$db = new PDO('mysql:host=localhost;dbname=courses','root','');

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = $db -> prepare("SELECT * FROM course_details WHERE course_no LIKE ?");
    $query -> execute(["%$search%"]);
    $count = $query -> rowCount();
    if($count == 0) {
        echo "";
    }
    else {
        echo "<ul class='live-search-results'>";
        while($r = $query->fetch(PDO::FETCH_OBJ)) {
            $course_no = $r -> course_no;
            echo "<li><button type='button' class='btn btn-info live-course-no'><p>$course_no</p></button></li>";
        }
        echo "</ul>";
    }
}
    
?>