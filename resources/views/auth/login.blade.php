<!doctype html>
<html lang="en">
<head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Tu hoja de estilos -->
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
</head>
<body>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      
      <!-- Imagen a la izquierda -->
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="{{ asset('assets/FONDO.png') }}" class="img-fluid" alt="Imagen Login">
      </div>

      <!-- Formulario a la derecha -->
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        
        <!-- FORMULARIO INICIO SESIÓN -->
        <form action="{{ route('login') }}" method="POST">
          @csrf

          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">INICIAR SESIÓN</p>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">O</p>
          </div>

          <!-- Email -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Ingrese un correo válido" required />
            <label class="form-label" for="form3Example3">Correo Electrónico</label>
          </div>

          <!-- Password -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña" required />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <!-- Checkbox y Olvido de contraseña -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Mantener sesión iniciada
              </label>
            </div>
            <a href="#!" class="text-body">¿Olvidaste la contraseña?</a>
          </div>

          <!-- Botón Iniciar -->
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar</button>
            
            <p class="small fw-bold mt-2 pt-1 mb-0">
              ¿No tienes cuenta?
              <a href="{{ route('register') }}" class="link-danger">REGISTRARSE</a>
            </p>
          </div>

        </form>
        <!-- FIN DEL FORMULARIO -->

      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <div class="text-white mb-3 mb-md-0">
      © 2025. Todos los derechos reservados - Duarte Developer Company.
    </div>
    <div>
      <a href="#!" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
      <a href="#!" class="text-white me-4"><i class="fab fa-twitter"></i></a>
      <a href="#!" class="text-white me-4"><i class="fab fa-google"></i></a>
      <a href="#!" class="text-white"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</section>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
