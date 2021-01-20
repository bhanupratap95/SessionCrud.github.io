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
		$_SESSION[srNo] = array();
	}

	$srnum = $_SESSION['sn'];
	echo $srnum;

	$oldrow=$_SESSION['srNo'][$srnum];

	$newrow = array('name'=>$name, 'company'=>$company, 'tel'=>$tel);
	$edited=array_replace($oldrow, $newrow);
	$_SESSION['srNo'][$srnum]=$edited;
	header('location:add.php');
}
?>