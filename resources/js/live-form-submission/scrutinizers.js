//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------



$(document).ready(function(){

    $('.scrut-input').on('click','#scrut-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<scrutcnt;$i++){
            var $serial = $('#slScrut'+$i).val();
            var $name = $('#nameScrut'+$i).val();
            var $papers = $('#numOfPprScrut'+$i).val();
            if($serial==''||$name==''||$papers==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#scrut-error-message').html('All fields are required');
        }
        else{

            $('#scrut-error-message').html('');

            for($i=0;$i<scrutcnt;$i++){
                var $serial = $('#slScrut'+$i).val();
                var $name = $('#nameScrut'+$i).val();
                var $papers = $('#numOfPprScrut'+$i).val();
                $.ajax({
                    url:"db_send_files/scrutinizer-send.php",
                    method:"POST",
                    data:{slScrut:$serial, nameScrut:$name, numOfPprScrut:$papers},
                    success:function(data){
                        $('.scrut-input').find('textarea').val('');
                        $('#scrut-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#scrut-success-message').fadeOut('slow');
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