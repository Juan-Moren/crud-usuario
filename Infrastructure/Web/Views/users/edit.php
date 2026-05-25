<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow border-0">

            <div class="card-header bg-warning text-dark">

                <h3 class="mb-0">
                    <i class="bi bi-pencil-square"></i>
                    Editar Usuario
                </h3>

            </div>

            <div class="card-body">

                <form method="POST" action="?action=update">

                    <input
                        type="hidden"
                        name="id"
                        value="<?= $user['id'] ?>">

                    <div class="mb-3">

                        <label class="form-label">
                            Nombre
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            value="<?= htmlspecialchars($user['name']) ?>"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Correo Electrónico
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="<?= htmlspecialchars($user['email']) ?>"
                            required>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="mb-3">

                                <label class="form-label">
                                    Rol
                                </label>

                                <select
                                    class="form-select"
                                    name="role">

                                    <option
                                        value="ADMIN"
                                        <?= $user['role'] == 'ADMIN' ? 'selected' : '' ?>>
                                        Administrador
                                    </option>

                                    <option
                                        value="USER"
                                        <?= $user['role'] == 'USER' ? 'selected' : '' ?>>
                                        Usuario
                                    </option>

                                </select>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="mb-3">

                                <label class="form-label">
                                    Estado
                                </label>

                                <select
                                    class="form-select"
                                    name="status">

                                    <option
                                        value="ACTIVE"
                                        <?= $user['status'] == 'ACTIVE' ? 'selected' : '' ?>>
                                        Activo
                                    </option>

                                    <option
                                        value="INACTIVE"
                                        <?= $user['status'] == 'INACTIVE' ? 'selected' : '' ?>>
                                        Inactivo
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>

                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            class="btn btn-success">

                            <i class="bi bi-check-circle"></i>
                            Actualizar

                        </button>

                        <a
                            href="index.php"
                            class="btn btn-secondary">

                            <i class="bi bi-arrow-left"></i>
                            Volver

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>