<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$cn=$_POST["textfield"];
$d=$_POST["textfield2"];
$ed=$_POST["textfield3"];
echo "Circular No."." ".$cn;
echo "<br>Date"." ".$d;
echo "<br>Event Details"." ".$ed;
?>
<?php include("connect.php"); ?>
<?php
mysql_query("update festive_offer set date='$d',offer_detail='$ed' where offer_no='$cn'");
header("location:show_events.php");
?>
</body>
</html>
