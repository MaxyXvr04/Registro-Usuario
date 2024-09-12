<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Envío</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Fondo blanco suave */
            color: #333; /* Color de texto */
            margin: 20px;
        }

        h1 {
            color: #2e7d32; /* Verde oscuro */
            border-bottom: 2px solid #2e7d32;
            padding-bottom: 10px;
        }

        p {
            background-color: #e8f5e9; /* Fondo verde claro */
            border: 1px solid #2e7d32; /* Borde verde */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        strong {
            color: #2e7d32; /* Verde */
        }
    </style>
</head>
<body>

<?php

$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$correo = $_GET['correo'];
$notificaciones = isset($_GET['notificaciones']) ? 'Sí' : 'No';
$tipo_cliente = $_GET['tipo_cliente'];
$prioridad = $_GET['prioridad'];
$instrucciones = $_GET['instrucciones'];

echo "<h1>Información del Envío</h1>";
echo "<p><strong>Nombre Completo:</strong> $nombre</p>";
echo "<p><strong>Dirección de Entrega:</strong> $direccion</p>";
echo "<p><strong>Teléfono:</strong> $telefono</p>";
echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
echo "<p><strong>¿Desea recibir notificaciones por correo?:</strong> $notificaciones</p>";
echo "<p><strong>Tipo de Cliente:</strong> $tipo_cliente</p>";
echo "<p><strong>Prioridad de Envío:</strong> $prioridad</p>";
echo "<p><strong>Instrucciones Especiales:</strong> $instrucciones</p>";

?>

</body>
</html>
