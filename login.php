<?php
require ('connection.php');

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $re_pass=$_POST['re_pass'];
    
   

  

    if ($name =='' || $pass=='' || $re_pass=='' || $email=='' ) {

        echo "u can't leave empty any box";
        
    }
    elseif ($re_pass != $pass) {
        echo "<p> your confirm password not matching</p>";
    }
    /*elseif ($Name <'5' || $Name > '20') {
        echo "u can enter minimun 5 character and maximun 12 charater for name";
    }
    elseif ($last <'3' || $last > '10') {
        echo "u can enter minimun 3 character and maximun 10 charater for last name";
    }
    elseif ($number <'10' || $number > '12') {
        echo "u can enter minimun 10 character and maximun 12 charater for number";
    }
    elseif ($email <'5' || $email > '12') {
        echo "u can enter minimun 5 character and maximun 12 charater  email for email";
    }*/
    else{

$sign_up = "INSERT INTO `students_signup` (`name`,`email`,`pass`,`re_pass`) VALUES ('$name','$email','$pass','$re_pass')";
    // echo "entered data is :".$sign_up;

    if ($conn -> query($sign_up)){
        // echo "done";
        // echo "<br>";
        // echo $sign_up;
         session_start();
        $_SESSION["email"]=$email;
        header('location: form.php');

    }
    else{
        echo "fail insertion";
    }


    }

   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    

    <!-- Main css -->
    <link rel="stylesheet" href="./css/login.css">

</head>

<body>

    <div class="main">

        <!-- Sign in form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" onclick="f1()" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login1.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

       

    </div>

</body>
</html>