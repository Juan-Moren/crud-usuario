<!DOCTYPE html>
<html>
<head>
    <title>CRUD Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>CRUD Usuarios</h1>

    <form method="POST" action="?action=store">

        <input
            class="form-control mb-2"
            name="name"
            placeholder="Nombre"
            required
        >

        <input
            class="form-control mb-2"
            name="email"
            type="email"
            placeholder="Correo"
            required
        >

        <input
            class="form-control mb-2"
            name="password"
            type="password"
            placeholder="Contraseña"
            required
        >

        <select
            class="form-control mb-3"
            name="role"
        >
            <option value="ADMIN">Administrador</option>
            <option value="USER">Usuario</option>
        </select>

        <button
            class="btn btn-primary"
        >
            Guardar
        </button>

    </form>

    <hr>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Estado</th>
        </tr>

        <?php foreach($users as $user): ?>

        <tr>

            <td><?= $user['id'] ?></td>

            <td><?= htmlspecialchars($user['name']) ?></td>

            <td><?= htmlspecialchars($user['email']) ?></td>

            <td><?= htmlspecialchars($user['role']) ?></td>

            <td><?= htmlspecialchars($user['status']) ?></td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

</body>
</html>