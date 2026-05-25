<div class="table-box">

    <h4 class="mb-3">

        Lista de Usuarios

    </h4>

    <table class="table table-hover">

        <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>

            </tr>

        </thead>

        <tbody>

            <?php foreach($users as $user): ?>

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
                            href="?action=confirm-delete&id=<?= $user['id'] ?>"
                            class="btn btn-danger btn-sm">

                            Eliminar

                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>