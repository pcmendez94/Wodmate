<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WodMate - Login</title>
  
  <!-- Otros estilos como Bootstrap o externos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  
  <!-- Aquí es donde agregas tu archivo CSS personalizado -->
  <link rel="stylesheet" href="views/dist/css/css-creado.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <main class="flex-fill">
    <section class="auth-section d-flex justify-content-center align-items-center py-5">
      <div class="container mt-5">
        <div class="card p-4 shadow-lg">
          <div class="card-header pb-0 text-center">
            <h3 class="font-weight-bolder">WODMATE</h3>
            
          </div>
          <div class="card-body">
            <form role="form">
            <p>Ingresa tu email y password para iniciar sesión</p>
              <label>Email</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Usuario" name="usuarioIngreso" required>
              </div>
              <label>Password</label>
              <div class="mb-3">
                <input type="password" class="form-control" placeholder="Contraseña" name="passwordIngreso" required>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                <label class="form-check-label" for="rememberMe">Recordarme</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Iniciar Sesión</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p class="mb-4 text-sm">
              ¿No tienes una cuenta?
              <a href="javascript:;" class="text-info font-weight-bold form-check-registrarse">Registrarse</a>
            </p>
          </div>
        </div>
      </div>
      <div class="container m-0">
      <!-- <div class="text-center">
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">Inicio</a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">Entrenamientos</a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">Nutrición</a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">Mi Progreso</a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">Consejos</a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">Blog</a>
</div>
<div class="social-icons text-center">
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4"><span class="text-lg fab fa-youtube"></span></a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4"><span class="text-lg fab fa-twitter"></span></a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4"><span class="text-lg fab fa-instagram"></span></a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4"><span class="text-lg fab fa-facebook"></span></a>
    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4"><span class="text-lg fab fa-strava"></span></a>
</div> -->

        <div class="text-center">
          <p class="mb-0 text-secondary">Copyright © <script>document.write(new Date().getFullYear())</script> Wodmate</p>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
      

  </main>

</body>
</html>
