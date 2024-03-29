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
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #0C3CAC;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<script language="javascript">
function validate(feedback)
{
if(feedback.textfield.value==0)
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
    <td align="left" valign="top" bgcolor="#FF9999">
     
      <div align="center">
        <p align="center" class="style1">About Us</p>
        <p align="left" class="style1">Gym  Management System:  </p>
        <p align="left">&nbsp;</p>
        <p align="left" class="style1">Aim:</p>
        <div align="left">It saves alot of time and efforts because the owner does not need to move from  one branch to another forgetting payment.        </div>
        <p align="left">Providingaregistrationsystemforconsumerstomaintainandaccesstheirstatuson  thesite.Theycandowhattheywantbysimplyenteringtheiruseridandpassword. </p>
        
        <p align="left">Providingemailandattachmentoffileswithgymmanagementsystem  for information convey.</p>
        <p align="left">Providingsecuredenvironmentforsecureddataaccesswherevernecessary. <br />
         <p align="left">Suggestionscanalsobegivenintheweb-site. </p>
        <p align="left">Savesalotoftimebecauseitwilleliminatethemanualeffortsrequiredtocollectthe  data intodatabase. 
             <p align="left">Thisprojectismadeasuserfriendlyaspossiblesothatanyonecanuseitwithlittle  knowledge ofcomputer. </li>
           <p align="left"> Theoverallobjectiveistodevelopalmostfreeandatomizedgym managementsystem whichbringthegym owner and different branches more closely to each  other so that they can gain what they deserve.</td>
  </tr>
</table>
</form>
</body>
</html>
