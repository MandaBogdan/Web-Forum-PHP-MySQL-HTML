<?php
@session_start();
error_reporting(E_ALL & ~E_DEPRECATED);
require_once('banner.php');
require_once('conect.php');
include_once 'conect.php';
mysqli_select_db($msql,'site');
$_SESSION['Q']=1;
$_SESSION['uQ']=1;
$_SESSION['cQ']=1;
echo"
<form action=inser_com.php method=post>
<div class='center'>
<textarea name=coment class='textareas'></textarea>
<input type=submit class='buttonstyle' value=send>
</div>
<BR>
</form>";

echo"<font face=myFirstFont color=#f2f2f2 size=5>
Sorteaza dupa: <BR>
<form action=sort.php method=post>
<input type=radio  name=S value='unu'> nr de like
<input type=radio  name=S value='doi'> nr de dislike
<input type=radio  name=S value='trei'> cel mai vechi <br>
<input type=submit class='buttonstyle' value=sorteaza>
<BR>
</font>
</form>
";

?>