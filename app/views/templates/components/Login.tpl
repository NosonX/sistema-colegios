<form class="bg-white col-4 p-4 rounded-1 d-flex flex-column shadow-lg" action="./login" method="post">
    <h1 class="display-6 text-center">Iniciar sesión</h1>
    <hr/>
    <div class="input-group my-3">
            <span class="input-group-text">
                <i class="bi bi-envelope"></i>
            </span>
        <input type="text" class="form-control" placeholder="Correo electrónico" name="email" required>
    </div>

    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-key"></i>
            </span>
        <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
    </div>

    <button type="submit" class="btn btn-primary mb-3 mt-3">Ingresar</button>
    <a href="./recuperar-contrasena" class="btn btn-link mb-3">Recuperar contraseña</a>
</form>