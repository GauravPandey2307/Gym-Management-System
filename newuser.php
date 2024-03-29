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
-->
</style></head>

<body>
<script language="javascript">
function validate(login)
{
if(login.textfield.value=="")
{
alert("Enter Username");
login.textfield.focus();
return false;
}
if(login.textfield2.value=="")
{
alert("Enter phone no.");
login.textfield2.focus();
return false;
}
if(login.textfield3.value=="")
{
alert("Enter Email ID");
login.textfield3.focus();
return false;
}
if(login.textfield4.value=="")
{
alert("Enter Password");
login.textfield4.focus();
return false;
}
}
</script>
<center>
<form id="login" name="login" method="post" action="adduser.php" onsubmit="return validate(this)">
<table width="1091" height="336" border="0">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" align="left" valign="top"></td>
    <td width="900"><table width="329" height="192" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
      <tr>
        <td colspan="2"><div align="center"><strong>NEW USER LOGIN FORM </strong></div></td>
        </tr>
      <tr>
        <td width="82" height="35"><div align="center"><strong>Name / Username</strong></div></td>
        <td width="216">
          <label></label>
          <div align="center">
            <label>
            <input name="textfield" type="text" size="40" />
            </label>
          </div>
            </td>
      </tr>
      <tr>
        <td><div align="center"><strong>Contact No. </strong></div></td>
        <td><div align="center">
      
            <label>
              <input name="textfield2" type="text" size="40" />
              </label>
      
          </div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>Email ID</strong> </div></td>
        <td><div align="center">
      
            <label>
              <input name="textfield3" type="text" size="40" />
              </label>
      
          </div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>Password</strong></div></td>
        <td><div align="center">
      
            <label>
              <input name="textfield4" type="password" size="40" />
              </label>
               </div></td>
      </tr>
    </table>
      
        <label>
          
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
       <a href=""> New User Sign Up</a> </div>
        </label>
            <p align="center">&nbsp;</p></td>
  </tr>
</table>
<div align="center"></div>
</form>
</center>
</body>
</html>
