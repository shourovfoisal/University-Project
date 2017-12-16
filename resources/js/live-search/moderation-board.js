//---------------------------------------------
//          LIVE SEARCH CODES (START)
//---------------------------------------------


// BELOW ARE TWO EVENT HANDLERS - THEY DETECT IF THE USER TYPES SOMETHING IN THE TEXT FIELD

// SENDS THE 'NAME' TEXTFIELD INPUT DATA TO THE livesearch_teacher.php
$('.mod-input').on('keyup', '.name-field', function() {

    var search = $(this).val();

    console.log($(this).siblings());

    var selector = $(this).next();

    if($.trim(search.length) == 0) {
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


// SENDS THE 'DESIGNATION' TEXTFIELD INPUT DATA TO THE livesearch_designation.php
$('.mod-input').on('keyup', '.designation-field', function() {

    var search = $(this).val();

    var selector = $(this).next();

    if($.trim(search.length) == 0) {
        selector.html('');
    }
    else
    {
        $.ajax({
            type : 'POST',
            url : 'livesearch_designation.php',
            data : {'search': search},
            success : function(data) {
                selector.html(data);
            }
        });
    }

});




// FILLUP CORRESPONSING INPUT FIELD(s) WHEN A SEARCH RESULT IS CLICKED

$('.mod-input').on('click','.live-teacher-name',function() {

    var name_of_teacher = $(this).text();
    name_of_teacher = name_of_teacher+"\n"+$(this).parent().next().text();  // Name is joined with status (eg. Professor).
    var destination = $(this).parent().parent().parent().prev();            // Selects the corresponsing textfield.
    $(destination).val(name_of_teacher);                                    // The name is placed into the textfield.



    var no_of_papers = $(this).parent().next().next().text();                // Gets number of papers from hidden list item
    var id_string = $(this).parent().parent().parent().attr('id');           // Gets the id of the div with search results
    var id_no = id_string.substr(id_string.length-1);                        // Last character of id indicates row number

    /*
        The row number is joined with the id of 'Number
        of papers' to find the corresponsing 'Number of
        papers' text field.
    */
    var destination_id = '#numOfPprMod'+id_no;


    $(destination_id).val(no_of_papers);                                      // Value is inserted into 'Number of papers'

    $($(this).parent().parent()).fadeOut(500);
});

$('.mod-input').on('click','.live-designation',function() {
    var classcontents = $(this).text();
    var destination = $(this).parent().parent().parent().prev();
    $(destination).val(classcontents);
    $($(this).parent().parent()).fadeOut(500);
});


//---------------------------------------------
//          LIVE SEARCH CODES (END)
//---------------------------------------------