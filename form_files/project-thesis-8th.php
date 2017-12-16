<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        
    </head>
    <body>

        <div class="row">
            <h3>Project and thesis form</h3>
        </div>

        <div class="form-response">
            <span id="project-thesis-8th-error-message" class="label label-danger"></span>
            <span id="project-thesis-8th-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addProjectThesis8thField()">+</button>
                <button class="btn btn-default" onclick="removeProjectThesis8thField()">-</button>
            </div>
            <h4>List of the teachers engaged with project/thesis work for 8th semester</h4>
        </div>
        
        <section class="project-thesis-8th-input">
            <div class="row">
                <div id="project-thesis-8th-field-1" class="col-md-3"><p class="field-header">Course No</p></div>
                <div id="project-thesis-8th-field-2" class="col-md-3"><p class="field-header">Name of teacher</p></div>
                <div id="project-thesis-8th-field-3" class="col-md-3"><p class="field-header">No. of student (Internal)</p></div>
                <div id="project-thesis-8th-field-4" class="col-md-3"><p class="field-header">No. of student (External)</p></div>
            </div>
            <div class="row">
                <button type="button" id="project-thesis-8th-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>
        
        <script src="./resources/js/form-management/project-thesis-8th.js"></script>
        <script src="./resources/js/live-form-submission/project-thesis-8th.js"></script>
        <script src="./resources/js/live-search/project-thesis-8th.js"></script>
    </body>
</html>