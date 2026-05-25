<!DOCTYPE html>
<html>

<head>
    <title>CRUD Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark shadow">

        <div class="container">

            <a class="navbar-brand" href="#">

                <i class="bi bi-people-fill"></i>

                CRUD Usuarios

            </a>

        </div>

    </nav>

    <div class="container mt-5">

        <h1>CRUD Usuarios</h1>

        <div class="row mb-4">

            <div class="col-md-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h6>Total Usuarios</h6>

                        <h2>
                            <?= $stats['total'] ?>
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h6>Activos</h6>

                        <h2>
                            <?= $stats['active'] ?>
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h6>Inactivos</h6>

                        <h2>
                            <?= $stats['inactive'] ?>
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h6>Administradores</h6>

                        <h2>
                            <?= $stats['admins'] ?>
                        </h2>

                    </div>

                </div>

            </div>

        </div>

        <form method="POST" action="?action=store">

            <input
                class="form-control mb-2"
                name="name"
                placeholder="Nombre"
                required>

            <input
                class="form-control mb-2"
                name="email"
                type="email"
                placeholder="Correo"
                required>

            <input
                class="form-control mb-2"
                name="password"
                type="password"
                placeholder="Contraseña"
                required>

            <select
                class="form-control mb-3"
                name="role">
                <option value="ADMIN">Administrador</option>
                <option value="USER">Usuario</option>
            </select>

            <button
                class="btn btn-primary">
                Guardar
            </button>

        </form>

        <hr>

        <input
            id="searchInput"
            class="form-control mb-3"
            placeholder="Buscar usuario...">

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Estado</th>
            </tr>

            <?php foreach ($users as $user): ?>

                <tr>

                    <td><?= $user['id'] ?></td>

                    <td><?= htmlspecialchars($user['name']) ?></td>

                    <td><?= htmlspecialchars($user['email']) ?></td>

                    <td><?= htmlspecialchars($user['role']) ?></td>

                    <td><?= htmlspecialchars($user['status']) ?></td>

                    <td>

                        <a
                            href="?action=edit&id=<?= $user['id'] ?>"
                            class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <a
                            href="?action=delete&id=<?= $user['id'] ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('¿Eliminar usuario?')">
                            Eliminar
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </table>

    </div>

</body>

</html>