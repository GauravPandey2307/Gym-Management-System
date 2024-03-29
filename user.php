<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gym Management</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color: #FFFFFF;
}
.style1 {
	color: #FF0033;
	font-size: 24px;
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
    <td width="168" align="left" valign="top"><p>&nbsp;</p>
      <?php include ("user_menu.php"); ?></td>
    <td width="900"><label>
        </label>
        
        <p align="center">
		<?php
		//session_start();
		$u=$_SESSION["username"];
		if($u)
		{
		echo "Welcome"." ".$u;
		}
		else
		{
		header("location:login.php");
		}
		?>
	  </td>
  </tr>
</table>
<div align="center"></div>

</center>
</body>
</html>
