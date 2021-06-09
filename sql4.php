<?php
$pw=0;
$mysqli = new mysqli("127.0.0.1", "root", "", "test");
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
else
{
	$sql1="create table depart (departno int,departname varchar(45),location varchar(77),primary key(departno))";
	if($mysqli->query($sql1))

	{
		$sql11="INSERT INTO `depart` (`departno`, `departname`, `location`) VALUES ('10', 'admin', 'New York'),('30', 'research', 'hyd'),('40', 'sales', 'chennai'),('50', 'Accounts', 'boston'),('60', 'Accounts', 'berkley'),('70', 'Accounts', 'sa'),('80', 'sales', 'New York'),('90', 'academics', 'New York'),('120', 'administrative ', 'dallas'),('110', 'academic', 'vij'),('201', 'Administrative ', 'chennai'),('101', 'sales', 'bangalore'),('105', 'operations', 'hyd'),('107', 'Accounts', 'san andreas'),('109', 'research', 'New York'),('130', 'Accounts', 'los angels'),('140', 'academics', 'Mumbai'),('170', 'operations', 'boston'),('205', 'Sales', 'Chicago'),('210', 'Research', 'Dallas')";
echo "<br>";
echo "<br>";
	if($mysqli->query($sql11))
		
	{
		echo "Created Table depart";
		$pw=1;
		echo "<br>";
		echo "Inserted into  depart";

		$pw=11;
	
	
	}
				//echo $pw;
	else
	{
		echo "some error1";
		
	}			
echo "<br>";
echo "<br>";
	$sql="create table emp(eno int,ename varchar(55),eage int,salary int,departno int,supereno int,primary key(eno))";
	if($mysqli->query($sql))

	{
		$sql4="INSERT INTO `emp` (`eno`, `ename`, `eage`, `salary`, `departno`, `supereno`) VALUES ('7566','jones','13','8556','10','768'),('7698','blakes','66','7468','20','136'),('7782','clark','55','4685','30','468'),('7788','scott','16','46979','40','74687'),('7839','king','63','74698','50','7461'),('7844','turner','64','7468','60','369'),('7876','adams','77','46874','70','7896'),('7369', 'smith', '69', '876', '130', '791'),('7499', 'allen', '49', '7456', '110', '1791'), ('7521', 'ward', '34', '9874', '90', '746')";
	if($mysqli->query($sql4))
	{
		echo "Inseeted into emp";
		$pw=4;
	
	}
	}				//echo $pw;
	else
	{
		echo "some error44";
		
	}
		echo "Created Table emp";
		$pw=2;
	
	
	}				//echo $pw;
	else
	{
		echo "some error";
		
	}
	echo "<br>";
	echo "<br>";			
$sql3="create table dep(depno int,depname  varchar(11),depage int, eno int)";
	if($mysqli->query($sql3))
	{
		$sql33="INSERT INTO `dep` (`depno`, `depname`, `depage`, `eno`) VALUES ('768','martin','34','7499'),('769','ford','16','7521'),('783','miler','19','7566'),('789','james','44','7698'),('756','adam','36','7782'),('778','kingg','18','7788'),('756','smith','75','7839'),('7458','blake','43','7844'),('791', 'clerk', '17', '7369')";
	if($mysqli->query($sql33))
	{
		echo "Inserted Table dep";
		$pw=3;
	
	
	}				//echo $pw;
	else
	{
		echo "some error3";
		
	}

		echo "Created Table dep";
		$pw=3;
	
	
	}				//echo $pw;
	else
	{
		echo "some error3";
		
	}
	if ($pw==3) {
		echo "done";
					# code...
				}			

}

?>