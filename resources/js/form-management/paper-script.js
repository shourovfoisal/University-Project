//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------

var paper_script_cnt = 0;
function addPaperScriptField()
{
    if(paper_script_cnt==0)
        $('#paper-script-submit').css('visibility','visible');

    var courseno = $("<textarea class='form-fields course-field' id='crsPaperScript"+paper_script_cnt+"'></textarea>");
    var livecourseno = $("<div class='live-search-list' id='liveCrsPaperScript"+paper_script_cnt+"'></div>");
    $('#paper-script-field-1').append(courseno,livecourseno);

    var name = $("<textarea class='form-fields name-field' id='namePaperScript"+paper_script_cnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNamePaperScript"+paper_script_cnt+"'></div>");
    $('#paper-script-field-2').append(name,livename);

    var stud_cnt = $("<textarea class='form-fields' id='numOfStdPaperScript"+paper_script_cnt+"'></textarea>");
    $('#paper-script-field-3').append(stud_cnt);

    paper_script_cnt++;
}

function removePaperScriptField()
{
    if(paper_script_cnt > 1)
    {

        paper_script_cnt--;
        var $select = $('#crsPaperScript'+paper_script_cnt);
        $($select).remove();
        var $select = $('#liveCrsPaperScript'+paper_script_cnt);
        $($select).remove();
        var $select = $('#namePaperScript'+paper_script_cnt);
        $($select).remove();
        var $select = $('#liveNamePaperScript'+paper_script_cnt);
        $($select).remove();
        var $select = $('#numOfStdPaperScript'+paper_script_cnt);
        $($select).remove();
    }
}


//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------