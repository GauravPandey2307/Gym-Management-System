<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
$pay_id=$_REQUEST["pay_id"];
echo $emp_id;
?>
<?php include("connect.php"); ?>
<?php
mysql_query("delete from payment where id='$pay_id'");
header("location:show_payment_detail.php");
?>
</body>
</html>
