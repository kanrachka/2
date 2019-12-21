<?PHP
error_reporting(0);
include("includer.php");
$login=$_POST['login'];
$password=$_POST['password'];
if (($login!='') && ($password!=''))
{
echo "<TITLE>Чат на MICRO.ORG.UA - ".strtoupper($login)."</TITLE>";
$db=mysql_connect($myserver, $mylogin, $mypassword);
mysql_select_db("micro");
# Проверяем, зарегистрирован ли такой ник в чате
$sql="SELECT * FROM `chat_users` WHERE `login`='".$login."'";
$result=mysql_query($sql);
$num_results=mysql_num_rows($result);
# Если человека с таким ником нет в чате, то регистрируем его и делаем активным
if (($num_results=='') || ($num_results==0))
{
$sql="INSERT INTO `chat_users` VALUES ('', '".$login."','".$password."','','1')";
$result=mysql_query($sql);
include("chat.inc.php");
}
# Иначе проверяем: если он ввел верный пароль - он входит в чат, иначе переходит на главную страницу
else
{
$sql="SELECT * FROM `chat_users` WHERE `login`='".$login."' and `password`='".$password."'";
$result=mysql_query($sql);
$num_results=mysql_num_rows($result);
if (($num_results=='') || ($num_results==0))
{
echo '<SCRIPT LANGUAGE="JavaScript">
<!--
alert(\'Вы ввели неверный пароль. Если Вы - обладатель этого ника, то попробуйте ввести еще раз, а если нет - то зайдите под другим ником.\nMICRO\');
location.href="index.php";
//-->
</SCRIPT>';
}
else
{
$sql="SELECT * FROM `chat_users` WHERE `login`='".$login."'";
$result=mysql_query($sql);
$num_results=mysql_num_rows($result);
$row=mysql_fetch_array($result);
$id=$row["id"];
$sql="DELETE FROM `chat_users` WHERE `id`=".$id;
$result=mysql_query($sql);
$sql="INSERT INTO `chat_users` VALUES ('".$id."', '".$login."','".$password."','','1')";
$result=mysql_query($sql);
include("chat.inc.php");
}
}
}
else
{
Header("Location:index.php");
}
?>