//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------

var seminer_8th_cnt = 0;
function addSeminer8thField()
{
    if(seminer_8th_cnt==0)
        $('#seminer-8th-submit').css('visibility','visible');

    var courseno = $("<textarea class='form-fields course-field' id='crsSeminer8th"+seminer_8th_cnt+"'></textarea>");
    var livecourseno = $("<div class='live-search-list' id='liveCrsSeminer8th"+seminer_8th_cnt+"'></div>");
    $('#seminer-8th-field-1').append(courseno,livecourseno);

    var name = $("<textarea class='form-fields name-field' id='nameSeminer8th"+seminer_8th_cnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameSeminer8th"+seminer_8th_cnt+"'></div>");
    $('#seminer-8th-field-2').append(name,livename);

    var stud_cnt = $("<textarea class='form-fields' id='numOfStdSeminer8th"+seminer_8th_cnt+"'></textarea>");
    $('#seminer-8th-field-3').append(stud_cnt);

    seminer_8th_cnt++;
}

function removeSeminer8thField()
{
    if(seminer_8th_cnt > 1)
    {

        seminer_8th_cnt--;
        var $select = $('#crsSeminer8th'+seminer_8th_cnt);
        $($select).remove();
        var $select = $('#liveCrsSeminer8th'+seminer_8th_cnt);
        $($select).remove();
        var $select = $('#nameSeminer8th'+seminer_8th_cnt);
        $($select).remove();
        var $select = $('#liveNameSeminer8th'+seminer_8th_cnt);
        $($select).remove();
        var $select = $('#numOfStdSeminer8th'+seminer_8th_cnt);
        $($select).remove();
    }
}

//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------