<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

 $conectar = mysql_connect("localhost","root","") or die ("erro na conexao");
 mysql_select_db ("bancoadm");
?>