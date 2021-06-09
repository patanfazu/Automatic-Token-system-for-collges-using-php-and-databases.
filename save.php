///////////
<?php
$username= filter_input(INPUT_POST,'username');
$password= filter_input(INPUT_POST,'password');
$conn= new mysqli("127.0.0.1","root","","test");
if (mysqli_connect_error()) {
	die('connect error');
	# code...
} else {
	$sql="INSERT INTO userinfo (user_name,user_pwrd) values ('$username','$password')";
	if($conn->query($sql))
	{
		echo "done";
	}
	else
	{
		echo "error".$sql."<br>";
	}
	$conn->close();
	# code...
}

?>
/////////
<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "test");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username= filter_input(INPUT_POST,'username');
$password= filter_input(INPUT_POST,'password');
//mysql_select_db("test",$connect);
//$query="SELECT * from user_info where user_name='$username' and user_pwrd ='$password' ";
if ($result = $mysqli->query("SELECT * from userinfo where user_name='$username' and user_pwrd ='$password'"))
{
$count=mysqli_num_rows($result);
if ($count>0)
 {
	echo "Login Successful";
} else 
{
	echo"login not";
}
  
}


?>
////////////