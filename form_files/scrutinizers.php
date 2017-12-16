<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div class="row">
            <h3>Scrutinizer Form</h3>
        </div>

        <div class="form-response">
            <span id="scrut-error-message" class="label label-danger"></span>
            <span id="scrut-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addScrutField()">+</button>
                <button class="btn btn-default" onclick="removeScrutField()">-</button>
            </div>
            <h4>List of members of scrutinizer team</h4>
        </div>

        <section class="scrut-input">
            <div class="row">
                <div id="scrut-field-1" class="col-md-4"><p class="field-header">Serial number</p></div>
                <div id="scrut-field-2" class="col-md-4"><p class="field-header">Name of teacher</p></div>
                <div id="scrut-field-3" class="col-md-4"><p class="field-header">Number of papers</p></div>
            </div>
            <div class="row">
                <button type="button" id="scrut-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/scrutinizers.js"></script>
        <script src="./resources/js/live-form-submission/scrutinizers.js"></script>
        <script src="./resources/js/live-search/scrutinizers.js"></script>
    </body>
</html>