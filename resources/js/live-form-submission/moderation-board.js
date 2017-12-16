//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------



$(document).ready(function(){

    $('.mod-input').on('click','#mod-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<modcnt;$i++){
            var $serial = $('#slMod'+$i).val();
            var $name = $('#nameMod'+$i).val();
            var $designation = $('#desMod'+$i).val();
            var $papers = $('#numOfPprMod'+$i).val();
            if($serial==''||$name==''||$designation==''||$papers==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#mod-error-message').html('All fields are required');
        }
        else{

            $('#mod-error-message').html('');

            for($i=0;$i<modcnt;$i++){
                var $serial = $('#slMod'+$i).val();
                var $name = $('#nameMod'+$i).val();
                var $designation = $('#desMod'+$i).val();
                var $papers = $('#numOfPprMod'+$i).val();
                $.ajax({
                    url:"db_send_files/moderation-board-send.php",
                    method:"POST",
                    data:{slMod:$serial, nameMod:$name, desMod:$designation, numOfPprMod:$papers},
                    success:function(data){
                        $('.mod-input').find('textarea').val('');
                        $('#mod-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#mod-success-message').fadeOut('slow');
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