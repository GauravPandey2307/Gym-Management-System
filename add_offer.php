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
.style4 {
	color: #FF0033;
	font-weight: bold;
	font-size: 24px;
}
.style5 {
	color: #000000;
	font-weight: bold;
}
-->
</style></head>

<body>
<script language="javascript">
function validate(event)
{
if(event.textfield.value==0)
{
alert("Enter Circular No.");
event.textfield.focus();
return false;
}
if(event.textfield2.value==0)
{
alert("Enter Date");
event.textfield2.focus();
return false;
}
if(event.textfield3.value==0)
{
alert("Enter Event Detail");
event.textfield3.focus();
return false;
}
}
</script>
<form id="event" name="offer" method="POST" action="offer_action.php" onsubmit="return validate(this)">
<table width="1091" height="336" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top"><?php include ("menu.php"); ?></td>
    <td width="900"><label>
        </label>
      <p align="center">
          <label></label>
      </p>
      <p align="right">          <a href="logout.php">Logout</a></p>
      <p align="center"><a href="admin_menu.php">Admin</a></p>
      <p align="center"><span class="style4">Add Offers Details     </span></p>
      <table width="309" height="117" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">

        <tr>
          <td><div align="center" class="style5">Offer No. </div></td>
          <td><div align="center">
            <label>
            <input type="text" name="textfield" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td width="137"><div align="center" class="style5">Date</div></td>
          <td width="152"><div align="center">
            <label>
            <input type="text" name="textfield2" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="center" class="style5">Offer Details </div></td>
          <td><div align="center">
            <label>
            <input type="text" name="textfield3" />
            </label>
          </div></td>
        </tr>
      </table>
      <p align="center">
        <label>
        <input type="submit" name="Submit" value="Submit" />
        </label>
      </p>
      <p align="center">&nbsp;</p>
      </td>
  </tr>
</table>
</form>
</body>
</html>
