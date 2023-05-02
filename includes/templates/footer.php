
<script src="js/sweetalert2.all.min.js"></script>
<?php
//$actual recoge el valor de la función PaginaActual que teníamos en funciones.php
    $actual = PaginaActual();
    /* Realizamos la sentencia if con la premisa de si la variable actual
    es igual a crear-cuenta o login muestre mensaje de correcto */
    if($actual === 'crear-cuenta' || $actual === 'login'){
        echo '<script src="js/formulario.js"></script>';
    }
?>
</body>
</html>