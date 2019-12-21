<?PHP
error_reporting(0);
include("includer.php");
$login=$_GET['login'];
$db=mysql_connect($myserver, $mylogin, $mypassword);
mysql_select_db("micro");
$sql="SELECT * FROM `chat_users` WHERE `login`='".$login."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$id=$row["id"];
$password=$row["password"];
$privat=$row["privat"];
$sql="DELETE FROM `chat_users` WHERE `id`=".$id;
$result=mysql_query($sql);
$sql="INSERT INTO `chat_users` VALUES ('', '".$login."', '".$password."', '".$privat."', '0')";
$result=mysql_query($sql);
Header("Location:index.php");
?>