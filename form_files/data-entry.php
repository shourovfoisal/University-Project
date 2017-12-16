<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div class="row">
            <h3>Form for teachers engaged data entry</h3>
        </div>

        <div class="form-response">
            <span id="data-entry-error-message" class="label label-danger"></span>
            <span id="data-entry-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addDataEntryField()">+</button>
                <button class="btn btn-default" onclick="removeDataEntryField()">-</button>
            </div>
            <h4>List of members of data entry team</h4>
        </div>

        <section class="data-entry-input">
            <div class="row">
                <div id="data-entry-field-1" class="col-md-3"><p class="field-header">Name of teacher</p></div>
                <div id="data-entry-field-2" class="col-md-3"><p class="field-header">No. of theory subject</p></div>
                <div id="data-entry-field-3" class="col-md-3"><p class="field-header">No. of sessional subject</p></div>
                <div id="data-entry-field-4" class="col-md-3"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="data-entry-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/data-entry.js"></script>
        <script src="./resources/js/live-form-submission/data-entry.js"></script>
        <script src="./resources/js/live-search/data-entry.js"></script>
    </body>
</html>