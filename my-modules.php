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
        <link rel="stylesheet" href="my-modules.css">

        <title>My Modules</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark navbar-expand">
            <a href="index.php" class="navbar-brand">Blue Castle</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
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
        <div class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">My Modules</h1>
                <p class="lead text-muted">Modules displayed for 18/19 are those either chosen and approved in the May pre-module enrolment period or selected during the Online Module Enrolment change of mind period. Choices subject to approval will be confirmed by 26 October 2018.<br>Further information on module enrolment is available from our <a href="http://www.nottingham.ac.uk/academicservices/currentstudents/moduleenrolment/moduleenrolment.aspx">webpage.</a></p>
                <p>
                    <a class="btn btn-primary my-2 my-modules-button" href="my-modules.php">My Modules</a>
                    <a href="#" class="btn btn-secondary my-2">My Surveys</a>
                </p>
            </div>
        </div>
        <div class="container">
            <p class="text-muted"><strong>2018/2019</strong></p>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Title</th>
                        <th scope="col">Credits</th>
                        <th scope="col">Semester</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php

                        include('connect.php');
                        $usernmae = $_SESSION['username'];
                        $sql = "select code, modulename, credits, semester from modules, students, enrollsIn where modules.moduleid = enrollsIn.moduleid and students.studentid = enrollsIn.studentid and username = '$username'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo '<tr><th scope="row"><a href="module.php?code='.$row['code'].'">'.$row['code'].'</a></th><td><a href="module.php?code='.$row['code'].'">'.$row['modulename'].'</a></td><td>'.$row['credits'].'</td><td>'.$row['semester'].'</td></tr>';
                        }

                        mysqli_close($conn);
                    ?>

                </tbody>
            </table>
        </div>
        <footer class="text-muted text-center w-100 mt-5">
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