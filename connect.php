<?php
$username= filter_input(INPUT_POST,'username');
$password= filter_input(INPUT_POST,'password');
$rollno= filter_input(INPUT_POST,'rollno');
$deptname=filter_input(INPUT_POST,'deptname');
$secid=filter_input(INPUT_POST, 'secid');
$mailid=filter_input(INPUT_POST, 'email');
$phno=filter_input(INPUT_POST, 'phno');
$conn= new mysqli("127.0.0.1","root","","test");
//$pw1='AP182110500105';
//$pw11=0;
if (mysqli_connect_error()) {
	die('connect error');
	# code...
	 
} 

else {
	$sql="INSERT INTO login_details(user_name,pwrd,roll_no) values('$username','$password','$rollno')";
	if($conn->query($sql))
	{
		echo "Registration Was Successful";
		echo "<br>";
				$sql1="INSERT INTO student_details(roll_no,name,dept_name,sec_id,ph_no,mail_id) values('$rollno','$username','$deptname','$secid','$phno','$mailid')";
		if ($conn->query($sql1)) {
			echo "Details registerd ";
			# code...
		} else {
			echo "errrrrrrrrrpr";
		}
		


	}
     else {
			echo "no1";
			# code...
		}
	$conn->close();
	# code...
}




?>