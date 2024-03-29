<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0033;
}
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
</head>

<body>

<table width="1091" height="403" align="center">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="169" height="330"><?php include ("menu.php"); ?></td>
    <td width="906">      <label>        </label>
      <p align="center">
<?php include("connect.php"); ?>
	  <?php
	    $idn=$_POST["textfield6"];
	    $n=$_POST["textfield"];
		$eid=$_POST["textfield2"];
		$p=$_POST["textfield3"];
		$s=$_POST["textfield4"];
		$comm=$_POST["textfield5"];
		mysql_query("insert into feedback values('$idn','$n','$eid','$p','$s','$comm')");
		header("location:show_feedback.php")
	  ?>
	  </p>
      <p align="center">
        <label></label>
      </p>
      <label>
        </label></td>
  </tr>
</table>

</body>
</html>
