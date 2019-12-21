<?PHP
error_reporting(0);
$file=fopen("chat.txt","a");
$filehis=fopen("history.txt","a");
for ($i=1; $i<8; $i++)
{
$message=ereg_replace("<".$i.">","<IMG SRC='".$i.".gif'>",$message);
}
# С помощью этих строк мы выделяем из реплики адреса сайтов и e-mail’ы.
$message = eregi_replace('([[:space:]()[{}])(http://.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '\\1<a href="http://\\2" target="_blank">\\2</a>', $message);
$message = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '\\1<a href="http://\\2" target="_blank">\\2</a>', $message);
$message = eregi_replace('([[:space:]()[{}])(http://.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '\\1<a href="\\2" target="_blank">\\2</a>', $message);
$message = eregi_replace("[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*","<a href=\"mailto:\\0\">\\0</a>",$message);

fwrite($file,"\n[".date("H:i:s")."]&nbsp;&nbsp;<B>".$login." => ".$who."</B> : ".$message);
fwrite($filehis,"\n[".date("H:i:s")."]&nbsp;&nbsp;<B>".$login." => ".$who."</B> : ".$message);

header("Location:send.php?login=".$login);
?>