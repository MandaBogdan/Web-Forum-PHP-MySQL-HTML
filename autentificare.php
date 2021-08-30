<?php
require_once('banner.php');
error_reporting(E_ALL & ~E_DEPRECATED);
@session_start();
include_once 'conect.php';
if(!$msql)
{echo "Nu s-a realizat conectarea la MySQL "; exit;}

$baza=mysqli_select_db($msql,"site");

$numea=$_POST['nume'];
$maila=$_POST['mail'];
$pasa=$_POST['pas1'];

$cerere="SELECT nume FROM vizitatori WHERE mail='$maila' AND pass='$pasa'";
$rezultat=mysqli_query($msql, $cerere);
$rand=mysqli_fetch_array($rezultat);

if ($rand["nume"]!=$numea)
{
echo '<font face=myFirstFont color=#f2f2f2 size=9><div class=center>';
echo "Conectare esuata.".'</font></div>';	
}
else 
{
	$_SESSION['user']=$rand["nume"];
	$rezultat=mysqli_query($msql,"SELECT * FROM text order by id DESC");
	$_SESSION['mod']=$rezultat;
	require_once("afisare.php"); 
}
?>