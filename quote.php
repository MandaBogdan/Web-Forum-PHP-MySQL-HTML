<?php
error_reporting(E_ALL & ~E_DEPRECATED);
@session_start();
require_once('banner.php');
include_once 'conect.php';
mysqli_select_db($msql,'site');
echo"
<div class=right>
<font face=myFirstFont color=#f2f2f2 size=9>Quote message:<br></font>";
$_SESSION['uQ']=$_POST['userQ'];
$_SESSION['cQ']=$_POST['comentQ'];
$_SESSION['Q']=1;
echo"<font face=myFirstFont color=#f2f2f2 size=5>".$_SESSION['uQ'].": ".$_SESSION['cQ']."<BR></font></div>";

echo"
<form action=inser_com.php method=post>
<div class='center'>
<textarea name=coment class='textareas'></textarea>
<input type=submit class=buttonstyle value=send>
</div>";
?>