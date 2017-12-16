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
            
            $tag = '<div class="panel panel-primary">';
            fwrite($myfile,$tag);
            $tag = '<div class="panel-heading result-heading">';
            fwrite($myfile,$tag);
            $tag = '<h3>Data Entry Information</h3>';
            fwrite($myfile,$tag);
            $tag = '</div>';
            fwrite($myfile,$tag);
            $tag = '<div class="panel-body">';
            fwrite($myfile,$tag);
            $tag = '<div class="result-table table-responsive">';
            fwrite($myfile,$tag);
            $tag = '<table id="data-entry" class="table">';
            fwrite($myfile,$tag);
            $tag = '<thead>';
            fwrite($myfile,$tag);
            $tag = '<tr>';
            fwrite($myfile,$tag);
            $tag = '<th>TEACHER NAME</th>';
            fwrite($myfile,$tag);
            $tag = '<th>NO. OF THEORITICAL SUBJECTS</th>';
            fwrite($myfile,$tag);
            $tag = '<th>NO. OF SESSIONAL SUBJECTS</th>';
            fwrite($myfile,$tag);
            $tag = '<th>NUMBER OF STUDENTS</th>';
            fwrite($myfile,$tag);
            $tag = '</tr>';
            fwrite($myfile,$tag);
            $tag = '</thead>';
            fwrite($myfile,$tag);
            $tag = '<tbody>';
            fwrite($myfile,$tag);
            for($i=0;$i<$cnt;$i++)
            {
                $tag = '<tr>';
                fwrite($myfile,$tag);
                $tag = '<td>'.$returnedResult[$i]['name'].'</td>';
                fwrite($myfile,$tag);
                $tag = '<td>'.$returnedResult[$i]['numOfTheoSubs'].'</td>';
                fwrite($myfile,$tag);
                $tag = '<td>'.$returnedResult[$i]['numOfSessSubs'].'</td>';
                fwrite($myfile,$tag);
                $tag = '<td>'.$returnedResult[$i]['numOfStds'].'</td>';
                fwrite($myfile,$tag);
                $tag = '</tr>';
                fwrite($myfile,$tag);
            }
            $tag = '</tbody>';
            fwrite($myfile,$tag);
            $tag = '</table>';
            fwrite($myfile,$tag);
            $tag = '</div>';
            fwrite($myfile,$tag);
            $tag = '</div>';
            fwrite($myfile,$tag);
            $tag = '</div>';
            fwrite($myfile,$tag);
            mysqli_free_result($result);
        }
    }            
?>