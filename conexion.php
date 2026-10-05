<?php
$host     = 'localhost';
$dbname   = 'restaurante'; // Nombre de tu base de datos
$user     = 'postgres';               // Tu usuario de BD (ej. postgres, root)
$password = 'israel12345';         // Tu contraseña
$port     = '5432';                   // Puerto (5432 para PostgreSQL, 3306 para MySQL)

try {
    // Configuración DSN para PostgreSQL (si usas MySQL cambia 'pgsql:' por 'mysql:')
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    
    // Crear la instancia de PDO
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Manejo de errores mediante excepciones
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devolver arreglos asociativos por defecto
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Usar consultas preparadas nativas
    ]);

} catch (PDOException $e) {
    // Detener la ejecución si la conexión falla
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>

