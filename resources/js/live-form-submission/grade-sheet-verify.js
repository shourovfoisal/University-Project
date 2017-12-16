//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.grade-sheet-verify-input').on('click','#grade-sheet-verify-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<grade_sheet_verify_cnt;$i++){
            var $serial = $('#slGradeSheetVerify'+$i).val();
            var $name = $('#nameGradeSheetVerify'+$i).val();
            var $no_of_students = $('#stdsGradeSheetVerify'+$i).val();
            if($serial==''||$name==''||$no_of_students==''){
                alert($i+'| serial: '+$serial+' | name: '+$name+' | students: '+$no_of_students);
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#grade-sheet-verify-error-message').html('All fields are required');
        }
        else{
            $('#grade-sheet-verify-error-message').html('');

            for($i=0;$i<grade_sheet_verify_cnt;$i++){
                var $serial = $('#slGradeSheetVerify'+$i).val();
                var $name = $('#nameGradeSheetVerify'+$i).val();
                var $no_of_students = $('#stdsGradeSheetVerify'+$i).val();
                $.ajax({
                    url:"db_send_files/grade-sheet-verify-send.php",
                    method:"POST",
                    data:{slGradeSheetVerify:$serial, nameGradeSheetVerify:$name, stdsGradeSheetVerify:$no_of_students},
                    success:function(data){
                        $('.grade-sheet-verify-input').find('textarea').val('');
                        $('#grade-sheet-verify-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#grade-sheet-verify-success-message').fadeOut('slow');
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