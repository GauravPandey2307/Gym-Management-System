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
.style7 {
	font-size: 24px;
	color: #FF0033;
}
-->
</style></head>

<body>

<table width="1091" height="336" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="65" colspan="2"><?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top"><?php include ("menu.php"); ?></td>
    <td width="900">
      <p align="center"><a href="admin_menu.php">Admin Menu</a></p>
      <p align="center" class="style7">Event Details</p>
      <table width="448" height="78" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
	    <tr>
		  <td width="133"><div align="center"><strong>Offer No.</strong></div></td>
		  <td width="133"><div align="center"><strong>Date</strong></div></td>
		  <td width="156"><div align="center"><strong>Offer Details</strong></div></td>
		  <td width="156"><div align="center"><strong>Delete Details</strong></div></td>
		  <td width="156"><div align="center"><strong>Update Details</strong></div></td>
	    </tr><?php include("connect.php"); ?>
		  <?php
		  $result=mysql_query("select  * from festive_offer");
		  while($row=mysql_fetch_array($result))
		  {
		  ?>
		<tr>
		<td height="27"><center><?php echo $row[0]; ?> </center></td>
		 <td><center><?php echo $row[1]; ?> </center></td>
		 <td><center><?php  echo $row[2]; ?> </center></td>
		  <td><center><?php echo "<a href='event_delete.php?cn=$row[0]'>Delete Detail</a>"; ?></center></td>
		  <td><center><?php echo "<a href='event_edit.php?cn=$row[0]'>Update Detail</a>"; ?></center></td>
	    </tr>
		 <?php
		  }
		  ?>
	  </table>
	  </p>
      <p align="center">
        <label></label>
      </p>
    </td>
  </tr>
</table>

</body>
</html>
