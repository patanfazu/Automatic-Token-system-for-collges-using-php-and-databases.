<html>
<head>
<title>Outpass Management System</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
				html{
	     background: url(1.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
			
		</style>
</head>
<body >
<center>
	<img src="pic.png" alt="image" width="95" height="50"  style= "float: right" style="margin:50px 50px"> </img>
<center><font color=red size='9pt'><i>Automated Outpass Management System</i></font></center>

<form method="post"  action="" class="form-4">
<h1> <font color=blue><u>Login </u></font></h1>
<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="submit" name="submit" value="Continue">
</form>
</center>
<?php
$pw11=0;
global $pw,$p1,$pw1;
$p1=0;
$mysqli = new mysqli("127.0.0.1", "root", "", "test");
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if(!empty($_POST['submit'])) 
{
$username= filter_input(INPUT_POST,'username');
$password= filter_input(INPUT_POST,'password');
if ($result = $mysqli->query("SELECT roll_no from login_details where user_name='$username' and pwrd ='$password'"))
{
$count=mysqli_num_rows($result);
			if ($count>0) {
				

				while($row = mysqli_fetch_array($result))
				{
					$pw=$row['roll_no'];
					$pw11=1;
					$myDate = date('m/d/Y');
			    	//echo $myDate;
				}
				$sql="INSERT INTO remarks(date,roll_no,status) values('$myDate','$pw','pending')";
	if($mysqli->query($sql))
	{
		echo "done1";
	
	
	}				//echo $pw;
	else
	{
		echo "some error";
		
	}				//['user_pwrd'];
				
			    	echo "<p align='center'> <font color=brown font face='arial' size='6pt'><b>Login Successful! </b></font> </p>" ;

			    	
				echo "<br>";
				?>
				<pre align='center'><font color=black size='4pt'> 
					
				
				<?php
				//echo $pw;
				//$name= filter_input(INPUT_POST,'username');
			if ($result = $mysqli->query("SELECT roll_no,name,dept_name,sec_id from student_details where roll_no
				='$pw'"))
			{
			$count=mysqli_num_rows($result);
			if ($count>0)
			 {
			 	while($row = mysqli_fetch_array($result))
				{
					echo "<br>";
					echo "<br>";
					echo "Hii..",$row['name'];
					echo "<br>";
					echo "<br>";
					echo "Just Check Your Details:";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "Roll No:",$row['roll_no'];
					echo "<br>";
					echo "Dept_name:",$row['dept_name'];
					echo "<br>";
					echo "sec_id:",$row['sec_id'];
					$pw1=$row['sec_id'];
					//echo $a;
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					//$sec_id=$row['sec_id'];
					echo "<br>";
					//echo $pw;
					//['user_pwrd'];
				}
			
				//echo "Login Successful\n";
			} 
			else 
			{
				echo"error occured";
			}
			} 


			} else {
				?>

<script>
  alert("Invalid Credentials Please Register If not done Yet ");

</script>

				<?php
				echo "<p align='center'> <font color=yellow font face='arial' size='4pt'><b>Login Unsuccessful! </b></font> </p>";
				?>
				<center>
					<a href="index.html" link=" "><font color=yellow>Registration</font> </a>
					<br>
					<br>

					<a href="index1.html" link=" "><font color=yellow>Forgot Password</font> </a>
					
				</center>
				<?php
				# code...
			}
			
			
			  
			}
		
}
    # code...
      	
     
     if ($pw11==1) {
     	//echo $a;
     	?>

     	<form method="post"  action=""  >
     	<mark>Select Outing time:</mark>
         <select name="timetable">
         	<option value="9-10">9-10</option>
         	<option value="10-11">10-11</option>
         	<option value="11-12">11-12</option>
         	<option value="12-1">12-1</option>
         	<option value="1-2">1-2</option>
         	<option value="2-3">2-3</option>
         	<option value="3-4">3-4</option>
         	<option value="4-5">4-5</option>
         </select>
        
         <br>
         <mark>Please Confirm Your Section:</mark>
         <input type="text" name="sec_id" >	
         <input type="submit" name="submit1" value="Submit">
         <style type="text/css">
         	mark{
         		background-color: lightblue;
         	}
         </style>
        
     </form>


     	<?php


     	# code...
     } else {
     	echo "";
     	# code...
     }

     ?>
    

 
     <?php
    
       //echo "Sec_id:",$sec_id;
       $mysqli = new mysqli("127.0.0.1", "root", "", "test");
      if (mysqli_connect_errno()) {
     printf("Connect failed: %s\n", mysqli_connect_error());
     exit();
       }
     
      if(!empty($_POST['submit1'])) 
		{
			$timetable= filter_input(INPUT_POST,'timetable');

			//echo $pw1;
			$sec_id= filter_input(INPUT_POST,'sec_id');
			//$sec_i1= filter_input(INPUT_POST,'$a');
			//echo "wfegr",$sec_i1;
			//=&$sec_id;
			//echo "hii",$a;
		if ($result = $mysqli->query("SELECT sec_id from timetable_for_sec  where free_time='$timetable' and sec_id='$sec_id'"))
		{echo $pw1;
			$count=mysqli_num_rows($result);
			if ($count>0)
			 {
			 	while($row = mysqli_fetch_array($result))
				{
					$pw3=$row['sec_id'];
					//echo $pw;
					//['user_pwrd'];
				}
				$p1=1;
				echo " <p align='center'><font color=red font face='arial' size='11pt'><i> <mark>Outpass Request Accepted  </mark></i></font></p> " ;
				$myDate = date('m/d/Y');
			    	
				if ($result = $mysqli->query("SELECT roll_no from remarks  where date='$myDate' and status='pending'"))
		{//echo $pw1;
			$count=mysqli_num_rows($result);
			if ($count>0)
			 {
			 	while($row = mysqli_fetch_array($result))
				{
					$pw3=$row['roll_no'];
					echo $pw3;
					//['user_pwrd'];
				}

				$sql="UPDATE `remarks` SET `outing_time` = ('$timetable') WHERE `roll_no` LIKE '$pw3' COLLATE utf8mb4_bin";
				if($mysqli->query($sql))
	{
		echo "done1";
	}
	else
	{
		echo "some error1";
	}
				$sql1="UPDATE `remarks` SET `status` = REPLACE(`status`, 'pending', 'accept') WHERE `roll_no` LIKE '$pw3' COLLATE utf8mb4_bin";
				if($mysqli->query($sql1))
	{
		echo "done1";
	}
	else
	{
		echo "some erro3r";
	}
	$sql1="INSERT INTO std_outpass_details(roll_no,outpass_time,date,remarks) values ('$pw3','$timetable','$myDate','Waiting')";
				if($mysqli->query($sql1))
	{
		echo "done1";
	}
	else
	{
		echo "some erro3r";
	}



		}
	}
				


				
			}
			    else
			      {
			      	$pw11=3;
			      	echo " <p align='center'><font color=red font face='arial' size='11pt'><i> Outpass Request Rejected</i></font></p> " ;
			      	$myDate = date('m/d/Y');
			    	
				if ($result = $mysqli->query("SELECT roll_no from remarks  where date='$myDate' and status='pending'"))
		{//echo $pw1;
			$count=mysqli_num_rows($result);
			if ($count>0)
			 {
			 	while($row = mysqli_fetch_array($result))
				{
					$pw3=$row['roll_no'];
					echo $pw3;
					//['user_pwrd'];
				}

				$sql="UPDATE `remarks` SET `outing_time` = ('$timetable') WHERE `roll_no` LIKE '$pw3' COLLATE utf8mb4_bin";
				if($mysqli->query($sql))
	{
		echo "done1";
	}
	else
	{
		echo "some error1";
	}
				$sql1="UPDATE `remarks` SET `status` = REPLACE(`status`, 'pending', 'reject') WHERE `roll_no` LIKE '$pw3' COLLATE utf8mb4_bin";
				if($mysqli->query($sql1))
	{
		echo "done1";
	}
	else
	{
		echo "some erro3r";
	}


		}
	}
			      	echo " <p align='center'><font color=blue font face='arial' size='5pt'><i>If You still need Outpass click below link</i></font></p> " ;
			      $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("someone@example.com","My subject",$msg);
				
			       }
		
		

        }

}
   ?>
     
</pre>
</font>
<script>
function myFunction() {
  alert("Sorry! Contact IT Dept.");
}
</script>
  </body>
</html>