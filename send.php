<HTML>
<HEAD>
</HEAD>
<BODY BGCOLOR="#8caae6">
<TABLE WIDTH="100%" HEIGHT="100%" CELLPADDING=0 CELLSPACING=0>
<TR VALIGN="middle">
<TD WIDTH="80%">
<FORM NAME="sendform" ACTION="add.php" METHOD="post">
<?
error_reporting(0);
$login=$_GET['login'];
?>
<INPUT TYPE="hidden" VALUE="<?=$login;?>" NAME="login">
<INPUT TYPE="text" NAME="who" STYLE="width:15%" STYLE="border-width:1px; border-color:black">
<INPUT TYPE="text" NAME="message" STYLE="width:75%" STYLE="border-width:1px; border-color:black"></TD>
<TD WIDTH="15%"><INPUT TYPE="submit" VALUE="Сказать" STYLE="border-width:1px; border-color:black"></TD>
</FORM>
<FORM ACTION="del.php" METHOD="get" NAME="closeform" TARGET="_parent">
<TD WIDTH="20%">
<INPUT TYPE="hidden" NAME="login" VALUE="<?=$login;?>">
&nbsp;<INPUT TYPE="submit" VALUE="Выход" STYLE="border-width:1px; border-color:black">
</TD>
</FORM>
</TR>
</TABLE>
</BODY>
</HTML>