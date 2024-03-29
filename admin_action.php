<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GYM MANAGEMENT SYSTEM</title>
</head>

<body>
<?php
$u=$_POST["textfield"];
$p=$_POST["textfield2"]; 
?>
<?php
if($u=="admin" && $p=="admin")
{
session_start();
$_SESSION["adminusername"]=$u;
header("location:admin_menu.php");
}
else
{
echo "invalid user";
}
?>
</body>
</html>
