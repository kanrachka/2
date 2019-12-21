<FRAMESET COLS="*,50,200" border=1 frameborder=1 framespacing=0 ONUNLOAD="window.location.href='del.php?login=<?=$login;?>'">
<FRAMESET ROWS="*,65">
<FRAME NAME='text' SRC='text.php?login=<?=$login;?>'>
<FRAME NAME='send' SRC='send.php?login=<?=$login;?>'>
</FRAMESET>
<FRAME NAME='smiles' SRC='smiles.html'>
<FRAMESET ROWS="55,*">
<FRAME NAME='logo' SRC='logo.html' NORESIZE>
<FRAME NAME='users' SRC='users.php?login=<?=$login;?>'>
</FRAMESET>
</FRAMESET>