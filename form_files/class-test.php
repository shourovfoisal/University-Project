<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>

        <div class="row">
            <h3>Class Test Form</h3>
        </div>

        <div class="form-response">
            <span id="test-error-message" class="label label-danger"></span>
            <span id="test-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addTestField()">+</button>
                <button class="btn btn-default" onclick="removeTestField()">-</button>
            </div>
            <h4>List of the teachers for class test</h4>
        </div>
        
        <section class="test-input">
            <div class="row">
                <div id="test-field-1" class="col-md-3"><p class="field-header">Course No</p></div>
                <div id="test-field-2" class="col-md-3"><p class="field-header">Name of teacher</p></div>
                <div id="test-field-3" class="col-md-3"><p class="field-header">Number of test</p></div>
                <div id="test-field-4" class="col-md-3"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="test-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>
          
        
        <script src="./resources/js/form-management/class-test.js"></script>
        <script src="./resources/js/live-form-submission/class-test.js"></script>
        <script src="./resources/js/live-search/class-test.js"></script>
    </body>
</html>