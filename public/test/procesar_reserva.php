<?php
// Conexión a MySQL
$mysqli = new mysqli("localhost", "usuario", "contraseña", "traslados");
if ($mysqli->connect_errno) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$tipo_cliente = $_POST['tipo_cliente'];
$aeropuerto_id = $_POST['aeropuerto_id'];
$pasajeros = $_POST['pasajeros'];
$tipo_pago = $_POST['tipo_pago'];

// Variables de salida
$reserva_id = 0;
$precio_total = 0;
$cliente_id = 0;

// Llamada al procedimiento
$stmt = $mysqli->prepare("CALL gestionar_reserva(?, ?, ?, ?, ?, ?, ?, 0, ?, ?, ?)");
$stmt->bind_param("ssssiiiii", $nombre, $correo, $telefono, $tipo_cliente,
    $aeropuerto_id, $pasajeros, $tipo_pago, $reserva_id, $precio_total, $cliente_id);

$stmt->execute();
$stmt->close();

// Mostrar resumen
echo "<div class='container mt-5'>";
echo "<h2>Reserva Confirmada</h2>";
echo "<p><strong>Cliente:</strong> $nombre</p>";
echo "<p><strong>Aeropuerto:</strong> $aeropuerto_id</p>";
echo "<p><strong>Número de pasajeros:</strong> $pasajeros</p>";
echo "<p><strong>Tipo de pago:</strong> $tipo_pago</p>";
echo "<p><strong>Precio total:</strong> $$precio_total</p>";
echo "<p><strong>ID de reserva:</strong> $reserva_id</p>";

// Botón WhatsApp
$mensaje = "Hola $nombre, tu reserva para $pasajeros pasajeros al aeropuerto ID $aeropuerto_id está confirmada. Precio: $$precio_total.";
$mensaje_url = urlencode($mensaje);
echo "<a href='https://wa.me/507XXXXXXXX?text=$mensaje_url' target='_blank'>
        <button class='btn btn-success'>Enviar WhatsApp</button>
      </a>";
echo "</div>";
?>
