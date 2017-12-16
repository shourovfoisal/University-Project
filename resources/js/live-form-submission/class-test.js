//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.test-input').on('click','#test-submit',function(){

        // CHECKING IF THERE ARE ANY EMPTY INPUT FIELDS WHILE SUBMITTING

        var $i;
        var $isnull = false;

        for($i=0;$i<testcnt;$i++){
            var $course_no = $('#crsTest'+$i).val();
            var $name = $('#nameTest'+$i).val();
            var $no_of_test = $('#noOfTest'+$i).val();
            var $no_of_student = $('#numOfStdTest'+$i).val();
            if($course_no==''||$name==''||$no_of_test==''||$no_of_student==''){
                $isnull = true;
                break;
            }
        }

        // IF THERE ARE NO NULL FIELDS, THEN SEND THE INFORMATION TO THE class-test-send.php FILE

        if($isnull){
            $('#test-error-message').html('All fields are required'); //(1)
        }
        else{

            $('#test-error-message').html('');

            for($i=0;$i<testcnt;$i++){
                var $course_no = $('#crsTest'+$i).val();
                var $name = $('#nameTest'+$i).val();
                var $no_of_test = $('#noOfTest'+$i).val();
                var $no_of_student = $('#numOfStdTest'+$i).val();
                $.ajax({
                    url:"db_send_files/class-test-send.php",
                    method:"POST",
                    data:{crsTest:$course_no, nameTest:$name, noOfTest:$no_of_test, numOfStdTest:$no_of_student},
                    success:function(data){
                        $('.test-input').find('textarea').val(''); //(2)

                        //(3)
                        $('#test-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#test-success-message').fadeOut('slow');
                        },2000);
                    }
                });
            }
        }
        // (1) DISPLAYS THE 'All fields are required' MESSAGE
        // (2) EMPTIFY ALL THE FIELDS AFTER SUBMISSION
        // (3) DISPLAYS 'Submitted!' MESSAGE FOR A SHORT PERIOD OF TIME
    });
});

//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (END)
//---------------------------------------------