<main class="flex-fill">
    <section class="auth-section-registro d-flex justify-content-center align-items-center py-5">
        <div class="container mt-5">
            <div class="card p-4 shadow-lg">
                <div class="card-header pb-0 text-center">
                    <h3 class="font-weight-bolder">Formulario de Registro</h3>
                </div>
                <div class="card-body">
                    <form role="form">
                        <!-- Primera fila: Nickname, Nombres, Apellidos -->
                        <div class="form-group-container">
                            <div class="form-group">
                                <label for="nickname">Nickname</label>
                                <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Ej: Usern@me" required>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Ej: Juan Ignacio" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Perez Cortés" required>
                            </div>
                        </div>

                        <!-- Segunda fila: Fecha de Nacimiento, RUT y Dígito del RUT -->
                        <div class="form-group-container-second-row">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="rut">RUT</label>
                                <div class="d-flex">
                                <input type="text" class="form-control" placeholder="RUT" name="rut" id="rut" maxlength="8" required style="padding-right: 5px;" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                <span class="mx-2 form-group mt-2">-</span>
                                <input type="text" class="form-control" placeholder="" name="digito_rut" id="digito_rut" maxlength="1" required style="max-width: 50px;" oninput="this.value=this.value.replace(/[^0-9Kk]/g,'');">
                                </div>
                            </div>
                        </div>


                        <!-- Tercera fila: Correo Electrónico, Contraseña y Repetir Contraseña -->
                        <div class="form-group-container-third-row">
                            <div class="form-group">
                                <label for="correo_usuario">Correo Electrónico</label>
                                <input type="email" id="correo_usuario" name="correo_usuario" class="form-control" placeholder="Ej:usuario123@correo.com"  required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label for="repeat_password">Repetir Contraseña</label>
                                <input type="password" id="repeat_password" name="repeat_password" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Registrarse</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p class="mb-4 text-sm">
                        ¿Ya tienes una cuenta?
                        <a href="javascript:;" class="text-info font-weight-bold">Iniciar Sesión</a>
                    </p>
                </div>
            </div>
            <div class="text-center pt-5">
          <p class="mb-0 text-secondary">Copyright © <script>document.write(new Date().getFullYear())</script> Wodmate</p>
        </div>
        </div>
    </section>
</main>
