<?php
    unset($returnedResult);
    mysqli_select_db($connection,'data_entry_store_info');
    $query = "SELECT name,numOfTheoSubs,numOfSessSubs,numOfStds FROM data_entry_store_info";
    if($result = mysqli_query($connection,$query))
    {
        $cnt = 0;
        while($resultsRow = mysqli_fetch_assoc($result))
        {
            $returnedResult[] = array(
                'name' => $resultsRow['name'],
                'numOfTheoSubs' => $resultsRow['numOfTheoSubs'],
                'numOfSessSubs' => $resultsRow['numOfSessSubs'],
                'numOfStds' => $resultsRow['numOfStds']
            );
            $cnt = $cnt +1;
        }

        if($cnt>0){
            
            $result_exists = true;
            
            echo '<div class="panel panel-primary">';
            echo '<div class="panel-heading result-heading">';
            echo '<h3>Data Entry Information</h3>';
            echo '</div>';
            echo '<div class="panel-body">';
            echo '<div class="result-table table-responsive">';
            echo '<table id="data-entry" class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>TEACHER NAME</th>';
            echo '<th>NO. OF THEORITICAL SUBJECTS</th>';
            echo '<th>NO. OF SESSIONAL SUBJECTS</th>';
            echo '<th>NUMBER OF STUDENTS</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for($i=0;$i<$cnt;$i++)
            {
                echo '<tr>';
                echo '<td>'.$returnedResult[$i]['name'].'</td>';
                echo '<td>'.$returnedResult[$i]['numOfTheoSubs'].'</td>';
                echo '<td>'.$returnedResult[$i]['numOfSessSubs'].'</td>';
                echo '<td>'.$returnedResult[$i]['numOfStds'].'</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
            mysqli_free_result($result);


            // BUTTON SECTION
            echo '<div class="panel-footer">';
            echo '<div class="download-button"><button class="btn btn-danger" onclick="excel_download(1)">Excel Sheet</button><div class="clearfix"></div></div>';
            echo '</div>';
            echo '</div>';
        }
    }            
?>