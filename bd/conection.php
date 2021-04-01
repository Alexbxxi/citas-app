<?php
// Conexión a la base de datos
define('user', 'root');
define('pass', 'sevenfire1996');
define('host', 'localhost');
define('database', 'consultorio');
 
try {
    $conexion = new PDO("mysql:host=".host.";dbname=".database, user, pass);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
