<?php
   unset($returnedResult);
    mysqli_select_db($connection,'vivastoreinfo');
    $query = "SELECT serial,name,stdcnt FROM vivastoreinfo";
    if($result = mysqli_query($connection,$query))
    {
        $cnt = 0;
        while($resultsRow = mysqli_fetch_assoc($result))
        {
            $returnedResult[] = array(
                'serial' => $resultsRow['serial'],
                'name' => $resultsRow['name'],
                'stdcnt' => $resultsRow['stdcnt'],
            );
            $cnt = $cnt +1;
        }

        if($cnt>0){
            
            $result_exists = true;
            
            $tag = '<div class="panel panel-primary">';
            fwrite($myfile,$tag);
            $tag = '<div class="panel-heading result-heading">';
            fwrite($myfile,$tag);
            $tag = '<h3>Viva Information</h3>';
            fwrite($myfile,$tag);
            $tag = '</div>';
            fwrite($myfile,$tag);
            $tag = '<div class="panel-body">';
            fwrite($myfile,$tag);
            $tag = '<div class="result-table table-responsive">';
            fwrite($myfile,$tag);
            $tag = '<table id="viva-board" class="table">';
            fwrite($myfile,$tag);
            $tag = '<thead>';
            fwrite($myfile,$tag);
            $tag = '<tr>';
            fwrite($myfile,$tag);
            $tag = '<th>SERIAL</th>';
            fwrite($myfile,$tag);
            $tag = '<th>TEACHER NAME</th>';
            fwrite($myfile,$tag);
            $tag = '<th>NUMBER OF STUDENT</th>';
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
                $tag = '<td>'.$returnedResult[$i]['serial'].'</td>';
                fwrite($myfile,$tag);
                $tag = '<td>'.$returnedResult[$i]['name'].'</td>';
                fwrite($myfile,$tag);
                $tag = '<td>'.$returnedResult[$i]['stdcnt'].'</td>';
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