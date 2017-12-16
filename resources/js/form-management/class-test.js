//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var testcnt = 0;
function addTestField()
{
    if(testcnt==0)
        $('#test-submit').css('visibility','visible');


    // form-fields IS USED FOR CSS STYLING OF THE TEXTFIELDS
    // course-field IS USED FOR LIVE SEARCH
    // crsTest IS USED FOR NUMBERING THE TEXTFIELD FOR (FUTURE DELETION OF THE FIELD) AND (AJAX DATA SEND) PURPOSES
    var courseno = $("<textarea class='form-fields course-field' id='crsTest"+testcnt+"'></textarea>");
    var livecourseno = $("<div class='live-search-list' id='liveCrsTest"+testcnt+"'></div>");
    $('#test-field-1').append(courseno,livecourseno);

    var name = $("<textarea class='form-fields name-field' id='nameTest"+testcnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameTest"+testcnt+"'></div>");
    $('#test-field-2').append(name,livename);

    var nooftest = $("<textarea class='form-fields' id='noOfTest"+testcnt+"'></textarea>");
    $('#test-field-3').append(nooftest);

    var stud_cnt = $("<textarea class='form-fields' id='numOfStdTest"+testcnt+"'></textarea>");
    $('#test-field-4').append(stud_cnt);

    testcnt++;
}

function removeTestField()
{
    if(testcnt > 1)
    {
        testcnt--;
        var $select = $('#crsTest'+testcnt);
        $($select).remove();
        var $select = $('#liveCrsTest'+testcnt);
        $($select).remove();
        var $select = $('#nameTest'+testcnt);
        $($select).remove();
        var $select = $('#liveNameTest'+testcnt);
        $($select).remove();
        var $select = $('#noOfTest'+testcnt);
        $($select).remove();
        var $select = $('#numOfStdTest'+testcnt);
        $($select).remove();
    }
}


//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------