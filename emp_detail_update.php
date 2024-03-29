<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$emp_id=$_POST["textfield"];
$n=$_POST["textfield2"];
$des=$_POST["textfield3"];
$dep=$_POST["textfield7"];
$emid=$_POST["textfield4"];
$doj=$_POST["textfield5"];
$pn=$_POST["textfield6"];
echo "Emp. ID"." ".$emp_id;
echo "<br>Name"." ".$n;
echo "<br>Designation"." ".$des;
echo "<br>Department"." ".$dep;
echo "<br>Email ID"." ".$emid;
echo "<br>Date of Joining"." ".$doj;
echo "<br>Phone No"." ".$pn;
?>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("gym");
mysql_query("update trainr_detail set name='$n',designation='$des',qualification='$dep',email_id='$emid',date_of_joining='$doj',phone_no='$pn' where trainer_id='$emp_id'");
header("location:show_emp_detail.php");
?>
</body>
</html>
