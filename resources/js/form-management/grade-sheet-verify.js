//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var grade_sheet_verify_cnt = 0;
function addGradeSheetVerifyField()
{
    if(grade_sheet_verify_cnt==0)
        $('#grade-sheet-verify-submit').css('visibility','visible');

    var serial = $("<textarea class='form-fields' id='slGradeSheetVerify"+grade_sheet_verify_cnt+"'></textarea>");
    $('#grade-sheet-verify-field-1').append(serial);

    var name = $("<textarea class='form-fields name-field' id='nameGradeSheetVerify"+grade_sheet_verify_cnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameGradeSheetVerify"+grade_sheet_verify_cnt+"'></div>");
    $('#grade-sheet-verify-field-2').append(name,livename);

    var stdcnt = $("<textarea class='form-fields' id='stdsGradeSheetVerify"+grade_sheet_verify_cnt+"'></textarea>");
    $('#grade-sheet-verify-field-3').append(stdcnt);

    grade_sheet_verify_cnt++;
}

function removeGradeSheetVerifyField()
{
    if(grade_sheet_verify_cnt > 1)
    {

        grade_sheet_verify_cnt--;
        var $select = $('#slGradeSheetVerify'+grade_sheet_verify_cnt);
        $($select).remove();
        var $select = $('#nameGradeSheetVerify'+grade_sheet_verify_cnt);
        $($select).remove();
        var $select = $('#liveNameGradeSheetVerify'+grade_sheet_verify_cnt);
        $($select).remove();
        var $select = $('#stdsGradeSheetVerify'+grade_sheet_verify_cnt);
        $($select).remove();
    }
}

//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------