<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div class="row">
            <h3>Moderation Board Form</h3>
        </div>

        <div class="form-response">
            <span id="mod-error-message" class="label label-danger"></span>
            <span id="mod-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addModField()">+</button>
                <button class="btn btn-default" onclick="removeModField()">-</button>
            </div>
            <h4>List of members of moderation board</h4>
        </div>

        <section class="mod-input">
            <div class="row">
                <div id="mod-field-1" class="col-md-3"><p class="field-header">Serial number</p></div>
                <div id="mod-field-2" class="col-md-3"><p class="field-header">Name of teacher</p></div>
                <div id="mod-field-3" class="col-md-3"><p class="field-header">Designation of teacher</p></div>
                <div id="mod-field-4" class="col-md-3"><p class="field-header">Number of papers</p></div>
            </div>
            <div class="row">
                <button type="button" id="mod-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/moderation-board.js"></script>
        <script src="./resources/js/live-form-submission/moderation-board.js"></script>
        <script src="./resources/js/live-search/moderation-board.js"></script>
    </body>
</html>