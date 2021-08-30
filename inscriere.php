<?php
error_reporting(E_ALL & ~E_DEPRECATED);
@session_start();
include_once 'conect.php';
require_once("conect.php");
$nume=$_POST['nume'];
$mail=$_POST['mail'];
$pas1=$_POST['pas1'];
$pas2=$_POST['pas2'];

$_SESSION['user']=$nume;
echo"<div class='center'><font face=myFirstFont color=#f2f2f2 size=9>";
if (strcmp($nume,"")==0)
{
require_once("banner.php");
echo "Nu ati scris numele.";
exit;
}

if (!strpos($mail,"@"))
{
require_once("banner.php");
echo "Adresa de e-mail gresita.";
exit;
}

if ($pas1!=$pas2)
{
require_once("banner.php");
echo "Parola gresita.";
exit;
}
echo"</div></font>";
mysqli_query($msql,"INSERT INTO vizitatori VALUES('$nume','$mail','$pas1')");
$rezultat=mysqli_query($msql,"SELECT * FROM text order by id DESC");
$_SESSION['mod']=$rezultat;
require_once("afisare.php");
?>