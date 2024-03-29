<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gym Management</title>
</head>

<body>
OFFERS DETAILS<BR />
<?php 
$cn=$_REQUEST["cn"];
//echo $cn;
?><?php include("connect.php"); ?>
<?php
$result=mysql_query("select * from festive_offer where offer_no='$cn'");
while($row=mysql_fetch_array($result))
{
$d=$row[1];
$ed=$row[2];
}
?>
<form method="POST" action="event_update.php">
Offer No.:   <input name="textfield"  type="text" value='<?php echo $cn; ?>'/><br /><br />
Date:           <input name="textfield2" type="text"  value='<?php echo $d;?>'/><br /><br />
Offer Details:  <input name="textfield3" type="text" value='<?php echo $ed; ?>' maxlength="200" size="200"/><br /><br />
<input type="submit" value="Done" />
</form>

</body>
</html>
