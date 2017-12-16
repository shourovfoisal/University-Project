//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var data_entry_cnt = 0;
function addDataEntryField()
{
    if(data_entry_cnt==0)
        $('#data-entry-submit').css('visibility','visible');

    var name = $("<textarea class='form-fields name-field' id='nameDataEntry"+data_entry_cnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameDataEntry"+data_entry_cnt+"'></div>");
    $('#data-entry-field-1').append(name,livename);

    var theory_subject_cnt = $("<textarea class='form-fields' id='numOfThSubDataEntry"+data_entry_cnt+"'></textarea>");
    $('#data-entry-field-2').append(theory_subject_cnt);

    var sessional_subject_cnt = $("<textarea class='form-fields' id='numOfSessSubDataEntry"+data_entry_cnt+"'></textarea>");
    $('#data-entry-field-3').append(sessional_subject_cnt);

    var student_cnt = $("<textarea class='form-fields' id='numOfStdDataEntry"+data_entry_cnt+"'></textarea>");
    $('#data-entry-field-4').append(student_cnt);


    data_entry_cnt++;
}

function removeDataEntryField()
{
    if(data_entry_cnt > 1)
    {

        data_entry_cnt--;
        var $select = $('#nameDataEntry'+data_entry_cnt);
        $($select).remove();
        var $select = $('#liveNameDataEntry'+data_entry_cnt);
        $($select).remove();
        var $select = $('#numOfThSubDataEntry'+data_entry_cnt);
        $($select).remove();
        var $select = $('#numOfSessSubDataEntry'+data_entry_cnt);
        $($select).remove();
        var $select = $('#numOfStdDataEntry'+data_entry_cnt);
        $($select).remove();
    }
}

//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------