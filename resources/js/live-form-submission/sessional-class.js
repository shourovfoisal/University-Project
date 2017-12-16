//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.class-input').on('click','#class-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<classcnt;$i++){
            var $courseno = $('#crsClass'+$i).val();
            var $name = $('#nameClass'+$i).val();
            var $credit = $('#credClass'+$i).val();
            var $no_of_student = $('#numOfStdClass'+$i).val();
            if($courseno==''||$name==''||$credit==''||$no_of_student==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#class-error-message').html('All fields are required');
        }
        else{
            $('#class-error-message').html('');

            for($i=0;$i<classcnt;$i++){
                var $courseno = $('#crsClass'+$i).val();
                var $name = $('#nameClass'+$i).val();
                var $credit = $('#credClass'+$i).val();
                var $no_of_student = $('#numOfStdClass'+$i).val();
                $.ajax({
                    url:"db_send_files/sessional-class-send.php",
                    method:"POST",
                    data:{crsClass:$courseno, nameClass:$name, credClass:$credit, numOfStdClass:$no_of_student},
                    success:function(data){
                        $('.class-input').find('textarea').val('');
                        $('#class-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#class-success-message').fadeOut('slow');
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