<?php
    unset($returnedResult);
    mysqli_select_db($connection,'grade_sheet_verify_store_info');
    $query = "SELECT serial,name,stdcnt FROM grade_sheet_verify_store_info";
    if($result = mysqli_query($connection,$query))
    {
        $cnt = 0;
        while($resultsRow = mysqli_fetch_assoc($result))
        {
            $returnedResult[] = array(
                'serial' => $resultsRow['serial'],
                'name' => $resultsRow['name'],
                'stdcnt' => $resultsRow['stdcnt']
            );
            $cnt = $cnt +1;
        }

        if($cnt>0){
            
            $result_exists = true;
            
            echo '<div class="panel panel-primary">';
            echo '<div class="panel-heading result-heading">';
            echo '<h3>Grade Sheet Verify Information</h3>';
            echo '</div>';
            echo '<div class="panel-body">';
            echo '<div class="result-table table-responsive">';
            echo '<table id="grade-sheet-verify" class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>SERIAL</th>';
            echo '<th>TEACHER NAME</th>';
            echo '<th>NUMBER OF STUDENTS</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for($i=0;$i<$cnt;$i++)
            {
                echo '<tr>';
                echo '<td>'.$returnedResult[$i]['serial'].'</td>';
                echo '<td>'.$returnedResult[$i]['name'].'</td>';
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
            echo '<div class="download-button"><button class="btn btn-danger" onclick="excel_download(2)">Excel Sheet</button><div class="clearfix"></div></div>';
            echo '</div>';
            echo '</div>';
        }
    }            
?>