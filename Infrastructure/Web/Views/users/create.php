<div class="card shadow-sm mb-4">

    <div class="card-body">

        <h4 class="mb-3">

            Registrar Usuario

        </h4>

        <form method="POST"
              action="?action=store">

            <div class="row">

                <div class="col-md-4">

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Nombre"
                        required>

                </div>

                <div class="col-md-4">

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Correo"
                        required>

                </div>

                <div class="col-md-2">

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Contraseña"
                        required>

                </div>

                <div class="col-md-2">

                    <select
                        name="role"
                        class="form-select">

                        <option value="ADMIN">
                            Administrador
                        </option>

                        <option value="USER">
                            Usuario
                        </option>

                    </select>

                </div>

            </div>

            <button
                class="btn btn-primary mt-3">

                Guardar Usuario

            </button>

        </form>

    </div>

</div>