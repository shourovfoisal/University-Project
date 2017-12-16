//---------------------------------------------
// FUNCTIONS FOR LIVE FORM SUBMISSION (START)
//---------------------------------------------


$(document).ready(function(){

    $('.project-thesis-8th-input').on('click','#project-thesis-8th-submit',function(){

        var $i;
        var $isnull = false;

        for($i=0;$i<project_thesis_8th_cnt;$i++){
            var $course_no = $('#crsProjectThesis8th'+$i).val();
            var $name = $('#nameProjectThesis8th'+$i).val();
            var $no_of_student_internal = $('#numOfStdIntProjectThesis8th'+$i).val();
            var $no_of_student_external = $('#numOfStdExtProjectThesis8th'+$i).val();
            if($course_no==''||$name==''||$no_of_student_internal==''||$no_of_student_external==''){
                $isnull = true;
                break;
            }
        }

        if($isnull){
            $('#project-thesis-8th-error-message').html('All fields are required');
        }
        else{

            $('#project-thesis-8th-error-message').html('');

            for($i=0;$i<project_thesis_8th_cnt;$i++){
                var $course_no = $('#crsProjectThesis8th'+$i).val();
                var $name = $('#nameProjectThesis8th'+$i).val();
                var $no_of_student_internal = $('#numOfStdIntProjectThesis8th'+$i).val();
                var $no_of_student_external = $('#numOfStdExtProjectThesis8th'+$i).val();
                $.ajax({
                    url:"db_send_files/project-thesis-8th-send.php",
                    method:"POST",
                    data:{crsProjectThesis8th:$course_no, nameProjectThesis8th:$name, numOfStdIntProjectThesis8th:$no_of_student_internal, numOfStdExtProjectThesis8th:$no_of_student_external},
                    success:function(data){
                        $('.project-thesis-8th-input').find('textarea').val('');
                        $('#project-thesis-8th-success-message').fadeIn().html(data);
                        setTimeout(function(){
                            $('#project-thesis-8th-success-message').fadeOut('slow');
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