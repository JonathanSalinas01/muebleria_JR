<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        h2 { color: #b45309; }
        .info { background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .info p { margin: 5px 0; font-size: 15px; }
        .mensaje { padding: 15px; border-left: 4px solid #b45309; background-color: #fffaf0; }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Tienes un nuevo pedido o cotización!</h2>
        <p>Un cliente ha enviado sus datos a través del formulario web:</p>
        
        <div class="info">
            <p><strong>Nombre del Cliente:</strong> {{ $datos['nombre'] }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $datos['email'] }}</p>
            <p><strong>Teléfono:</strong> {{ $datos['telefono'] }}</p>
            <p><strong>Dirección:</strong> {{ $datos['direccion'] }}</p>
        </div>

        <div class="mensaje">
            <h3>Detalle del mensaje:</h3>
            <p>{{ $datos['mensaje'] }}</p>
        </div>
    </div>
</body>
</html>