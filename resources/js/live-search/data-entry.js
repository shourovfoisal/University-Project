//---------------------------------------------
//          LIVE SEARCH CODES (START)
//---------------------------------------------


// BELOW ARE TWO EVENT HANDLERS - THEY DETECT IF THE USER TYPES SOMETHING IN THE TEXT FIELD


// (1)
$('.data-entry-input').on('keyup', '.name-field', function() {

    var search = $(this).val(); //(2)

    var selector = $(this).next(); //(3)

    if($.trim(search.length) == 0) { //(4)
        selector.html('');
    }
    else
    {
        $.ajax({
            type : 'POST',
            url : 'livesearch_teacher.php',
            data : {'search': search},
            success : function(data) {
                selector.html(data);
            }
        });
    }

});
// (1) SENDS THE 'NAME' TEXTFIELD INPUT DATA TO THE livesearch_teacher.php
// (2) READS TEXTFIELD VALUE, ASSIGNS IT TO THE search VARIABLE
// (3) THE VARIABLE selector SELECTS THE DIV NEXT TO THE TEXTFIELD AS AN OBJECT, FOR INSERTING THE RESULT INTO IT
// (4) IF THE USER CLEARS THE TEXTFIELD, THE LIVE SEARCH RESULT GETS CLEARED TOO


// FILLUP CORRESPONSING INPUT FIELD(s) WHEN A SEARCH RESULT IS CLICKED

$('.data-entry-input').on('click','.live-teacher-name',function() {
    var classcontents = $(this).text();
    classcontents = classcontents+"\n"+$(this).parent().next().text();
    var destination = $(this).parent().parent().parent().prev();
    //(1)
    $(destination).val(classcontents);
    $($(this).parent().parent()).fadeOut(500);
});

// (1) $(this).parent().parent().parent() THIS IS THE DIRECTORY TO THE LIVE SEARCH RESULT DIV (live-search-list)

//---------------------------------------------
//          LIVE SEARCH CODES (END)
//---------------------------------------------