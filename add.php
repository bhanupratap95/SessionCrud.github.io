<?php
session_start();
if (isset($_POST['submit'])) {
	$name = '';
	$company = '';
	$tel = '';
	if (array_key_exists('name', $_POST)) {
		$name = $_POST['name'];
	}
	if (array_key_exists('company', $_POST)) {
		$company = $_POST['company'];
	}
	if (array_key_exists('tel', $_POST)) {
		$tel = $_POST['tel'];
	}
	if (!array_key_exists('srNo', $_SESSION)) {
		$_SESSION['srNo'] = array();
	}
	$srnum = (count($_SESSION['srNo'])+1);
	$_SESSION['srNo'][$srnum] = array('name' => $name,
										'company' => $company,
										'tel' => $tel
									);
// 	echo "<pre>";
// 	print_r($_SESSION);
// echo "</pre>"; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<thead>
		<tr>
			<th>Sr. No.</th>
			<th>Name</th>
			<th>Company</th>
			<th>Mobile</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($_SESSION['srNo'] as $srnum => $value) {
		?>
		<tr>
			<td><?=$srnum?></td>
			<td><?=$_SESSION['srNo'][$srnum]['name']?></td>
			<td><?=$_SESSION['srNo'][$srnum]['company']?></td>
			<td><?=$_SESSION['srNo'][$srnum]['tel']?></td>
			<td><a href="edit.php?srnum=<?php echo $srnum; ?>">Edit</a> | <a href="delete.php?srnum=<?php echo $srnum; ?>">Delete</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<br>
<br>
<br>
<a href="index.php">Add New Record</a>
</body>
</html>