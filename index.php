<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once('banner.php');
require_once('conect.php');
echo"
<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<div class=center>
<img width=1000 height=250 src='vrem.png'><br><br>
<font face=myFirstFont color=#f2f2f2 size=6>
CREEAZA UN CONT  -  SCRIE IDEILE TALE -  LIKE/DISLIKE ALTE OPINII</font><br><br><br>
<div class='buttons'>
<a href=inregistrare.php>CREEAZA UN CONT</a></div><br><br><br>
<div class='buttons'><a href=login.php>LOG IN</a></div><br>
</div>
</div>
"
?>