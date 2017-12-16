//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------



$(document).ready(function(){

    $('.data-entry-input').on('click','#data-entry-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<data_entry_cnt;$i++){
            var $name = $('#nameDataEntry'+$i).val();
            var $theoritical_subjects = $('#numOfThSubDataEntry'+$i).val();
            var $sessional_subjects = $('#numOfSessSubDataEntry'+$i).val();
            var $no_of_students = $('#numOfStdDataEntry'+$i).val();
            if($name==''||$theoritical_subjects==''||$sessional_subjects==''||$no_of_students==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#data-entry-error-message').html('All fields are required');
        }
        else{

            $('#data-entry-error-message').html('');

            for($i=0;$i<data_entry_cnt;$i++){
                var $name = $('#nameDataEntry'+$i).val();
                var $theoritical_subjects = $('#numOfThSubDataEntry'+$i).val();
                var $sessional_subjects = $('#numOfSessSubDataEntry'+$i).val();
                var $no_of_students = $('#numOfStdDataEntry'+$i).val();
                $.ajax({
                    url:"db_send_files/data-entry-send.php",
                    method:"POST",
                    data:{nameDataEntry:$name, numOfThSubDataEntry:$theoritical_subjects, numOfSessSubDataEntry:$sessional_subjects, numOfStdDataEntry:$no_of_students},
                    success:function(data){
                        $('.data-entry-input').find('textarea').val('');
                        $('#data-entry-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#data-entry-success-message').fadeOut('slow');
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