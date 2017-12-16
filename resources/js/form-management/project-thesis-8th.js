//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------



var project_thesis_8th_cnt = 0;
function addProjectThesis8thField()
{
    if(project_thesis_8th_cnt==0)
        $('#project-thesis-8th-submit').css('visibility','visible');


    var courseno = $("<textarea class='form-fields course-field' id='crsProjectThesis8th"+project_thesis_8th_cnt+"'></textarea>");
    var livecourseno = $("<div class='live-search-list' id='liveCrsProjectThesis8th"+project_thesis_8th_cnt+"'></textarea>");
    $('#project-thesis-8th-field-1').append(courseno,livecourseno);


    var name = $("<textarea class='form-fields name-field' id='nameProjectThesis8th"+project_thesis_8th_cnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameProjectThesis8th"+project_thesis_8th_cnt+"'></textarea>");
    $('#project-thesis-8th-field-2').append(name,livename);


    var stud_cnt_internal = $("<textarea class='form-fields' id='numOfStdIntProjectThesis8th"+project_thesis_8th_cnt+"'></textarea>");
    $('#project-thesis-8th-field-3').append(stud_cnt_internal);


    var stud_cnt_external = $("<textarea class='form-fields' id='numOfStdExtProjectThesis8th"+project_thesis_8th_cnt+"'></textarea>")
    $('#project-thesis-8th-field-4').append(stud_cnt_external);

    project_thesis_8th_cnt++;
}

function removeProjectThesis8thField()
{
    if(project_thesis_8th_cnt > 1)
    {

        project_thesis_8th_cnt--;
        var $select = $('#crsProjectThesis8th'+project_thesis_8th_cnt);
        $($select).remove();
        var $select = $('#liveCrsProjectThesis8th'+project_thesis_8th_cnt);
        $($select).remove();
        var $select = $('#nameProjectThesis8th'+project_thesis_8th_cnt);
        $($select).remove();
        var $select = $('#liveNameProjectThesis8th'+project_thesis_8th_cnt);
        $($select).remove();
        var $select = $('#numOfStdIntProjectThesis8th'+project_thesis_8th_cnt);
        $($select).remove();
        var $select = $('#numOfStdExtProjectThesis8th'+project_thesis_8th_cnt);
        $($select).remove();
    }
}

//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------