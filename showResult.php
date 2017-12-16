<!DOCTYPE html>


<html lang="en">
    <head>
        <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/style.css">
        <script src="vendors/js/jquery.min.js"></script>
        <script src="vendors/js/bootstrap.min.js"></script>
    </head>
    <body style="margin:0">
        <div id="result-section" class="container">
            
            <!-- PDF DOWNLOAD BUTTON -->
            
            <div class="pdf-download">
                <button type="button" class="btn btn-warning text-right">DOWNLOAD PDF</button>
                <div class="clearfix"></div>
            </div>
            
            <div class="panel-group">
               
                <?php

                $result_exists = false;

                include 'connection/db_connect.php';

                // LOADING THE RESULT MODULES

                include 'db_receive_files/class-test-receive.php';
                include 'db_receive_files/data-entry-receive.php';
                include 'db_receive_files/grade-sheet-verify-receive.php';
                include 'db_receive_files/moderation-board-receive.php';
                include 'db_receive_files/paper-script-receive.php';
                include 'db_receive_files/project-thesis-8th-receive.php';
                include 'db_receive_files/scrutinizer-receive.php';
                include 'db_receive_files/seminer-8th-receive.php';
                include 'db_receive_files/sessional-class-receive.php';
                include 'db_receive_files/type-print-draw-receive.php';
                include 'db_receive_files/viva-board-receive.php';
                
                ?>
                </div>
                <div class="footer result-footer"></div>
                <?php
                
                if($result_exists == true)
                {
                ?>

                <script>
                    $('.pdf-download').css('display','block');
                    $('.result-footer').css('display','block');
                </script>

                <?php
                }
                // IF THERE ARE NO RESULTS, THEN THIS PART IS SHOWN
                else {
                    echo "<div class='no-result-back'><h1 align='center'>Please refresh!</h1><div class='no-result'><h1 align='center'>No Results!</h1></div></div>
                    <div class='thank-you-back'>'<div class='thank-you'><h1>Thank you!<h1></div></div>";
                }
                ?>
        </div>
        
        
        <script>
            
            //
            // EXCEL DOWNLOAD
            //
            
            function excel_download(table) {
                
                var table_id;
                switch(table)
                {
                    case 0: table_id = 'class-test';
                    break;
                    
                    case 1: table_id = 'data-entry';
                    break;
                        
                    case 2: table_id = 'grade-sheet-verify';
                    break;
                    
                    case 3: table_id = 'moderation-board';
                    break;
                        
                    case 4: table_id = 'paper-script';
                    break;
                        
                    case 5: table_id = 'project-thesis-8th';
                    break;
                        
                    case 6: table_id = 'scrutinizers';
                    break;
                        
                    case 7: table_id = 'seminer-8th';
                    break;
                        
                    case 8: table_id = 'sessional-class';
                    break;
                        
                    case 9: table_id = 'type-print-draw';
                    break;
                        
                    case 10: table_id = 'viva-board';
                }
                
                //getting data from our table
                var data_type = 'data:application/vnd.ms-excel';
                var table_div = document.getElementById(table_id);
                var table_html = table_div.outerHTML.replace(/ /g, '%20');

                var a = document.createElement('a');
                a.href = data_type + ', ' + table_html;
                a.download = table_id + ' ' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
                a.click();
            }
            
            // PDF DOWNLOAD
            
            $('.pdf-download button').on('click',function(){
                window.open('createpdf.php');
            });
            
            
        </script>
    </body>
</html>


