<?php // szkielet MVC na podstawie framework CodeIgniter
        // print_r($_GET); // tablica geta po dodaniu .htaccess
    require_once 'config/routes.php'; // dodanie trasera - bootstrap
    require_once 'config/controlh.php'; // dodać przy tworzeniu głównego konstruktora
    require_once 'config/model.php'; // dodać przy tworzeniu głównego modelu
    
    $router = new traser();
    echo "test";
 ?>

