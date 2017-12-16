//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.viva-input').on('click','#viva-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<vivacnt;$i++){
            var $serial = $('#slViva'+$i).val();
            var $name = $('#nameViva'+$i).val();
            var $no_of_students = $('#stdsViva'+$i).val();
            if($serial==''||$name==''||$no_of_students==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#viva-error-message').html('All fields are required');
        }
        else{
            $('#viva-error-message').html('');

            for($i=0;$i<vivacnt;$i++){
                var $serial = $('#slViva'+$i).val();
                var $name = $('#nameViva'+$i).val();
                var $no_of_students = $('#stdsViva'+$i).val();
                $.ajax({
                    url:"db_send_files/viva-board-send.php",
                    method:"POST",
                    data:{slViva:$serial, nameViva:$name, stdsViva:$no_of_students},
                    success:function(data){
                        $('.viva-input').find('textarea').val('');
                        $('#viva-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#viva-success-message').fadeOut('slow');
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