//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var modcnt = 0;
function addModField()
{
    if(modcnt==0)
        $('#mod-submit').css('visibility','visible');

    var serial = $("<textarea class='form-fields' id='slMod"+modcnt+"'></textarea>");
    $('#mod-field-1').append(serial);

    var name = $("<textarea class='form-fields name-field' id='nameMod"+modcnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameMod"+modcnt+"'></div>");
    $('#mod-field-2').append(name,livename);

    var designation = $("<textarea class='form-fields designation-field' id='desMod"+modcnt+"'></textarea>");
    var livedes = $("<div class='live-search-list' id='liveDesMod"+modcnt+"'></textarea>");
    $('#mod-field-3').append(designation,livedes);

    var paper_cnt = $("<textarea class='form-fields' id='numOfPprMod"+modcnt+"'></textarea>");
    $('#mod-field-4').append(paper_cnt);

    modcnt++;
}

function removeModField()
{
    if(modcnt > 1)
    {

        modcnt--;
        var $select = $('#slMod'+modcnt);
        $($select).remove();
        var $select = $('#nameMod'+modcnt);
        $($select).remove();
        var $select = $('#liveNameMod'+modcnt);
        $($select).remove();
        var $select = $('#desMod'+modcnt);
        $($select).remove();
        var $select = $('#liveDesMod'+modcnt);
        $($select).remove();
        var $select = $('#numOfPprMod'+modcnt);
        $($select).remove();
    }
}


//-------------------------------------------------
//  FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------