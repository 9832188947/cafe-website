<html>
<body>
<?php

$fname=$_POST['fn'];
$mname=$_POST['mn'];
$lname=$_POST['ln'];
$phno=$_POST['pn'];
$email=$_POST['em'];
$pass=$_POST['pwd'];
$rpass=$_POST['rpwd'];
$dob=$_POST['db'];
$gndr=$_POST['gn'];
$add=$_POST['add'];
$city=$_POST['ci'];
$dist=$_POST['di'];
$postal=$_POST['po'];


$host="localhost";
$user="root";
$password="";
$db="cafe";

$conn= mysqli_connect($host,$user,$password,$db) or die("Could not connect to database");

$sql="insert into cafe_data values('$fname','$mname','$lname','$phno','$email','$pass','$dob','$gndr','$add','$city','$dist','$postal')";


if($pass==$rpass)
{
	if(mysqli_query($conn,$sql))
	{
	echo "<font color='green'><br>Registration Successfully</font>";
	echo "<font color='green'><br> <a href='cafe_login.php'>Click here</a> to Log in</font>";
	}

	else
	{
	echo "<font color='red'><br>Error Occured</font>";
	}
	
}
else
{
	echo "<font color='red'><br>password not match</font>";
}



?>
</body>
</html>