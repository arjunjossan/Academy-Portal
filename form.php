<?php 

require ('connection.php');
session_start();
$auth =$_SESSION["email"];
if ($auth==Null) {
    header('location:login.php');
}

if(isset($_POST['submmit']))
{
    $first = $_POST['first'];
    $last = $_POST['last'];
    $mail= $_POST['mail'];
    $dob= $_POST['dob'];
    $number= $_POST['number'];
    $address= $_POST['address'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $zip= $_POST['zip'];
    $gender = $_POST['gender'];
    $academic= $_POST['academic'];
    $pte= $_POST['pte'];
    $file = $_POST['file'];

    if ($first == '' || $last == '' || $mail == '' || $dob == '' || $number == '' || $address == '' || $city == '' || $state == '' || $zip == '' || $gender == '' || $academic == '' || $pte == '' || $file == '') {

        echo "u can't leave empty any box";
        
    }
    
    else
    {    

      $insert_data = "INSERT INTO `students_registeration` (`first_name`,`last_name`,`email`,`DOB`,`number`,`address`,`city`,`state`,`zip`,`gender`,`academic`,`pte`,`file`) VALUES ('$first','$last','$mail','$dob','$number','$address','$city','$state','$zip','$gender','$academic','$pte','$file')";
      // echo "entered data is :".$insert_data;

    if ($conn -> query($insert_data)){
        // echo "done";
        // echo "<br>";
        // echo $insert_data;

    }
    else{
        echo "fail insertion";
    }
}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">



</head>

<body class="body">
    <img class="formlogo" src="./images/logo.JPEG">
    <img class="formnav" src="./images/formnav.JPEG">
    <a class="formlogout" href="logout.php"> Logout </a>
    <img class="reg"  src="./images/reg.JPG">
    <div class="voddy">


    
<p>fill your details to get into the class</p>
<div>
<form method="post">
<label for="first">First Name:</label>   
<input  class="k1" type="text" name="first" placeholder="enter your first name .  .  .">
<br>
<label for="last"> Last Name:</label> 
<input  class="k2" type="text" name="last" placeholder="enter your last name .  .  .">
<br>
<label for="mail">Enter your email id:</label>
<input type="email" name="mail">
<br>
<label for="dob">Date of Birth:</label>
<input  class="k3" type="date" name="dob">
<br>
<label for="number">Phone Number:</label>
<input  class="k4" type="number" name="number">
<br>
<label for="address">Home address:</label>
<input  class="k9" type="text" name="address">
<br>
<label for="city">City:</label>
<input  class="k5" type="text" name="city">
<br>
<label for="State">State:</label>
<input  class="k6" type="text" name="state">
<br>
<label for="zip">Zip:</label>
<input class="k10"  type="number" name="zip">
<br>
<p>Sex :<br>
<label for="gender">Male</label> 
<input  class="k7" type="radio" name="gender" value ="male">
<br>
<label for="gender">Female</label>  
<input type="radio" name="gender" value ="female">
</p>
<p>Select Your Category for Ielts<br>
<label for="academic">Academic</label> 
<input type="checkbox" name="academic" value ="Academic">
<br><label for="pte">PTE</label> 
<input  class="k8" type="checkbox" name="pte" value ="Pte">
</p>
<br>
<label for="file">upload your id's : </label>
<input type="file" name="file">
<br>
<br>
<button type="submit" name="submmit"> Done </button>

</form>

</div>
</div>

</body>
</html>