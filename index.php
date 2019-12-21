<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html">
<TITLE>Чат на MICRO.ORG.UA</TITLE>
<LINK HREF="style.css" REL="stylesheet" TYPE="text/css">
</HEAD>
<BODY LINK=blue ALINK=blue VLINK=blue>
<SCRIPT LANGUAGE="JavaScript">
<!--
function proverka(f)
{
var login=f.login.value;
var password=f.password.value;
if (login=='')
{
alert('Введите свое имя или ник! Вы не можете зайти в чат без имени.\nMICRO');
f.login.focus();
return false;
}
if (password=='')
{
alert('Введите свой пароль! Это значение не должно оставаться пустым - для защиты вашего же пользователя.\nMICRO');
f.password.focus();
return false;
}
if (login.strtolower()==password.strtolower())
{
alert('По правилам чата логин и пароль должны не совпадать друг с другом!\nMICRO');
return false;
}
}

//-->
</SCRIPT>
<FORM ACTION="chat.php" METHOD="POST" ONSUBMIT="return proverka(this);" NAME="entry">
<TABLE HEIGHT="100%" VALIGN="middle" WIDTH="100%">
<TR>
<TD><TABLE BORDER=1 CELLPADDING=4 CELLSPACING=0 WIDTH="100%" BGCOLOR="#FFFFFF" BORDERCOLOR="#000000" RULES="all" ALIGN="center" HEIGHT="300">
<TR BGCOLOR="lavender" ALIGN="center">
<TH COLSPAN=2 CLASS=title>Добро пожаловать в Чат Микропортала</TH>
</TR>
<TR ALIGN="center">
<TD>Ваше имя (или ник):</TD>
<TD><INPUT TYPE="text" NAME="login" SIZE="40" VALUE=""></TD>
</TR>
<TR ALIGN="center">
<TD>Пароль (должен отличаться от ника):</TD>
<TD><INPUT TYPE="password" NAME="password" SIZE="40" VALUE=""></TD>
</TR>
<TR ALIGN="center">
<TD COLSPAN=2><INPUT TYPE="submit" VALUE="Войти в чат" STYLE="width: 300px;"></TD>
</TR>
<TR ALIGN="center">
<TD COLSPAN=2 BGCOLOR="lavender"><FONT COLOR="#6766f1"><B>Примечание:</B></FONT> если Вы заходите сюда в первый раз, то введите свой пароль, и он будет запомнен системой<BR><BR>
Программирование чата и разработка дизайна &copy; <A HREF="http://www.micro.org.ua">Илья Барков</A></TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>
</FORM>
</HTML>