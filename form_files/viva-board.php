<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div class="row">
            <h3>Viva board form</h3>
        </div>
        
        <div class="form-response">
            <span id="viva-error-message" class="label label-danger"></span>
            <span id="viva-success-message" class="label label-success"></span>
        </div>

        <div class="row">
            <div class="field-control">
                <button class="btn btn-default" onclick="addVivaField()">+</button>
                <button class="btn btn-default" onclick="removeVivaField()">-</button>
            </div>
            <h4>List of members of viva board</h4>
        </div>
        
        <section class="viva-input">
            <div class="row">
                <div id="viva-field-1" class="col-md-4"><p class="field-header">Serial number</p></div>
                <div id="viva-field-2" class="col-md-4"><p class="field-header">Name of teacher</p></div>
                <div id="viva-field-3" class="col-md-4"><p class="field-header">Number of student</p></div>
            </div>
            <div class="row">
                <button type="button" id="viva-submit" class="btn btn-primary form-submit">Submit</button>
            </div>
        </section>
        
        <script src="./resources/js/form-management/viva-board.js"></script>
        <script src="./resources/js/live-form-submission/viva-board.js"></script>
        <script src="./resources/js/live-search/viva-board.js"></script>
    </body>
</html>