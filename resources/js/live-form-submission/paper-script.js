//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.paper-script-input').on('click','#paper-script-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<paper_script_cnt;$i++){
            var $courseno = $('#crsPaperScript'+$i).val();
            var $name = $('#namePaperScript'+$i).val();
            var $no_of_student = $('#numOfStdPaperScript'+$i).val();
            if($courseno==''||$name==''||$no_of_student==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#paper-script-error-message').html('All fields are required');
        }
        else{
            $('#paper-script-error-message').html('');

            for($i=0;$i<paper_script_cnt;$i++){
                var $courseno = $('#crsPaperScript'+$i).val();
                var $name = $('#namePaperScript'+$i).val();
                var $no_of_student = $('#numOfStdPaperScript'+$i).val();
                $.ajax({
                    url:"db_send_files/paper-script-send.php",
                    method:"POST",
                    data:{crsPaperScript:$courseno, namePaperScript:$name, numOfStdPaperScript:$no_of_student},
                    success:function(data){
                        $('.paper-script-input').find('textarea').val('');
                        $('#paper-script-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#paper-script-success-message').fadeOut('slow');
                        },2000);
                    }
                });
            }
        }
    });
});


//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (END)
//---------------------------------------------