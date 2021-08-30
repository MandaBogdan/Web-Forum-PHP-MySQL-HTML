<?php
echo"
<html>
<head>
<link rel='stylesheet' href='style.css'>
<style>
@font-face {
  font-family: myFirstFont;
  src: url(font2.ttf);
}

.quotes
{
	border-radius: 4px;
	position: center;
	background-image: url('Blec.png');
}

.quote
{
	border-radius: 4px;
	 margin-left: 15px;
	 margin-right: 10px;
	position: center;
	border: 2px solid #f2f2f2;
	 background-image: url('Blec.png');
}

body  {
  background-size: 100% 100%;
  background-image: url('D.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.right {
  display: right;
  margin-left: auto;
  margin-right: auto;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.imag{
	opacity: 1;
	float: center;
	cursor: pointer;
	padding: 3px;
}

.imag:hover{
  opacity: 0.6;
  border-color: #f2f2f2;
  outline: 0;
  box-shadow: inset 0 0 5px rgba(242,242,242,.075), 0 0 8px rgba(242, 242, 242, 0.6);
}

hr.new1 {
  border: 10px #f2f2f2;
  border-radius: 5px;
}

hr.new5 {
  border: none;
  height: 15px;
  box-shadow: 0 5px 5px -5px #f2f2f2;
  width: 90%;
}

.topnav {
  text-align: center;
  overflow: auto;
}

.topnav a {
  font-family: myFirstFont;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  text-decoration: none;
  font-size: 25px;
  padding: 4px 85px;
}

.topnav a:hover {
  text-shadow: 2px 2px 8px #ffffff;
  filter: dropshadow(color=#ffffff, offx=4, offy=4);
  color: rgba(242, 242, 242, 0.5);
}

.topnav a.active {
  background-color: #4CAF50;
  color: rgba(0, 0, 0, 0.5);
}

.cutout{
  background-color: white;
  color: white;
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 50%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
}

.center {
   text-align: center;
}

#element1 {float:left;}
#element2 {float:right;}

.textareas{
  resize: none;
  width: 50%;
  box-sizing: border-box;
  border: 2px solid #f2f2f2;
  border-radius: 4px;
  font-size: 16px;
  background-color: rgba(242, 242, 242, 0.6);
  padding: 12px 20px 12px 40px;
}

.inputs{
  width: 30%;
  box-sizing: border-box;
  border: 2px solid #f2f2f2;
  border-radius: 4px;
  font-size: 16px;
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  padding: 12px 20px 12px 40px;
}

.comment{
  display: table;
  margin: 40 auto;
  border-radius: 4px;
  background-color: #ccc;
  border: 2px solid #ccc;
  padding: 10px;
}

.buttonstyle 
{ 
  font-family: myFirstFont;
  border-radius:6px 6px;
  background-color: transparent; 
  border: 2px solid #f2f2f2;
  color:  #f2f2f2;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 19px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.buttonstyle:hover {
  text-shadow: 4px 4px 10px #000000;
  filter: dropshadow(color=#000000, offx=4, offy=4);
  color: #f2f2f2;
  background-color: #f2f2f2;  
  outline: none;
  border: 2px solid #f2f2f2;
  padding: 16px 32px;
  text-align: center;
  font-size: 22px;
  cursor: pointer;
}

.buttons a{
  font-family: myFirstFont;
  border-radius:6px 6px;
  background-color: transparent; 
  border: 2px solid #f2f2f2;
  color:  #f2f2f2;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  width: 100px;
  font-size: 19px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.buttons a:hover {
  text-shadow: 4px 4px 10px #000000;
  filter: dropshadow(color=#000000, offx=4, offy=4);
  color: #f2f2f2;
  background-color: #f2f2f2;  
  outline: none;
  border: 2px solid #f2f2f2;
  padding: 16px 32px;
  text-align: center;
  font-size: 22px;
  cursor: pointer;
}

</style>
</head>
<body>
<div class='topnav'>
  <a href=index.php >ACASA</a>
  <a href='login.php'>LOG IN</a>
  <a href=index.php><div class='imag'><img src='Logo2.png' width=80 height=90></div></a>
  <a href='inregistrare.php'>SIGN UP</a>
  <a href='about.php'>DESPRE</a>
</div>

<hr class=new5>

</body>
<br>";
?>