<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "test");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username= filter_input(INPUT_POST,'username');
$password= filter_input(INPUT_POST,'password');
$rollno= filter_input(INPUT_POST,'rollno');

//mysql_select_db("test",$connect);
$query="INSERT INTO login_details(user_name,pwrd,roll_no) values('$username','$password','$rollno')";
if (condition) {
	# code...
} else {
	# code...
}

$query_run=mysqli_query($mysqli,$query);
while($row = mysqli_fetch_array($query_run))
{
	$pw=$row['user_pwrd'];
	//echo $row['user_pwrd'];
}
echo $pw;


if ($result1 = $mysqli->query("SELECT name from student_details where roll_no='$pw'")
			{
			
			 	while($row1 = mysqli_fetch_array($result1))
				{
					$pw1=$row1['name'];
					//echo $row['user_pwrd'];
				}
				

				echo "$pw1";
			
?>