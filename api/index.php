<?php
# -----------------------------------------------
# Archivo: index.php
# Punto de entrada de la API
# -----------------------------------------------

header("Content-Type: application/json");

require 'config/database.php';

# -----------------------------
# Control de desarrollo local
# -----------------------------
# Para desarrollo local se permite todo
# En VPS, podría usar un token o control de IP
$dev_mode = true; #Cambiar a false en producción

# Acción enviada por GET o POST
$action = $_GET['action'] ?? '';

if ($action == 'test') {
    # Endpoint de prueba para verificar que la API funciona
    echo json_encode(["status" => "ok", "message" => "API Agora funcionando"]);
} else {
    echo json_encode(["status" => "error", "message" => "Acción no válida"]);
}

# -----------------------------
# NOTAS PARA VPS:
# -----------------------------
# 1. Cambiar $dev_mode a false
# 2. Agregar control de acceso (token o IP)
# 3. Configurar HTTPS
# 4. Configurar logs si se desea
?>