<?php
///sortare
@session_start();
error_reporting(E_ALL & ~E_DEPRECATED);
include_once 'conect.php';
$baza=mysqli_select_db($msql,"site");
$rezultat=mysqli_query($msql,"SELECT * FROM text order by id DESC");
if(isset($_POST['S']))
if($_POST['S']=='unu')
	$rezultat=mysqli_query($msql,"SELECT * FROM text order by likes desc");
else
if($_POST['S']=='doi')
	$rezultat=mysqli_query($msql,"SELECT * FROM text order by dislike desc");
else
if($_POST['S']=='trei')
$rezultat=mysqli_query($msql,"SELECT * FROM text ");

if(!$rezultat)
	$rezultat = FALSE;

$_SESSION['mod']=$rezultat;
require_once('afisare.php');

?>