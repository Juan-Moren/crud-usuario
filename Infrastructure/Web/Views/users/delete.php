<div class="card shadow">

    <div class="card-body">

        <h3>

            Confirmar eliminación

        </h3>

        <p>

            ¿Desea eliminar a

            <strong>

                <?= htmlspecialchars($user['name']) ?>

            </strong>

            ?

        </p>

        <a
            href="?action=delete&id=<?= $user['id'] ?>"
            class="btn btn-danger">

            Sí, eliminar

        </a>

        <a
            href="index.php"
            class="btn btn-secondary">

            Cancelar

        </a>

    </div>

</div>