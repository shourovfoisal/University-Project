<?php
    unset($returnedResult);
c    mysqli_select_db($connection,'teststoreinfo');
c    $query = "SELECT courseno,name,testcnt,stdcnt FROM teststoreinfo";
    if($result = mysqli_query($connection,$query))
    {
        $cnt = 0;
        while($resultsRow = mysqli_fetch_assoc($result))
        {
            $returnedResult[] = array(
c                'courseno' => $resultsRow['courseno'],
c                'name' => $resultsRow['name'],
c                'testcnt' => $resultsRow['testcnt'],
c                'stdcnt' => $resultsRow['stdcnt'],
            );
            $cnt = $cnt +1;
        }

        if($cnt>0){
            
            $result_exists = true;
            
c            echo '<h3>Class Test Information</h3>';
            echo '<div class="result-table table-responsive">';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
c            echo '<th>COURSE NUMBER</th>';
c            echo '<th>TEACHER NAME</th>';
c            echo '<th>NUMBER OF TESTS</th>';
c            echo '<th>NUMBER OF STUDENTS</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for($i=0;$i<$cnt;$i++)
            {
                echo '<tr>';
c                echo '<td>'.$returnedResult[$i]['courseno'].'</td>';
c                echo '<td>'.$returnedResult[$i]['name'].'</td>';
c                echo '<td>'.$returnedResult[$i]['testcnt'].'</td>';
c                echo '<td>'.$returnedResult[$i]['stdcnt'].'</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            mysqli_free_result($result);


            // BUTTON SECTION
c            echo '<div class="download-button"><button class="btn btn-danger" onclick="excel_download(0)">Excel Sheet</button></div>';
        }
    }            
?>