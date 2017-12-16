<?php
mysqli_select_db($connection,'teststoreinfo');
$query = "SELECT courseno,name,testcnt,stdcnt FROM teststoreinfo";
if($result = mysqli_query($connection,$query))
{
    $cnt = 0;
    while($resultsRow = mysqli_fetch_assoc($result))
    {
        $returnedResult[] = array(
            'courseno' => $resultsRow['courseno'],
            'name' => $resultsRow['name'],
            'testcnt' => $resultsRow['testcnt'],
            'stdcnt' => $resultsRow['stdcnt'],
        );
        $cnt = $cnt +1;
    }

    if($cnt>0){

        $result_exists = true;

        echo '<div class="panel panel-primary">';
        echo '<div class="panel-heading result-heading">';
        echo '<h3>Class Test Information</h3>';
        echo '</div>';
        echo '<div class="panel-body">';
        echo '<div class="result-table table-responsive">';
        echo '<table id="class-test" class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>COURSE NUMBER</th>';
        echo '<th>TEACHER NAME</th>';
        echo '<th>NUMBER OF TESTS</th>';
        echo '<th>NUMBER OF STUDENTS</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        for($i=0;$i<$cnt;$i++)
        {
            echo '<tr>';
            echo '<td>'.$returnedResult[$i]['courseno'].'</td>';
            echo '<td>'.$returnedResult[$i]['name'].'</td>';
            echo '<td>'.$returnedResult[$i]['testcnt'].'</td>';
            echo '<td>'.$returnedResult[$i]['stdcnt'].'</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
        mysqli_free_result($result);


        // BUTTON SECTION
        echo '<div class="panel-footer">';
        echo '<div class="download-button"><button class="btn btn-danger" onclick="excel_download(0)">Excel Sheet</button><div class="clearfix"></div></div>';
        echo '</div>';
        echo '</div>';
    }
}            
?>