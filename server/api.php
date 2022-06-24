<?php
    // collego il mio database.php
    require_once __DIR__ . '/database.php';
    
    // cambio il Content-Type del response
    header('Content-Type: application/json');

    //  trasformo il database in un file json
    echo json_encode($database);

    echo $database;
?>