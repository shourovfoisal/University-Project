<!DOCTYPE html>

<html lang="en">
    <head>
        <title>RUET PROJECT</title>
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
        <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <script src="vendors/js/jquery.min.js"></script>
        <script src="vendors/js/bootstrap.min.js"></script>
        <script src="vendors/js/jquery.form.js"></script>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">RUET</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">HOME</a></li>
                        <li><a href="showResult.php" target="_blank">RESULTS</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">NAVIGATE&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </nav>
            
            
            
            <div class="main-menu">
                
                <div class="row hero-text">
                    <h3>Please select an option</h3>
                </div>
                
                <ul class="nav nav-pills nav-stacked main-menu-options">
                    <li>
                        <a href="#moderation-board" data-toggle="pill" onclick="createDiv(0)"><i class="ion-ios-list-outline"></i> List of the members who took part in <span class="label label-success">moderation</span></a>
                    </li>
                    <li>
                        <a href="#board-viva" data-toggle="pill" onclick="createDiv(1)"><i class="ion-ios-list-outline"></i> List of the Teachers who are engaged with <span class="label label-success">viva board</span> for 8th Semester</a>
                    </li>
                    <li>
                        <a href="#sessional-class" data-toggle="pill" onclick="createDiv(2)"><i class="ion-ios-list-outline"></i> List of Teacher for <span class="label label-success">sessional class</span></a>
                    </li>
                    <li>
                        <a href="#class-test" data-toggle="pill" onclick="createDiv(3)"><i class="ion-ios-list-outline"></i> List of Teachers for <span class="label label-success">class test</span></a>
                    </li>
                    <li>
                        <a href="#scrutinizers" data-toggle="pill" onclick="createDiv(4)"><i class="ion-ios-list-outline"></i> List of <span class="label label-success">scrutinizers</span></a>
                    </li>
                    <li>
                        <a href="#type-print-draw" data-toggle="pill" onclick="createDiv(5)"><i class="ion-ios-list-outline"></i> List of Teacher Engaged in <span class="label label-success">typing, printing and drawing figure</span> etc.</a>
                    </li>
                    <li>
                        <a href="#paper-script" data-toggle="pill" onclick="createDiv(6)"><i class="ion-ios-list-outline"></i> List of <span class="label label-success">paper setter and script examiner</span></a>
                    </li>
                    <li>
                        <a href="#project-thesis-8th" data-toggle="pill" onclick="createDiv(7)"><i class="ion-ios-list-outline"></i> List of the Teachers who were engaged with <span class="label label-success">project/thesis work for 8th semester</span></a>
                    </li>
                    <li>
                        <a href="#seminer-8th" data-toggle="pill" onclick="createDiv(8)"><i class="ion-ios-list-outline"></i> List of the Teachers who were engaged with <span class="label label-success">seminer work for 8th semester</span></a>
                    </li>
                    <li>
                        <a href="#data-entry" data-toggle="pill" onclick="createDiv(9)"><i class="ion-ios-list-outline"></i> List of Teachers for <span class="label label-success">data entry</span></a>
                    </li>
                    <li>
                        <a href="#grade-sheet-verify" data-toggle="pill" onclick="createDiv(10)"><i class="ion-ios-list-outline"></i> List of Teachers for <span class="label label-success">grade sheet verification</span></a>
                    </li>
                </ul>
                
                <div class="tab-content panel panel-default main-menu-contents">
                    <div id="moderation-board" class="tab-pane fade panel-body"></div>
                    <div id="board-viva" class="tab-pane fade panel-body"></div>
                    <div id="sessional-class" class="tab-pane fade panel-body"></div>
                    <div id="class-test" class="tab-pane fade panel-body"></div>
                    <div id="scrutinizers" class="tab-pane fade panel-body"></div>
                    <div id="type-print-draw" class="tab-pane fade panel-body"></div>
                    <div id="paper-script" class="tab-pane fade panel-body"></div>
                    <div id="project-thesis-8th" class="tab-pane fade panel-body"></div>
                    <div id="seminer-8th" class="tab-pane fade panel-body"></div>
                    <div id="data-entry" class="tab-pane fade panel-body"></div>
                    <div id="grade-sheet-verify" class="tab-pane fade panel-body"></div>
                </div>
                
            </div>
            
            <footer>
                <p><strong>Copyright &copy; 2017 by Shourov Foisal</strong></p>
            </footer>
            
        </div>
        
        <script>
            var $divTaken = [0,0,0,0,0,0,0,0,0,0,0];
            
            function createDiv(a)
            {
                if($divTaken[a] === 0)
                {
                    $('.main-menu-contents').css('visibility','visible');
                    
                    switch(a)
                    {
                        case 0: $('#moderation-board').load('form_files/moderation-board.php');
                        break;
                            
                        case 1: $('#board-viva').load('form_files/viva-board.php');
                        break;
                            
                        case 2: $('#sessional-class').load('form_files/sessional-class.php');
                        break;
                            
                        case 3: $('#class-test').load('form_files/class-test.php');
                        break;
                            
                        case 4: $('#scrutinizers').load('form_files/scrutinizers.php');
                        break;
                            
                        case 5: $('#type-print-draw').load('form_files/type-print-draw.php');
                        break;
                            
                        case 6: $('#paper-script').load('form_files/paper-script.php');
                        break;
                            
                        case 7: $('#project-thesis-8th').load('form_files/project-thesis-8th.php');
                        break;
                            
                        case 8: $('#seminer-8th').load('form_files/seminer-8th.php');
                        break;
                            
                        case 9: $('#data-entry').load('form_files/data-entry.php');
                        break;
                            
                        case 10: $('#grade-sheet-verify').load('form_files/grade-sheet-verify.php');
                            
                    }
                    $divTaken[a] = 1;
                }
            }
            
        </script>
    </body>
</html>