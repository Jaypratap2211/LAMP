<?php
	if(isset($_POST['submit']))
	{
	 $num1=$_POST['one'];
	 $num2=$_POST['two'];
	 $sum=$num1+$num2;
	 echo $sum;
	}
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form method="post" action="add.php">
			<input type="number" name="one" placeholder="enter the first number"></input>
			<input type="number" name="two" placeholder="enter the second number"></input>
			<input type="submit" name="submit" ></input>
		</form>
	</body>
</html>