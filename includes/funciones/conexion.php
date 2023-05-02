<?php
$bd = new mysqli('localhost', 'root', '', 'taskteam');
/* Para comprobar en primera instancia la conexión 
echo "<pre>";
var_dump($bd);
echo "</pre>"; */
if ($bd->connect_error) {
    echo $bd->connect_error;
}
$bd->set_charset('utf8');
?>