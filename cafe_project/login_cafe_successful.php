<html>
<body>
<?php

$email=$_POST['un'];
$pass=$_POST['pwd'];

$host="localhost";
$user="root";
$password="";
$db="cafe";

$conn= mysqli_connect($host,$user,$password,$db) or die("Could not connect to database");

$sql="select*from cafe_data where email_id='$email'and password='$pass'";

$result=mysqli_query($conn,$sql) or die("could not execute query");

if(mysqli_num_rows($result)>0)
{
//echo "<font color='green'size='5'>Sucess</font>";
header("location:http://localhost/cafe_project/home_page_cafe.html");
}

else
{
echo "<center><font color='red' size='5'>Warning Invalid email id or password</font></center>";
}



?>
</body>
</html>