<?php
session_start();
  $srNo=array_keys($_session['srNo']);
  $srnum=$_GET['srnum'];
  unset($_SESSION['srNo'][$srnum]);
  header('location:add.php');
?>