<?php
require_once('conect.php');
include_once 'conect.php';
error_reporting(E_ALL & ~E_DEPRECATED);
@session_start();
$username=$_SESSION['user'];
$coment=$_POST['coment'];
$coment=addslashes($coment);

if($_SESSION['Q']==1)
{
	$U='<div class=quote>';
	$R='</div>';
	$U1=$U.$_SESSION['uQ'].':'.'<BR>'.$_SESSION['cQ'].'<BR>'.$R.$coment;
	$coment=$U1;
}

mysqli_query($msql,"INSERT INTO text VALUES(0,'$coment',0,0,'$username')");
$_SESSION['mod']=mysqli_query($msql,"SELECT * FROM text order by id DESC");
require_once("afisare.php");
?>