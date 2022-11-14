<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./css/home.css">
	<!-- <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script> -->
</head>

<body>
	<div class="top_image">
		<img src="https://englishtribuneimages.blob.core.windows.net/gallary-content/2022/8/2022_8$largeimg_112870773.jpg"
			alt="image">
	</div>
	<div class="navbar">
		<img class="logo" src="./images/logo.jpeg" alt="logo">
		<nav class="nav">
			<ul class="left">

				<li><a href="home.php">Home</a></li>
				<li><a href="about_us.php">About</a></li>
				<li><a href="contact_us.php">Contact</a></li>
			</ul>
			<ul class="right">
				<li><a href="adminlogin.php">Admin_login</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
	</div>

	<section class="main">
		<div class="main1" style="background-image: url('./images/side.png');">
			<ol>
				<li><a href="login.php">Apply from here</a> </li>
				<li><a href="#">Trainer details</a> </li>
				<li><a href="https://www.ieltsidpindia.com/registration/registration?_ga=2.125687491.819941685.1657249495-1093898280.1633663440">Book exam date</a> </li>
				<li><a href="https://ielts.idp.com/results/check-your-result">Check your result</a> </li>
				<li><a href="calculator.php">Calculator</a> </li>
				<li><a href="tictactoe.php">Tictactoe game</a> </li>
				<li><a href="#">Contents</a> </li>
				<li><a href="#">Band Scored</a> </li>
			</ol>
		</div>

		<div class="main2">
			<img class="mySlides" src="./images/l11.JPG">
			<img class="mySlides" src="./images/l3.JPG">
			<img class="mySlides" src="./images/l44.PNG">
		</div>
		<div class="main3">
			<!-- <script async
				src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7726273936925057"
				crossorigin="anonymous"></script>
			 add 
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7726273936925057"
				data-ad-slot="3983001755" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script> -->
			<center>
				<ol>
					<li>I</li>
					<li>E</li>
					<li>L</li>
					<li>T</li>
					<li>S</li>
				</ol>
			</center>


			<!-- <amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-7726273936925057"
     data-ad-slot="3983001755"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad> -->
		</div>
	</section>
	<!-- <br> -->
	<footer>
		<center>
			<h1>New Success Academy</h1>
			<div class="social">
				<a href="https://api.whatsapp.com/send?phone=918737067071&text=Hello Sir"><img style="width:40px;height:40px;margin-left: 18px" src="./images/Whatsapp.PNG"></a>
				<a href="http://instagram.com/_u/arjun__jossan/"><img style="width:40px;height:40px;" src="./images/insta_logo.PNG"></a>
				<a href="http://www.facebook.com/profile.php?id=100026847771882"><img style="width:40px;height:40px;" src="./images/face_book.PNG"></a>
			</div>
			<div>
				<ul style="list-style-type:none">
					<li style="color:green;font-weight: bolder;">Address: Khutar road Banda, Shahjahanpur</li>
					<li style="color:green;font-weight: bolder;">Uttar pradesh, 242042</li>
					<li style="color:green;font-weight: bolder;">info.newsuccessacademy.co.in</li>
					<li style="margin: 0px 200px;"><marquee directions= "right" width="100%" style=" color: rgb(248, 248, 248);">What is IELTS? The International English Language Test (IELTS) is designed to help you work, study or migrate to a country where English is the native language. This includes countries such as Australia, Canada, New Zealand, the UK and USA.</marquee></li>
				  </ul>
			</div>
		</center>

	</footer>

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) { myIndex = 1 }
			x[myIndex - 1].style.display = "block";
			setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>

</body>

</html>