//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------

var classcnt = 0;
function addClassField()
{
    if(classcnt==0)
        $('#class-submit').css('visibility','visible');

    var courseno = $("<textarea class='form-fields course-field' id='crsClass"+classcnt+"'></textarea>");
    var livecourseno = $("<div class='live-search-list' id='liveCrsClass"+classcnt+"'></div>");
    $('#class-field-1').append(courseno,livecourseno);

    var name = $("<textarea class='form-fields name-field' id='nameClass"+classcnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameClass"+classcnt+"'></div>");
    $('#class-field-2').append(name,livename);

    var credit = $("<textarea class='form-fields' id='credClass"+classcnt+"'></textarea>");
    $('#class-field-3').append(credit);

    var stud_cnt = $("<textarea class='form-fields' id='numOfStdClass"+classcnt+"'></textarea>");
    $('#class-field-4').append(stud_cnt);

    classcnt++;
}

function removeClassField()
{
    if(classcnt > 1)
    {

        classcnt--;
        var $select = $('#crsClass'+classcnt);
        $($select).remove();
        var $select = $('#liveCrsClass'+classcnt);
        $($select).remove();
        var $select = $('#nameClass'+classcnt);
        $($select).remove();
        var $select = $('#liveNameClass'+classcnt);
        $($select).remove();
        var $select = $('#credClass'+classcnt);
        $($select).remove();
        var $select = $('#numOfStdClass'+classcnt);
        $($select).remove();
    }
}

//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------