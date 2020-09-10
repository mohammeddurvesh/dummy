<?php
	if(isset($_POST['submit'])){
	$date=$_POST['date'];
	$time=$_POST['time'];
	$dttim=$date." ".$time;
	//$res=(int)(abs((strtotime("2020-09-10 06:00 PM".' '."GMT-05:00")-time())/60));
	echo $date;
	echo $time;
	echo PHP_EOL;
	$res=(int)(abs((strtotime($dttim.' '."GMT-05:00")-time())/60));
	echo $res;
}

$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("kmdurwesh12@gmail.com","My subject",$msg);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!--<form action="dumdate.php" method="POST">
		<input type="date" name="date">
		<input type="time" name="time">
		<input type="submit" name="submit" value="submit">
	</form>-->

<p>hai..!</p>
</body>
</html>