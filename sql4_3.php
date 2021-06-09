<?php
$pw=0;
$mysqli = new mysqli("127.0.0.1", "root", "", "test");
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
else
{
	if ($result = $mysqli->query("SELECT DISTINCT depart.location,depart.departname from depart,emp where emp.salary IN (SELECT MIN(emp.salary) from emp group by departno)"))
{
$count=mysqli_num_rows($result);
			if ($count>0) {
				

				while($row = mysqli_fetch_array($result))
				{
					//echo "dne";
					echo $row['location'],"  ",$row['departname'];
					//echo "<br>";
					//echo $row['departname'];
					echo "<br>";
					//$pw11=1;
					//$myDate = date('m/d/Y');
			    	//echo $pw;
				}

}
}
}

?>