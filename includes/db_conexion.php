<?php
// --- CONEXIÓN DE POSTGRESQL PARA SUPABASE (PDO) ---

// 1. CREDENCIALES DE SUPABASE
// (Asegúrate de reemplazar TU_CONTRASEÑA_SECRETA y el host con tus valores)
$host = "db.upgjcnhwp1krqrawykit.supabase.co"; 
$port = "5432";
$dbname = "postgres";            
$user = "postgres";               
$password = "dEw3XlGw4cFXQy1F";

// 2. CONEXIÓN
try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
// La variable $conn contiene la conexión activa a Supabase
?>