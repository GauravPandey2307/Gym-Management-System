<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<center>

<table width="1091" height="336" border="0">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" align="left" valign="top"></td>
    <td width="900"><label>
        </label>
        <p align="center">
		<?php
		$u=$_POST["textfield"];
		$p=$_POST["textfield4"];
		$ph=$_POST["textfield2"];
		$email=$_POST["textfield3"];
		
		echo $u.$p.$id.$email;
		
		
		
		?>
        </p>
        <p align="center">
<?php include("connect.php"); ?>
		<?php
		

mysql_query("insert into login values('$u','$p','$ph','$email')");
		header("location:login.php");



																							
		?>
		 </p></td></tr>
</table>
<div align="center"></div>

</center>
</body>
</html>
