<!DOCTYPE html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Mis Tareas</h1>
    <ul>
        <?php foreach ($tareas as $t): ?>
            <?= $t['descripcion'] ?>
            <?= $t['completada'] ? "(✔)" : "<a href='index.php?action=completar&id=".$t['id']."'>Completar<a/>" ?>
        <?php endforeach; ?>
    </ul>
    <form method="POST" action="index.php?action=agregar">
        <input type="text" name="description" placeholder="Nueva Tarea" required>
        <button type="submit">Agregar</button>
    </form>
</body>
</html>