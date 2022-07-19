<div class="form-group mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input
            type="text"
            class="form-control"
            name="nombre"
            maxlength="100"
            required
            data-pristine-required-message="Nombre requerido"
    />
</div>

<div class="form-group mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input
            type="text"
            class="form-control"
            name="apellidos"
            maxlength="100"
            required
            data-pristine-required-message="Apellidos requeridos"
    />
</div>

<div class="form-group mb-3">
    <label for="email" class="form-label">Correo electrónico</label>
    <input
            type="text"
            class="form-control"
            name="email"
            maxlength="100"
            required
            data-pristine-required-message="Correo electrónico requerido"
    />
</div>

<div class="form-group mb-3">
    <label for="login" class="form-label">Nombre de Usuario</label>
    <input
            type="text"
            class="form-control"
            name="login"
            maxlength="100"
            required
            data-pristine-required-message="Nombre de Usuario requerido"
    />
</div>

<div class="form-group mb-3">
    <label for="clave" class="form-label">Contraseña</label>
    <input
            type="password"
            class="form-control"
            name="clave"
            minlength="8"
            maxlength="100"
            required
            data-pristine-minlength-message="La clave no debe tener menos de 8 caracteres"
            data-pristine-maxlength-message="La clave no debe tener más de 100 caracteres"
            data-pristine-required-message="Contraseña requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="especialista" class="form-label">Especialista</label>
    <input
            type="number"
            class="form-control"
            name="especialista"
    />
</div>