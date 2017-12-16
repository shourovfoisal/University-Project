//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.seminer-8th-input').on('click','#seminer-8th-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<seminer_8th_cnt;$i++){
            var $courseno = $('#crsSeminer8th'+$i).val();
            var $name = $('#nameSeminer8th'+$i).val();
            var $no_of_student = $('#numOfStdSeminer8th'+$i).val();
            if($courseno==''||$name==''||$no_of_student==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#seminer-8th-error-message').html('All fields are required');
        }
        else{
            $('#seminer-8th-error-message').html('');

            for($i=0;$i<seminer_8th_cnt;$i++){
                var $courseno = $('#crsSeminer8th'+$i).val();
                var $name = $('#nameSeminer8th'+$i).val();
                var $no_of_student = $('#numOfStdSeminer8th'+$i).val();
                $.ajax({
                    url:"db_send_files/seminer-8th-send.php",
                    method:"POST",
                    data:{crsSeminer8th:$courseno, nameSeminer8th:$name, numOfStdSeminer8th:$no_of_student},
                    success:function(data){
                        $('.seminer-8th-input').find('textarea').val('');
                        $('#seminer-8th-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#seminer-8th-success-message').fadeOut('slow');
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