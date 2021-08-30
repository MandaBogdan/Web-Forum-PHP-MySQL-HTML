<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once('banner.php');
echo"
<div class=center>
<FORM action=autentificare.php method=post>
<font face=myFirstFont color=#f2f2f2 size=9>Username:<br></font>
<Input name=nume type=text class='inputs'><br>
<font face=myFirstFont color=#f2f2f2 size=9>Mail:<br></font>
<Input name=mail type=text class='inputs'><br>
<font face=myFirstFont color=#f2f2f2 size=9>Parola:<br></font>
<Input name=pas1 type=password class='inputs'><br><br>
<Input type=Submit class='buttonstyle' value=LOGIN>
</form>
</div>
"
?>