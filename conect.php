<?php
error_reporting(E_ALL & ~E_DEPRECATED);
$msql=mysqli_connect("localhost","root","");
if(!$msql)
{echo "Nu s-a realizat conectarea la MySQL "; exit;}

$ok=mysqli_query($msql, "create database site");

$baza=mysqli_select_db($msql,"site");

if (!$baza)
{echo mysql_errno().":".mysql_error(); exit;}

mysqli_query($msql,"CREATE TABLE vizitatori(nume char(200), mail CHAR(200), pass char(200))");
mysqli_query($msql,"CREATE TABLE text(id mediumint not NULL auto_increment ,coment char(200), likes int(30), dislike int(30), username char(200), primary key(id))");
?>