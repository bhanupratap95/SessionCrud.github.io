<?php
session_start();
$srnum=$_GET['srnum'];
$_SESSION['sn']=$srnum;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="editsubmit.php" method="post">
  <input type="text" name="name" value="<?=$_SESSION['srNo'][$srnum]['name']?>">
  <input type="text" name="company" value="<?=$_SESSION['srNo'][$srnum]['company']?>">
  <input type="tel" name="tel" value="<?=$_SESSION['srNo'][$srnum]['tel']?>">
  <input type="submit" name="submit">
</form>
<br>
<br>
<br>
<a href="add.php">Go to List</a>
</body>
</html>