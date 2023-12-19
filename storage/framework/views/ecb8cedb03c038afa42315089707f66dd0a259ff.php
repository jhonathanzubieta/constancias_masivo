<!-- resources/views/pdf/templates.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
</head>
<body>
    <h1>Información del Usuario <?php echo e($dato->id); ?></h1>
    <p><strong>Nombre:</strong> <?php echo e($dato->name); ?></p>
    <p><strong>Email:</strong> <?php echo e($dato->email); ?></p>
    <!-- Agrega más campos según sea necesario -->
</body>
</html><?php /**PATH C:\laragon\www\correspondencia\resources\views/pdf/templates.blade.php ENDPATH**/ ?>