//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (START)
//-------------------------------------------------


var typrdrcnt = 0;
function addTyPrDrField()
{
    if(typrdrcnt==0)
        $('#typrdr-submit').css('visibility','visible');

    var name = $("<textarea class='form-fields name-field' id='nameTyPrDr"+typrdrcnt+"'></textarea>");
    var livename = $("<div class='live-search-list' id='liveNameTyPrDr"+typrdrcnt+"'></div>");
    $('#typrdr-field-1').append(name,livename);

    var paper_cnt = $("<textarea class='form-fields' id='numOfPprTyPrDr"+typrdrcnt+"'></textarea>");
    $('#typrdr-field-2').append(paper_cnt);

    typrdrcnt++;
}

function removeTyPrDrField()
{
    if(typrdrcnt > 1)
    {
        typrdrcnt--;
        var $select = $('#nameTyPrDr'+typrdrcnt);
        $($select).remove();
        var $select = $('#liveNameTyPrDr'+typrdrcnt);
        $($select).remove();
        var $select = $('#numOfPprTyPrDr'+typrdrcnt);
        $($select).remove();
    }
}

//-------------------------------------------------
// FUNCTIONS FOR ADDING AND REMOVING ROWS (END)
//-------------------------------------------------