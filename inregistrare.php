<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once('banner.php');
echo"
<div class='center'>
<FORM action=inscriere.php method=post>
<font face=myFirstFont color=#f2f2f2 size=9>nume</font><br>
<Input name=nume class='inputs' type=text ><br>
<font face=myFirstFont color=#f2f2f2 size=9>e-mail</font><br>
<Input name=mail class='inputs' type=text><br>
<font face=myFirstFont color=#f2f2f2 size=9>Parola</font><br>
<Input name=pas1 class='inputs' type=password><br>
<font face=myFirstFont color=#f2f2f2 size=9>Verificare parola</font><br>
<Input name=pas2 class='inputs' type=password><br><br>
<Input type=Submit class='buttonstyle' value=submit>
</form>
</div>
"
?>