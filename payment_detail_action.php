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
-->
</style></head>

<body>

<table width="1091" height="336" align="center">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top"><?php include ("menu.php"); ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="900"><label>
        </label>
      <p align="center">
          <label></label>
      </p>
        <p align="center">
<?php include("connect.php"); ?>
		<?php 
		$payid=$_POST["textfield"];
		$n=$_POST["textfield2"];
		
		$ad=$_POST["textfield3"];
		$cont=$_POST["textfield4"];
		$eid=$_POST["textfield7"];
		$dat=$_POST["textfield8"];
		$p=$_POST["textfield6"];
		echo $payid.$n;
		mysql_query("insert into payment values('$payid','$n','$ad','$eid','$cont','$p','$dat')");
		
		//$_SESSION["empid"]=$payid;
	header("location:show_payment_detail.php")
		?>
		</p>
		</td>
		</tr>
		</table>
		</body>
		</html>
		
		
		