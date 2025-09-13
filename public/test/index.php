<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reserva de Traslado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Formulario de Reserva de Traslado</h2>
    <form action="procesar_reserva.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Cliente</label>
            <select name="tipo_cliente" class="form-select" required>
                <option value="Panameño">Panameño</option>
                <option value="Extranjero">Extranjero</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Aeropuerto</label>
            <select name="aeropuerto_id" class="form-select" required>
                <option value="1">Tocumen</option>
                <option value="2">Panama Pacifico</option>
                <option value="3">Albrook</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Pasajeros</label>
            <input type="number" name="pasajeros" class="form-control" min="1" max="12" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Pago</label>
            <select name="tipo_pago" class="form-select" required>
                <option value="Efectivo">Efectivo</option>
                <option value="Tarjeta">Tarjeta</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Reservar</button>
    </form>
</div>
</body>
</html>
