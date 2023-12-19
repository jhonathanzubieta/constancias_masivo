<!-- resources/views/pdf/template.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
</head>
<body>
    <h1>Información del Usuario</h1>
    <p><strong>Nombre:</strong> <?php echo e($nombre); ?></p>
    <p><strong>Email:</strong> <?php echo e($email); ?></p>
    <!-- Agrega más datos según sea necesario -->
</body>
</html>
<?php /**PATH C:\laragon\www\correspondencia\resources\views/pdf/template.blade.php ENDPATH**/ ?>