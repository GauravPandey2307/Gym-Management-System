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
.style3 {
	font-size: 24px;
	color: #FF0033;
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
    <td width="168" align="left" valign="top"><p>
      <?php include ("user_menu.php"); ?>
      </p>
      </td>
    <td width="900"><p align="center" class="style3">Registered Users</p>
	<p align="center">
	  <?php 
//session_start();
//$u=$_SESSION["username"];
//echo "Welcome"." ".$u
?>
	  </p>
	<table width="558" height="113" border="3" align="center" bordercolor="#000000" bgcolor="#FF9999">
		<tr>
	
		<td width="40"><div align="center"><strong>Name</strong></div></td>
		<td width="62"><div align="center"><strong>Password</strong></div></td>
	    <td width="106"><div align="center"><strong>Phone No.</strong></div></td>
        <td width="75"><div align="center"><strong>Email Id</strong></div></td>
		</tr><?php include("connect.php"); ?>
        <?php
			
		$result=mysql_query("select * from login");
		 while($row=mysql_fetch_array($result))
		{
		?>
		<tr>
		<td><center><?php echo $row[0]; ?> </center></td>
		 <td><center><?php echo $row[1]; ?> </center></td>
		 <td><center><?php echo $row[2]; ?> </center></td>
		 <td><center><?php echo $row[3]; ?> </center></td>
		
		 </tr>
		 <?php
		 }
		 ?>
	    </table>
</td>
  </tr>
</table>
</center>
</body>
</html>
