<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2>Editar Usuario</h2>

    <form method="POST" action="?action=update">

        <input
            type="hidden"
            name="id"
            value="<?= $user['id'] ?>"
        >

        <input
            class="form-control mb-3"
            name="name"
            value="<?= htmlspecialchars($user['name']) ?>"
            required
        >

        <input
            class="form-control mb-3"
            type="email"
            name="email"
            value="<?= htmlspecialchars($user['email']) ?>"
            required
        >

        <select
            class="form-control mb-3"
            name="role"
        >
            <option
                value="ADMIN"
                <?= $user['role']=='ADMIN'?'selected':'' ?>
            >
                Administrador
            </option>

            <option
                value="USER"
                <?= $user['role']=='USER'?'selected':'' ?>
            >
                Usuario
            </option>
        </select>

        <select
            class="form-control mb-3"
            name="status"
        >
            <option
                value="ACTIVE"
                <?= $user['status']=='ACTIVE'?'selected':'' ?>
            >
                Activo
            </option>

            <option
                value="INACTIVE"
                <?= $user['status']=='INACTIVE'?'selected':'' ?>
            >
                Inactivo
            </option>
        </select>

        <button
            class="btn btn-success"
        >
            Actualizar
        </button>

        <a
            href="index.php"
            class="btn btn-secondary"
        >
            Volver
        </a>

    </form>

</div>

</body>
</html>