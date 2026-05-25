<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="card border-0 shadow">

            <div class="card-header bg-danger text-white">

                <h3 class="mb-0">

                    <i class="bi bi-trash"></i>

                    Confirmar Eliminación

                </h3>

            </div>

            <div class="card-body text-center">

                <div class="mb-4">

                    <i
                        class="bi bi-exclamation-triangle-fill text-danger"
                        style="font-size: 80px;">
                    </i>

                </div>

                <h4>

                    ¿Desea eliminar este usuario?

                </h4>

                <hr>

                <p>

                    <strong>Nombre:</strong>

                    <?= htmlspecialchars($user['name']) ?>

                </p>

                <p>

                    <strong>Correo:</strong>

                    <?= htmlspecialchars($user['email']) ?>

                </p>

                <p>

                    <strong>Rol:</strong>

                    <?= htmlspecialchars($user['role']) ?>

                </p>

                <div class="d-flex justify-content-center gap-2 mt-4">

                    <a
                        href="?action=delete&id=<?= $user['id'] ?>"
                        class="btn btn-danger">

                        <i class="bi bi-trash"></i>

                        Sí, eliminar

                    </a>

                    <a
                        href="index.php"
                        class="btn btn-secondary">

                        <i class="bi bi-x-circle"></i>

                        Cancelar

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>