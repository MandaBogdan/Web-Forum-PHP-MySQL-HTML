<?php
@session_start();
include_once 'conect.php';
error_reporting(E_ALL & ~E_DEPRECATED);
require_once('home.php');
$rezultat=$_SESSION['mod'];
$_SESSION['Q']=0;
if($rezultat != FALSE)
while($rand=mysqli_fetch_array($rezultat))
{
	$k=$rand["id"];
	$k1=$rand["likes"];
	$k2=$rand["dislike"];
	$k3=$rand["username"];
	$k4=$rand["coment"];
	echo "
	<html>
	<head>
	<link rel='stylesheet' href='style.css'>
	</head>
	<div class='right'><font face=myFirstFont color=#f2f2f2><font size=7><b>";
	echo $rand["username"]."</b></font><font size=5>: ".$rand["coment"]."</font><font size=4><hr><BR>like:".$rand["likes"]." dislike:".$rand["dislike"]."</font><BR>";	
	echo "
	<form action=quote.php method=post>
	<input type=hidden name=userQ value='$k3'>
    <input type=hidden name=comentQ value='$k4'>
	<input type=submit class='buttonstyle' value='Quote this message'>
	</form>";
	echo"
	<form action=update.php method=post>
	<input type=hidden name=IDL value='$k'>
	<input type=hidden name=lik value='$k1'>
	<input type=hidden name=dis value='$k2'>
	<font size=5>You like?</font>
	<input type=radio  name=L value=1><font size=5>LIKE</font>
	<input type=radio  name=L value=2><font size=5>DISLIKE</font>
	<input type=submit class='buttonstyle' value='GO'>
	</font>
	</form>
	</div>
	<BR><BR>
	";
}
?>