<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left:0px;
	margin-top:0px;
}
h2.style3 {
	color: #FF0033;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	color: #FF0033;
}
</style>
</head>

<body>

<table width="1090" height="342" align="center">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="169" height="269"><p>&nbsp;</p>
    <?php include ("menu.php"); ?></td>
    <td width="906">     
      <p align="center"><a href="admin_menu.php">Admin Menu</a></p>
      <p align="center" class="style2">Feedbacks</p>
      <table width="728" height="96" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
	    <tr>
		  <td width="109"><div align="center"><strong>ID No.</strong></div></td>
		  <td width="109"><div align="center"><strong>Name</strong></div></td>
		  <td width="109"><div align="center"><strong>Email ID</strong></div></td>
		  <td width="92"><div align="center"><strong>Phone No.</strong></div></td>
		  <td width="126"><div align="center"><strong>State</strong></div></td>
		  <td width="109"><div align="center"><strong>Comment</strong></div></td>
		   <td width="109"><div align="center"><strong>Delete Detail</strong></div></td>
		   
	    </tr><?php include("connect.php"); ?>
		  <?php
		  $result=mysql_query("select  * from feedback");
		  while($row=mysql_fetch_array($result))
		  {
		  ?>
		<tr>
		<td><center><?php echo $row[0]; ?> </center></td>
		 <td><center><?php echo $row[1]; ?> </center></td>
		 <td><center><?php echo $row[2]; ?> </center></td>
         <td><center><?php echo $row[3]; ?> </center></td>
		 <td><center><?php echo $row[4]; ?> </center></td>
		 <td><center><?php echo $row[5]; ?> </center></td>
		 <td><center><?php echo "<a href='feedback_delete.php?idn=$row[0]'>Delete Detail</a>"; ?></center></td>
	    </tr>
		 <?php
		  }
		  ?>
	  </table>
	  </p>
    <label></label></td>
  </tr>
</table>

</body>
</html>
