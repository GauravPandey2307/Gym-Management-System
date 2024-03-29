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
	color: #FF0033;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<script language="javascript">
function validate(feedback)
{
if(feedback.textfield6.value==0)
{
alert("ID No.");
feedback.textfield6.focus();
return false;
}
if(feedback.textfield6.value==0)
{
alert("Enter Name");
feedback.textfield.focus();
return false;
}
if(feedback.textfield2.value==0)
{
alert("Enter E-mail ID");
feedback.textfield2.focus();
return false;
}
if(feedback.textfield3.value==0)
{
alert("Enter Phone no.");
feedback.textfield3.focus();
return false;
}
if(feedback.textfield4.value==0)
{
alert("Enter State");
feedback.textfield4.focus();
return false;
}
if(feedback.textfield5.value==0)
{
alert("Enter Comment");
feedback.textfield5.focus();
return false;
}
}
</script>
<form id="feedback" name="feedback" method="post" action="feedback_action.php" onsubmit="return validate(this)">
<table width="1091" height="403" align="center">
  <tr>
    <td height="65" colspan="2"> <?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td width="169" height="330"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="906">     
      
      <p align="center" class="style2">Feedback Form </p>
      <table width="372" height="275" border="3" align="center" bordercolor="#000000" bgcolor="#9999CC">
        <tr>
          <td><div align="center"><strong>ID No.</strong></div></td>
          <td><div align="center">
            <label>
            <input name="textfield6" type="text" size="42" />
            </label>
          </div></td>
        </tr>
	    <tr>
          <td><div align="center"><strong>Name</strong></div></td>
          <td><div align="center">
            <label>
            <input name="textfield" type="text" size="42" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"> <strong>Email Id </strong></div></td>
          <td><div align="center">
            <label>
            <input name="textfield2" type="text" size="42" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><strong>Phone No.</strong></div></td>
          <td><div align="center">
            <label>
            <input name="textfield3" type="text" size="42" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><strong>State</strong></div></td>
          <td><div align="center">
            <label>
            <input name="textfield4" type="text" size="42" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td height="95"><div align="center">
            <div align="center"><strong>Comment</strong></div>
          </div></td>
          <td><div align="center">
            <label>
            <textarea name="textfield5" cols="38" rows="5"></textarea>
            </label>
          </div></td>
        </tr>
      </table>
      <p align="center">
        <label>
        <input type="submit" name="Submit" value="Submit" />
        </label>
      </p>
      <label>
        </label>
      <p align="center">&nbsp;</p></td>
  </tr>
</table>
</form>
</body>
</html>
