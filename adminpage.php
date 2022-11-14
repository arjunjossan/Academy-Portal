

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATABASE DATA </title>
	<link rel="stylesheet" type="text/css" href="./css/adminpage.css">
</head>
<body class="b">

	<img class="l" src="./images/logo.JPEG">
	<img class="l11" src="./images/adminnav.JPG">
    <a class="ll" href="logout.php" > logout </a>

	<p class="l1">Here is your all data which we are fetching from Database </p>
	
	<div class="regis">
    <ul>
    <li>
    <form method="post">
    <input class="l2" type="submit" name="fetch" value="Student Login" />
    </form>
    </li>

    <li>
    <form method="post">
    <input class="l3" type="submit" name="fetch1" value="Student Querries" />
    </form>
    </li>

    <li>
    <form method="post">
    <input class="l4" type="submit" name="fetch2" value="Student Signup" />
    </form>
    </li>

    <li>
    <form method="post">
    <input class="l5" type="submit" name="fetch3" value="Student Registeration" />
    </form>
    </li>
    
    </ul>
    </div>

    <img class="admindatabase" src="./images/admindatabase.JPG">

</body>
</html>



<?php
require('connection.php');
session_start();
$auth = $_SESSION["username"];
if ($auth == Null) {
	header('location: adminlogin.php');
}


if(isset($_POST['fetch']))
{
   
    $response = mysqli_query($conn, 'SELECT * FROM students_login');
    echo "<table border='2' align='center' style='background-color:skyblue; text-align:center; font-size:20px; width:50%; height:550px; padding:10px;  border-collapse: collapse; border-style: doubled; border-radius:20px; '>
<h2  style='color:blue; font-weight:bolder; font-size:35px; width:75%;float:left;'> Students loginid's </h2>
<tr>
<th>name</th>
<th>pass</th>

</tr>";
    while ($fetch = mysqli_fetch_array($response))
    {
        echo "<tr>";
        echo "<td>" . $fetch['name'] . "</td>";
        echo "<td>" . $fetch['pass'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);
}

// --------------------------------------------

if(isset($_POST['fetch1']))
{
   
    $response = mysqli_query($conn, 'SELECT * FROM students_query');
    echo "<table border='2' align='center' style='background-color:skyblue; text-align:center; font-size:20px; width:50%; height:550px; padding:10px;  border-collapse: collapse; border-style: doubled; border-radius:20px; '>
<h2 style='color:blue; font-weight:bolder; font-size:35px; width:75%;float:left; '> Students Querries </h2>
<tr>
<th>name</th>
<th>last</th>
<th>number</th>
<th>query</th>

</tr>";
    while ($fetch = mysqli_fetch_array($response))
    {
        echo "<tr>";
        echo "<td>" . $fetch['name'] . "</td>";
        echo "<td>" . $fetch['last'] . "</td>";
        echo "<td>" . $fetch['number'] . "</td>";
        echo "<td>" . $fetch['query'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);
}

//----------------------------------------------


if(isset($_POST['fetch2']))
{
   
    $response = mysqli_query($conn, 'SELECT * FROM students_signup');
    echo "<table border='2' align='center' style='background-color:skyblue; text-align:center; font-size:20px; width:50%; height:550px; padding:10px;  border-collapse: collapse; border-style: doubled; border-radius:20px; '>
<h2 style='color:blue; font-weight:bolder; font-size:35px; width:75%;float:left;'> Students signup </h2>
<tr>
<th>name</th>
<th>email</th>
<th>pass</th>
<th>re_pass</th>

</tr>";
    while ($fetch = mysqli_fetch_array($response))
    {
        echo "<tr>";
        echo "<td>" . $fetch['name'] . "</td>";
        echo "<td>" . $fetch['email'] . "</td>";
        echo "<td>" . $fetch['pass'] . "</td>";
        echo "<td>" . $fetch['re_pass'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);
}

//--------------------------------------------------------

if(isset($_POST['fetch3']))
{
   
    $response = mysqli_query($conn, 'SELECT * FROM students_registeration');
    echo "<table border='2' align='center' style='background-color:skyblue; text-align:center; font-size:20px; width:50%; height:550px; padding:10px;  border-collapse: collapse; border-style: doubled; border-radius:20px; '>
<h2 style='color:blue; font-weight:bolder; font-size:35px; width:75%;float:left; '> Students registeration </h2>
<tr>
<th>First_Name</th>
<th>Last_name</th>
<th>E-mail</th>
<th>D.O.B.</th>
<th>Number</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Gender</th>
<th>Academic</th>
<th>P.T.E.</th>
<th>File</th>

</tr>";
    while ($fetch = mysqli_fetch_array($response))
    {
        echo "<tr>";
        echo "<td>" . $fetch['first_name'] . "</td>";
        echo "<td>" . $fetch['last_name'] . "</td>";
        echo "<td>" . $fetch['email'] . "</td>";
        echo "<td>" . $fetch['DOB'] . "</td>";
        echo "<td>" . $fetch['number'] . "</td>";
        echo "<td>" . $fetch['address'] . "</td>";
        echo "<td>" . $fetch['city'] . "</td>";
        echo "<td>" . $fetch['state'] . "</td>";
        echo "<td>" . $fetch['zip'] . "</td>";
        echo "<td>" . $fetch['gender'] . "</td>";
        echo "<td>" . $fetch['academic'] . "</td>";
        echo "<td>" . $fetch['pte'] . "</td>";
        echo "<td>" . $fetch['file'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);
}

?>
