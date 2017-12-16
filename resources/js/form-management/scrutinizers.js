//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var scrutcnt = 0;
function addScrutField()
{
    if(scrutcnt==0)
        $('#scrut-submit').css('visibility','visible');

    var serial = $("<textarea class='form-fields' id='slScrut"+scrutcnt+"'></textarea>")
    $('#scrut-field-1').append(serial);

    var name = $("<textarea class='form-fields name-field' id='nameScrut"+scrutcnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameScrut"+scrutcnt+"'></div>");
    $('#scrut-field-2').append(name,livename);

    var paper_cnt = $("<textarea class='form-fields' id='numOfPprScrut"+scrutcnt+"'></textarea>");
    $('#scrut-field-3').append(paper_cnt);

    scrutcnt++;
}

function removeScrutField()
{
    if(scrutcnt > 1)
    {

        scrutcnt--;
        var $select = $('#slScrut'+scrutcnt);
        $($select).remove();
        var $select = $('#nameScrut'+scrutcnt);
        $($select).remove();
        var $select = $('#liveNameScrut'+scrutcnt);
        $($select).remove();
        var $select = $('#numOfPprScrut'+scrutcnt);
        $($select).remove();
    }
}

//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------