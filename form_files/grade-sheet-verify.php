<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div class="row">
            <h3>Grade sheet verification team form</h3>
        </div>
        
        <div class="form-response">
            <span id="grade-sheet-verify-error-message" class="label label-danger"></span>
            <span id="grade-sheet-verify-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addGradeSheetVerifyField()">+</button>
                <button class="btn btn-default" onclick="removeGradeSheetVerifyField()">-</button>
            </div>
            <h4>List of members of grade-sheet-verify board</h4>
        </div>
        
        <section class="grade-sheet-verify-input">
            <div class="row">
                <div id="grade-sheet-verify-field-1" class="col-md-4"><p class="field-header">Serial number</p></div>
                <div id="grade-sheet-verify-field-2" class="col-md-4"><p class="field-header">Name of teacher</p></div>
                <div id="grade-sheet-verify-field-3" class="col-md-4"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="grade-sheet-verify-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>
        
        <script src="./resources/js/form-management/grade-sheet-verify.js"></script>
        <script src="./resources/js/live-form-submission/grade-sheet-verify.js"></script>
        <script src="./resources/js/live-search/grade-sheet-verify.js"></script>
    </body>
</html>