//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var vivacnt = 0;
function addVivaField()
{
    if(vivacnt==0)
        $('#viva-submit').css('visibility','visible');

    var serial = $("<textarea class='form-fields' id='slViva"+vivacnt+"'></textarea>");
    $('#viva-field-1').append(serial);

    var name = $("<textarea class='form-fields name-field' id='nameViva"+vivacnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameViva"+vivacnt+"'></div>")
    $('#viva-field-2').append(name,livename);

    var stdcnt = $("<textarea class='form-fields' id='stdsViva"+vivacnt+"'></textarea>");
    $('#viva-field-3').append(stdcnt);

    vivacnt++;
}

function removeVivaField()
{
    if(vivacnt > 1)
    {

        vivacnt--;
        var $select = $('#slViva'+vivacnt);
        $($select).remove();
        var $select = $('#nameViva'+vivacnt);
        $($select).remove();
        var $select = $('#liveNameViva'+vivacnt);
        $($select).remove();
        var $select = $('#stdsViva'+vivacnt);
        $($select).remove();
    }
}

//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------