<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
$emp_id=$_REQUEST["emp_id"];
echo $emp_id;
?>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("gym");
$result=mysql_query("select * from trainr_detail where trainer_id='$emp_id'");
while($row=mysql_fetch_array($result))
{
$n=$row[1];
$des=$row[2];
$dep=$row[3];
$emid=$row[4];
$doj=$row[5];
$pn=$row[6];
}
?>
<form method="POST" action="emp_detail_update.php">
Emp. ID        <input name="textfield"  type="text" value='<?php echo $emp_id; ?>'/><br />
Name           <input name="textfield2" type="text"  value='<?php echo $n;?>'/><br />
Designation    <input name="textfield3" type="text" value='<?php echo $des; ?>'/><br />
Department     <input name="textfield7" type="text" value='<?php echo $dep; ?>' /><br />
Email ID       <input name="textfield4" type="text" value='<?php echo $emid; ?>'/><br />
Date of Joining<input name="textfield5" type="text" value='<?php echo $doj; ?>' /><br />
Phone No.      <input name="textfield6" type="text"  value='<?php echo $pn; ?>' /><br />
<br />
<input type="submit" value="Done" />
</form>

</body>
</html>
