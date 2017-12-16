<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <script src="vendors/js/jquery.min.js"></script>
        </title>
        
    </head>
    <body>
        <div class="row">
            <h3>Sessional Class Form</h3>
        </div>

        <div class="form-response">
            <span id="class-error-message" class="label label-danger"></span>
            <span id="class-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addClassField()">+</button>
                <button class="btn btn-default" onclick="removeClassField()">-</button>
            </div>
            <h4>List of the teachers for Sessional class</h4>
        </div>
        
        <section class="class-input">
            <div class="row">
                <div id="class-field-1" class="col-md-3"><p class="field-header">Course No</p></div>
                <div id="class-field-2" class="col-md-3"><p class="field-header">Name of teacher</p></div>
                <div id="class-field-3" class="col-md-3"><p class="field-header">Credit</p></div>
                <div id="class-field-4" class="col-md-3"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="class-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/sessional-class.js"></script>
        <script src="./resources/js/live-form-submission/sessional-class.js"></script>
        <script src="./resources/js/live-search/sessional-class.js"></script>
    </body>
</html>