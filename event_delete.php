<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php include("connect.php"); ?>
<?php 
$cn=$_REQUEST["cn"];
echo $cn;
?>
<?php
mysql_query("delete from festive_offer where offer_no='$cn'");
header("location:show_events.php");
?>
</body>
</html>
