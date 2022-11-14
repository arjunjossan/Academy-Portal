 <?php
require ('connection.php');

if(isset($_POST['signin'])){
    $your_email=$_POST['your_email'];
    $your_pass=$_POST['your_pass'];
   
    if ($your_email =='' || $your_pass=='') {
        echo "u can't leave empty any box";
        //header('location: home.php');
        
    }
    /*elseif ($name <'5' || $name > '20') {
        echo "u can enter minimun 5 character and maximun 12 charater for name";
    }
    elseif ($pass <'3' || $pass > '10') {
        echo "u can enter minimun 3 character and maximun 10 charater for last name";
    }
   */
    else{

$log_in = "INSERT INTO `students_login` (`name`,`pass`) VALUES ('$your_email','$your_pass')";
    // echo "entered data is :".$log_in;

    if ($conn -> query($log_in)){
        // echo "done";
        // echo "<br>";
        // echo $log_in;
        session_start();
        $_SESSION["your_pass"]=$your_pass;
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
    <title>login</title>
    

   <link rel="stylesheet" href="./css/login.css">

</head>

<body>

    <div class="main">
 <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="./images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="your_email" id="your_name" placeholder="Your email..."/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

         <!-- JS -->
    <!-- <script src="jquery.min.js"></script>
    <script src="js/main.js"></script> -->
</body>
</html>