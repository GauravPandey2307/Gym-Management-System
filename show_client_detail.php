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
}
.style6 {
	font-size: 24px;
	color: #FF0033;
}
-->
</style></head>

<body>

<table width="1091" height="336"  align="center">
  <tr>
    <td height="65" colspan="2"> <p>&nbsp;</p>
    <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top"><p>&nbsp;</p>
    <?php include ("menu.php"); ?></td>
    <td width="900">
      <p align="center"><a href="admin_menu.php">Admin Menu</a></p>
      <p align="center" class="style6">Customer Details </p>
      <table width="882" height="89" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
	    <tr>
		  <td width="81"><div align="center"><strong>Customer ID</strong></div></td>
		  <td width="92"><div align="center"><strong>Name</strong></div></td>
		  <td width="93"><div align="center"><strong>Address</strong></div></td>
		  <td width="104"><div align="center"><strong>City</strong></div></td>
		  <td width="100"><div align="center"><strong>State</strong></div></td>
		 
		  <td width="86"><div align="center"><strong>Delete Detail</strong>.</div></td>
		  
	    </tr>
		 

<?php include("connect.php"); ?>
 <?php
		  $result=mysql_query("select * from customer");
		  while($row=mysql_fetch_array($result))
		  {
		  ?>
		<tr>
		<td><center><?php echo $row[0]; ?> </center></td>
		 <td><center><?php echo $row[1]; ?> </center></td>
		 <td><center><?php echo $row[2]; ?> </center></td>
         <td><center><?php echo $row[3]; ?> </center></td>
		 <td><center><?php echo $row[4]; ?> </center></td>
		 <td><center><?php echo "<a href='client_detail_delete.php?cust_id=$row[0]'>Delete Detail</a>"; ?></center></td>
		 
	    </tr>
		 <?php
		  }
		  ?>
	  </table>
    </td>
  </tr>
		
</table>


</body>
</html>
