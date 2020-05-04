<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "user123";
	
	$conn = mysqli_connect($servername , $username , $password , $dbname);
	if(!isset($conn))
	{
		echo "connection failed";
	}
?>
<?php
	if(isset($_POST["sub"]))
	{
		$uname=$_POST["uname"];
		$sql = "select * from user where name = '$uname'" ;
		$result = mysqli_query($sql);
		$row=mysqli_fetch_assoc($result);
		$age = $row["age"];
		$class = $row["class"];
		$div = $row["division"];
		echo $name "<br>";
		echo $age "<br>";
		echo $class "<br>";
		echo $div ;
	}


?>
<html>
	<body>
	<form action="userdetails.php" method="post">
		<input type="text" name="uname" placeholder="Name" >
		<input type = "submit" value="submit" name="sub">
	</body>
</html>