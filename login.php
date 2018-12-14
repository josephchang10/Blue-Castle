<?php

    header("Content-Type: text/html; charset=utf8");
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username && $password) {
        $hash = hash("sha256", $password);
        $sql = "select * from students where username = '$username' and password='$hash'";
        $result = $conn->query($sql);
        $rows = $result->num_rows;
        if($rows){
            session_start();
            $_SESSION["username"] = $username;
            header("refresh:0;url=index.php");
            exit;
        } else {
            $alert = true;
        }
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">

        <title>Log in</title>
    </head>
    <body>
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col login-illustration h-100 d-flex align-items-center justify-content-center">
                    <h3 style="color:#036; position: absolute; left: 50px; top:50px;">Blue Castle</h3>
                    <img src="images/login-illustration.svg">
                </div>
                <div class="col h-100 d-flex align-items-center justify-content-center">
                    <form action="login.php" method="POST" style="width: 60%;">
                        <h3 class="login-title mb-3">Log in</h3>
                        <div class="form-group">
                            <input type="text" placeholder="User name" class="form-control <?php if($alert) { echo "is-invalid"; } ?>" name="username" value="psxjz8" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control <?php if($alert) { echo "is-invalid"; } ?>" name="password" value="123456" required>
                            <div class="invalid-feedback">
                                The user name or password provided is incorrect.
                            </div>
                        </div>
                        <div class="form-group">
                            <small><a href="#">Forgot password?</a></small>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg login-button" value="Log in">
                    </form>
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
        </div>
    </body>
</html>