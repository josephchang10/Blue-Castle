<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("refresh:0;url=login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">

        <title>Blue Castle</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark navbar-expand">
            <a href="index.php" class="navbar-brand">Blue Castle</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-modules.php">My Programme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-marks.php">My Assessments</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" href="#">Account</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown">
                            <a class="dropdown-item" href="logoff.php">Log off</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <a href="my-modules.php">
                        <div class="card mb-4 shadow text-white">
                            <img class="card-img" src="images/my-modules.jpg" alt="My Modules">
                            <div class="card-img-overlay">
                                <h3 class="card-title">My Modules</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <div class="card mb-4 shadow text-white">
                            <img class="card-img" src="images/my-award.jpg" alt="My Modules">
                            <div class="card-img-overlay">
                                <h3 class="card-title">My Award</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <div class="card mb-4 shadow text-white">
                            <img class="card-img" src="images/my-progression.jpg" alt="My Modules">
                            <div class="card-img-overlay">
                                <h3 class="card-title">My Progression</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="my-marks.php">
                        <div class="card mb-4 shadow text-white">
                            <img class="card-img" src="images/my-marks.jpg" alt="My Modules">
                            <div class="card-img-overlay">
                                <h3 class="card-title">My Marks</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <div class="card mb-4 shadow text-white">
                            <img class="card-img" src="images/my-surveys.jpg" alt="My Modules">
                            <div class="card-img-overlay">
                                <h3 class="card-title">My Surveys</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <footer class="text-muted text-center w-100" style="position: absolute; bottom: 10px;">
            <small>Our terms and other documents below changed in May 2012. Please familiarise yourself with the new ones.</small>
            <div class="row text-center mx-5 mt-1">
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/copyright.aspx" target="_blank">Copyright</a></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/website-terms-of-use.aspx" target="_blank">Terms and Conditions</a></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/privacy.aspx" target="_blank">Privacy and Cookies</a></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/posting-rules.aspx" target="_blank">Posting Rules</a></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/accessibility/accessibility.aspx" target="_blank">Accessibility</a></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/foi.aspx" target="_blank">Freedom of Information</a></small></div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>