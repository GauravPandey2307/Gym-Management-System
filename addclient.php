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
		$id=$_POST["textfield"];
		$n=$_POST["textfield2"];
		$add=$_POST["textfield3"];
		$c=$_POST["textfield7"];
		$s=$_POST["textfield4"];
		$cp=$_POST["textfield5"];
		$e=$_POST["textfield6"];
	
		mysql_query("insert into customer values('$id','$n','$add','$c','$s','$cp','$e')");
		//session_start();
		//$_SESSION["empid"]=$empid;
	header("location:add_client.php")
		?>
		</p>
		</td>
		</tr>
		</table>
		</body>
		</html>
		
		
		