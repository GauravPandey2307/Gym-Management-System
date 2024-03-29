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
.style2 {
	font-size: 24px;
	color: #FF0033;
}
-->
</style></head>

<body>
<script language="javascript">
function validate(empdetail)
{
if(emp_detail.textfield.value=="")
{
alert("Enter Client ID");
emp_detail.textfield.focus();
return false;
}
if(emp_detail.textfield2.value=="")
{
alert("Enter Company Name");
emp_detail.textfield2.focus();
return false;
}
if(emp_detail.textfield8.value=="")
{
alert("Enter Website");
emp_detail.textfield8.focus();
return false;
}
if(emp_detail.textfield7.value=="")
{
alert("Enter City");
emp_detail.textfield7.focus();
return false;
}
if(emp_detail.textfield4.value=="")
{
alert("Enter State");
emp_detail.textfield4.focus();
return false;
}
if(emp_detail.textfield5.value=="")
{
alert("Enter Contact Person");
emp_detail.textfield5.focus();
return false;
}
if(emp_detail.textfield6.value=="")
{
alert("Enter Email ID");
emp_detail.textfield6.focus();
return false;
}
}
</script>
<form id="emp_detail" name="client_detail" method="POST" action="addclient.php" onsubmit="return validate(this)">
<table width="1091" height="336" align="center">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="168" valign="top"><p>&nbsp;
      </p>
      <p>
        <?php include ("menu.php"); ?>
        </p>
      </td>
    <td width="900" bgcolor="#FFFFFF"><label>
        </label>
        <p align="center"><a href="admin_menu.php">Admin Menu</a></p>
        <p align="center" class="style2">CUSTOMER DETAILS</p>
        <table width="340" height="290" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
          
          <tr>
            <td width="135" height="36"><div align="center">Customer ID</div></td>
            <td width="187"><label>
            <input name="textfield" type="text" size="30" />
            </label></td>
          </tr>
          <tr>
            <td><div align="center">Customer Name</div></td>
            <td><label>
              <input name="textfield2" type="text" size="30" />
            </label></td>
          </tr>
          <tr>
            <td><div align="center">Address</div></td>
            <td><label>
            <input name="textfield3" type="text" size="30" />
            </label></td>
          </tr>
          <tr>
            <td><div align="center">City</div></td>
            <td><label></label>
            <div align="center">
              <label>
              <input name="textfield7" type="text" size="30" />
              </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">State </div></td>
            <td><label>
              <input name="textfield4" type="text" size="30" />
            </label></td>
          </tr>
          <tr>
            <td><div align="center">Contact No. </div></td>
            <td><label>
              <input name="textfield5" type="text" size="30" />
            </label></td>
          </tr>
          <tr>
            <td><div align="center">Email ID </div></td>
            <td><label>
              <input name="textfield6" type="text" size="30" />
            </label></td>
          </tr>


        </table>
        <p align="center">
          <label>
          <input type="submit" name="Submit" value="Submit" />
          </label>
        </p>
      </td></tr>
</table>
</form>
</body>
</html>
