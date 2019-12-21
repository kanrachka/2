<HTML>
<HEAD>
<?PHP
error_reporting(0);
include("includer.php");
$login=$_GET['login'];
?>
<META CONTENT="10; URL=users.php?login=<?=$login;?>" HTTP-EQUIV=Refresh>
<SCRIPT LANGUAGE="JavaScript">
<!--
function netsend(dat)
{
window.parent.send.sendform.who.value += dat;
window.parent.send.sendform.message.focus();
}
//-->
</SCRIPT>
</HEAD>
<BODY LINK="blue" ALINK="blue" VLINK="blue" TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 RIGHTMARGIN=0>
<FONT FACE="georgia" SIZE=3 COLOR="black">
<TABLE WIDTH="100%">
<TR>
<TD WIDTH="100%" ALIGN="center">
<FONT COLOR="#008080" FACE="Georgia" SIZE=3><B>Сейчас в чате:</B></FONT>
</TD>
</TR>
<?PHP
$db=mysql_connect($myserver, $mylogin, $mypassword);
mysql_select_db("micro");
$sql="SELECT * FROM `chat_users` WHERE `active`=1";
$result=mysql_query($sql);
$num_results=mysql_num_rows($result);
for ($i=0; $i<$num_results; $i++)
{
$row=mysql_fetch_array($result);
echo "<TR><TD>".($i+1).".&nbsp;&nbsp;<A HREF=\"javascript:netsend('".stripslashes($row['login'])."')\">".stripslashes($row['login'])."</A></TD></TR>";
}
?>
<TR>
<TD WIDTH="100%" ALIGN="center"><BR>
<FONT COLOR="#008080" FACE="Georgia" SIZE=3><B>Рекомендую:</B></FONT>
</TD>
</TR>
<TR>
<TD WIDTH="100%" ALIGN="left"><BR>
1.&nbsp;&nbsp;<A HREF="http://www.micro.org.ua" TARGET=_blank>Микропортал</A><BR>
2.&nbsp;&nbsp;<A HREF="http://www.micro.org.ua/forum/" TARGET=_blank>Наши форумы</A><BR>
3.&nbsp;&nbsp;<A HREF="http://www.micro.org.ua/yslygi/" TARGET=_blank>Услуги</A>
</TD>
</TR>
<TR>
<TD WIDTH="100%" ALIGN="center"><BR>
<FONT COLOR="#008080" FACE="Georgia" SIZE=3><B>Правила чата:</B></FONT>
</TD>
</TR>
<TR>
<TD WIDTH="100%" ALIGN="left"><BR>
<B>1.</B>&nbsp;&nbsp;Admin всегда прав.<BR>
<B>2.</B>&nbsp;&nbsp;Если Admin неправ, смотри пункт 1.<BR>
<B>3.</B>&nbsp;&nbsp;Если уходите - воспользуйтесь кнопкой "Выход"<BR>
<B>4.</B>&nbsp;&nbsp;За флуд и ругательства вы можете быть удалены из чата
</TD>
</TR>
</TABLE>
</BODY>
</FONT>
</HTML>