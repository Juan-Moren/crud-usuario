<?php require_once __DIR__ . '/layouts/header.php'; ?>

<?php if(isset($_GET['success'])): ?>

<div class="alert alert-success">

    Operación realizada correctamente.

</div>

<?php endif; ?>

<div class="row mb-4">

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body text-center">

                <h5>Total Usuarios</h5>

                <h2><?= $stats['total'] ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body text-center">

                <h5>Activos</h5>

                <h2><?= $stats['active'] ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body text-center">

                <h5>Inactivos</h5>

                <h2><?= $stats['inactive'] ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow">

            <div class="card-body text-center">

                <h5>Administradores</h5>

                <h2><?= $stats['admins'] ?></h2>

            </div>

        </div>

    </div>

</div>

<?php require_once __DIR__ . '/users/create.php'; ?>

<?php require_once __DIR__ . '/users/index.php'; ?>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>