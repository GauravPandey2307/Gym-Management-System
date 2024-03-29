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
}
.style5 {
	color: #FF0033;
	font-weight: bold;
	font-size: 24px;
}
-->
</style></head>

<body>

<table width="1091" height="336" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="65" colspan="2"><?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top"><p>&nbsp;</p>
    </td>
    <td width="900">
     <?php
	  session_unset();
	 // $_SESSION["username"]="";
	  //$_SESSION["emp_id"]="";
	  //$_SESSION["adminusername"]="";
	  header("location:index.php");
      
     ?>
      <p align="center">
        <label></label>
      </p>
    </td>
  </tr>
</table>

</body>
</html>
