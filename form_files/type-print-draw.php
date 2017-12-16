<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div class="row">
            <h3>Form for teachers engaged in typing, printing and drawing</h3>
        </div>

        <div class="form-response">
            <span id="typrdr-error-message" class="label label-danger"></span>
            <span id="typrdr-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addTyPrDrField()">+</button>
                <button class="btn btn-default" onclick="removeTyPrDrField()">-</button>
            </div>
            <h4>List of members of type, print and draw team</h4>
        </div>

        <section class="typrdr-input">
            <div class="row">
                <div id="typrdr-field-1" class="col-md-6"><p class="field-header">Name of teacher</p></div>
                <div id="typrdr-field-2" class="col-md-6"><p class="field-header">Number of papers</p></div>
            </div>
            <div class="row">
                <button type="button" id="typrdr-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/type-print-draw.js"></script>
        <script src="./resources/js/live-form-submission/type-print-draw.js"></script>
        <script src="./resources/js/live-search/type-print-draw.js"></script>
    </body>
</html>