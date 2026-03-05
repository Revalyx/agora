<?php
# -----------------------------------------------
# Archivo: database.php
# Conexión PDO a MySQL
# En desarrollo: usar localhost y usuario local
# Al subir al VPS: cambiar host, usuario y contraseña
# -----------------------------------------------

# Desarrollo local
$host = "localhost";        #Cambiar por el host real del VPS si es distinto
$db_name = "agora";         #Cambiar si la DB en VPS tiene otro nombre
$username = "usuario";      #Cambiar por el usuario MySQL en VPS
$password = "password";     #Cambiar por la contraseña en VPS

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Conexión exitosa"; #Para pruebas locales, comentar al subir
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>