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
.style5 {
	font-size: 24px;
	color: #FF0033;
}
-->
</style></head>

<body>
<script language="javascript">
function validate(adminlogin)
{
if(adminlogin.textfield.value=="")
{
alert("Enter Username");
adminlogin.textfield.focus();
return false;
}
if(adminlogin.textfield2.value=="")
{
alert("Enter Password");
adminlogin.textfield2.focus();
return false;
}
}
</script>
<center>
<form id="adminlogin" name="adminlogin" method="POST" action="admin_action.php" onsubmit="return validate(this)">
<table width="1091" height="336" align="center">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top">&nbsp;</td>
    <td width="900"><label>
        </label>
      <p align="center">
        <label></label>
        </p>
      <p align="center"><span class="style5">Administrator Login Form</span></p>
      <table width="321" height="105" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
        <tr>
          <td width="80"><div align="center"><strong>Username</strong></div></td>
          <td width="221"><label>
            <input name="textfield" type="text" size="35" />
          </label></td>
        </tr>
        <tr>
          <td><div align="center"><strong>Password</strong></div></td>
          <td><label>
            <input name="textfield2" type="password" size="35" />
          </label></td>
        </tr>
      </table>
      <div align="center">
        <p>
          <label>
          <input type="submit" name="Submit" value="Login" />
          </label>
        </p>
      </div>
      </td>
  </tr>
</table>
</form>
</center>
</body>
</html>
