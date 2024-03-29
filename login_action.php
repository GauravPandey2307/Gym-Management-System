<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GYM MANAGEMENT SYSTEM</title>
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
		
		
		echo $u.$p;
		
		
		
		?>
        </p>
        <p align="center">
<?php include("connect.php"); ?>
		<?php
		$result=mysql_query("select * from login where username='$u' and password='$p' and password='$p'");
		$i=0;
		while($row=mysql_fetch_array($result))
		{
		$i++;
		}
		if($i>0)
		{
		session_start();
		$_SESSION["username"]=$u;
		//$_SESSION["emp_id"]=$id;
		header("location:user.php");
		}
		else
		{
		echo "invalid user";
		}																																																			
		?>
		 </p></td></tr>
</table>
<div align="center"></div>

</center>
</body>
</html>
