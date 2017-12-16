<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <script src="vendors/js/jquery.min.js"></script>
        </title>
        
    </head>
    <body>
        <div class="row">
            <h3>Paper setter and script examiner form</h3>
        </div>

        <div class="form-response">
            <span id="paper-script-error-message" class="label label-danger"></span>
            <span id="paper-script-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addPaperScriptField()">+</button>
                <button class="btn btn-default" onclick="removePaperScriptField()">-</button>
            </div>
            <h4>List of the teachers for paper setter and script examiner</h4>
        </div>

        <section class="paper-script-input">
            <div class="row">
                <div id="paper-script-field-1" class="col-md-4"><p class="field-header">Course No</p></div>
                <div id="paper-script-field-2" class="col-md-4"><p class="field-header">Name of teacher</p></div>
                <div id="paper-script-field-3" class="col-md-4"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="paper-script-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/paper-script.js"></script>
        <script src="./resources/js/live-form-submission/paper-script.js"></script>
        <script src="./resources/js/live-search/paper-script.js"></script>
    </body>
</html>