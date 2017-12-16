//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------



$(document).ready(function(){

    $('.typrdr-input').on('click','#typrdr-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<typrdrcnt;$i++){
            var $name = $('#nameTyPrDr'+$i).val();
            var $papers = $('#numOfPprTyPrDr'+$i).val();
            if($name==''||$papers==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#typrdr-error-message').html('All fields are required');
        }
        else{

            $('#typrdr-error-message').html('');

            for($i=0;$i<typrdrcnt;$i++){
                var $name = $('#nameTyPrDr'+$i).val();
                var $papers = $('#numOfPprTyPrDr'+$i).val();
                $.ajax({
                    url:"db_send_files/type-print-draw-send.php",
                    method:"POST",
                    data:{nameTyPrDr:$name, numOfPprTyPrDr:$papers},
                    success:function(data){
                        $('.typrdr-input').find('textarea').val('');
                        $('#typrdr-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#typrdr-success-message').fadeOut('slow');
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