<?php
/* Esta función nos va a indicar en que página estamos
y a la que se hace la llamada y así podremos aplicar sus clases particulares */ 
function PaginaActual(){ 
    /* La variable archivo hace una llamada a esta función funcion.php, el SERVER 
    accede a los archivos en los que se hospeda y con PHP_SELF indicamos que se 
    trata del archivo actual */
    $archivo = basename($_SERVER['PHP_SELF']);
    /* Creamos la variable página, con STR_REPLACE reemplazamos una parte de un 
    stream por otra, queremos dejar la parte de .php vacía */
    $pagina = str_replace(".php", "", $archivo); 
    return $pagina; //para que podamos utilizar este valor de pagina
}

// PaginaActual();  pasa a llamarse desde las clases del body en header

?>

