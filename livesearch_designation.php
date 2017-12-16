<?php
$db = new PDO('mysql:host=localhost;dbname=designations','root','');

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = $db -> prepare("SELECT * FROM designation_titles WHERE title LIKE ?");
    $query -> execute(["%$search%"]);
    $count = $query -> rowCount();
    if($count == 0) {
        echo "";
    }
    else {
        echo "<ul class='live-search-results'>";
        while($r = $query->fetch(PDO::FETCH_OBJ)) {
            $title = $r -> title;
            echo "<li><button type='button' class='btn btn-info live-designation'><p>$title</p></button></li>";
        }
        echo "</ul>";
    }
}
    
?>