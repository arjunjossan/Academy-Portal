<?php
require ('connection.php');
if(isset($_POST['submitt']))
{
	$name = $_POST['namee'];
	$last = $_POST['lastt'];
	$number = $_POST['numberr'];
	$query = $_POST['queryy'];

	$insert_data1 = "INSERT INTO `students_query` (`name`,`last`,`number`,`query`) VALUES ('$name','$last','$number','$query')";
    // echo "entered data is :".$insert_data1;

    if ($conn -> query($insert_data1)){
        // echo "done";
        // echo "<br>";
        // echo $insert_data1;

    }
    else{
        echo "fail insertion";
    }

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>-->

	<link rel="stylesheet" type="text/css" href="./css/contact_us.css">
</head>
<body id="voddy">
<div class="logopart">
	<img class="logo" src="./images/logo.JPEG" >
	<div class="name11">
		<h1>New Success Academy</h1>
	</div>
</div>

<div class="buttons">
	<div class="buttons1">
		<a  class="buttons11"  href="home.php">HOME</a>
		<a  class="buttons11"  href="contact_us.php">CONTACT US</a>
		<a  class="buttons11"  href="about_us.php">ABOUT</a>
	</div>
</div>

<div>
	

	 <p class="c1"> Going through any problem u can contact us ?</p>
	 <br>
	 <p class="c2"> Steps to contacting us . . . . </p>
	 <ol class="c3">
	 	<li><a href="#form">fill the form</a></li>
	 	<li><a href="#email">email us</a></li>
	 	<li><a href="#number">contact us through the phone calls</a></li>
	 </ol>

</div>

<div class="ff">
<div>
<form id="form" method="post" class="f">
	Querries..
	<p class="f1">First Name     : <input class="ff" type="text" name="namee"></p>
	<p class="f1">Last Name         : <input class="fg" type="text" name="lastt"></p>
	<p class="f1">enter your number : <input type="text" name="numberr"></p>
	<p class="f1">enter your query here - - -</p><textarea rows="5" cols="50" name="queryy" placeholder="maximum character limit 200 words"></textarea> 
	<p ><input type="submit" class="f2" name="submitt" value="put it!"></p>
</form>
</div>

<div class="img1">
	<img class="img11"src="./images/query.JPG">
</div>
</div>
 
<div>
	<img class="mailpic" src="./images/mailpic.JPG">
</div>

<div class="email1" id="email">
	<br>
<br>
<br>
<br>
	<p class="email11">drop a mail to us with your query</p>
	<ol type="A"  class="emaila">
		<li><a class="email111" href="mailto:name@gmail.com">name1@gmail.com</a></li>
		<li><a class="email111" href="mailto:name@gmail.com">name1@gmail.com</a></li>
		<li><a class="email111" href="mailto:name@gmail.com">name1@gmail.com</a></li>
		<li><a class="email111" href="mailto:name@gmail.com">name1@gmail.com</a></li>
	</ol>
	
</div>

<div id="number" class="calls">
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<p class="call">Call us on given number :- (TOLLFREE)</p>
	<ul>
		<li class="call1">123456789</li>
		<li class="call1">123456789</li>
		<li class="call1">123456789</li>
	</ul>
</div>

<div>
	<img class="numberpic" src="./images/numberpic.JPG">
</div>

</body>
</html>