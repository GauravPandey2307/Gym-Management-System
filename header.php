

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
.style3 {color: #000000; }
.style4 {
	font-size: 24px;
	font-weight: bold;
	color: #330099;
}
a:hover {
	color: #0066FF;
}
a {
	font-weight: bold;
}
a:link {
	color: #99FFFF;
}
-->
</style></head>

<body>
<div align="center">
  <p><img src="images/gym1.jpg" width="385" height="136" /><img src="images/img2.png" width="241" height="139" /><img src="images/imag2.jpg" width="385" height="136" /></p>
  <p class="style4">GYM MANAGEMENT SYSTEM </p>
  <table width="1099" height="44" bordercolor="#000000" bgcolor="#CC6666">
    <tr>
      <td><div align="center" class="style3"><a href="index.php">HOME</a></div></td>
      <td><div align="center" class="style3"><a href="aboutus.php">ABOUT US</a></div></td>
      <td><div align="center" class="style3"><a href="contactus.php">CONTACT US</a></div></td>
      <td><div align="center" class="style3"><a href="feedback.php">FEEDBACK</a></div></td>
	  <td><div align="center" class="style3">
	  <?php
	  session_start();
	  if(isset($_SESSION["username"]))
      {
     echo  "<a href='logout.php'>LOGOUT</a>";
     }
     else
	 {
	 echo  "<a href='login.php'>USER LOGIN</a>";
	 }
	  ?>
	  </div></td>
      <td><div align="center" class="style3">
	  <?php
	  /*session_start();
	  if(isset($_SESSION["adminusername"]))
       {
	   echo "<a href='logout.php'>LOGOUT</a>";
	   }
	   else
	   {
	   echo "<a href='admin_login_form.php'>ADMIN LOGIN</a>";
	   }*/
	  ?>
	  <a href='admin_login_form.php'>ADMIN LOGIN</a>
	  </div></td>
    </tr>
  </table>
</div>
</body>
</html>
