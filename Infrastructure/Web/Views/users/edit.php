<div class="card shadow">

    <div class="card-body">

        <h3>

            Editar Usuario

        </h3>

        <form method="POST"
              action="?action=update">

            <input
                type="hidden"
                name="id"
                value="<?= $user['id'] ?>">

            <div class="mb-3">

                <label>Nombre</label>

                <input
                    class="form-control"
                    name="name"
                    value="<?= htmlspecialchars($user['name']) ?>"
                    required>

            </div>

            <div class="mb-3">

                <label>Email</label>

                <input
                    class="form-control"
                    type="email"
                    name="email"
                    value="<?= htmlspecialchars($user['email']) ?>"
                    required>

            </div>

            <div class="mb-3">

                <label>Rol</label>

                <select
                    class="form-select"
                    name="role">

                    <option value="ADMIN"
                        <?= $user['role']=='ADMIN'?'selected':'' ?>>
                        Administrador
                    </option>

                    <option value="USER"
                        <?= $user['role']=='USER'?'selected':'' ?>>
                        Usuario
                    </option>

                </select>

            </div>

            <button
                class="btn btn-success">

                Actualizar

            </button>

        </form>

    </div>

</div>