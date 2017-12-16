<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <script src="vendors/js/jquery.min.js"></script>
        </title>
        
    </head>
    <body>
        <div class="row">
            <h3>Seminer work form</h3>
        </div>

        <div class="form-response">
            <span id="seminer-8th-error-message" class="label label-danger"></span>
            <span id="seminer-8th-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addSeminer8thField()">+</button>
                <button class="btn btn-default" onclick="removeSeminer8thField()">-</button>
            </div>
            <h4>List of the teachers engaged in seminer work for 8th semester</h4>
        </div>

        <section class="seminer-8th-input">
            <div class="row">
                <div id="seminer-8th-field-1" class="col-md-4"><p class="field-header">Course No</p></div>
                <div id="seminer-8th-field-2" class="col-md-4"><p class="field-header">Name of teacher</p></div>
                <div id="seminer-8th-field-3" class="col-md-4"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="seminer-8th-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>

        <script src="./resources/js/form-management/seminer-8th.js"></script>
        <script src="./resources/js/live-form-submission/seminer-8th.js"></script>
        <script src="./resources/js/live-search/seminer-8th.js"></script>
    </body>
</html>