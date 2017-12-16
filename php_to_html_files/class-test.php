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

        $tag = '<div class="panel panel-primary">';
        fwrite($myfile,$tag);
        $tag = '<div class="panel-heading result-heading">';
        fwrite($myfile,$tag);
        $tag = '<h3>Class Test Information</h3>';
        fwrite($myfile,$tag);
        $tag = '</div>';
        fwrite($myfile,$tag);
        $tag = '<div class="panel-body">';
        fwrite($myfile,$tag);
        $tag = '<div class="result-table table-responsive">';
        fwrite($myfile,$tag);
        $tag = '<table id="class-test" class="table">';
        fwrite($myfile,$tag);
        $tag = '<thead>';
        fwrite($myfile,$tag);
        $tag = '<tr>';
        fwrite($myfile,$tag);
        $tag = '<th>COURSE NUMBER</th>';
        fwrite($myfile,$tag);
        $tag = '<th>TEACHER NAME</th>';
        fwrite($myfile,$tag);
        $tag = '<th>NUMBER OF TESTS</th>';
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
            $tag = '<td>'.$returnedResult[$i]['courseno'].'</td>';
            fwrite($myfile,$tag);
            $tag = '<td>'.$returnedResult[$i]['name'].'</td>';
            fwrite($myfile,$tag);
            $tag = '<td>'.$returnedResult[$i]['testcnt'].'</td>';
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