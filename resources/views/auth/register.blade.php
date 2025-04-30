<!doctype html>
<html lang="en">
<head>
    <title>Registrarse</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Crear una cuenta</h2>

              <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Nombre -->
                <div class="form-outline mb-4">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example1cg">Tu Nombre</label>
                </div>

                <!-- Email -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example3cg">Tu Correo</label>
                </div>

                <!-- Contraseña -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example4cg">Contraseña</label>
                </div>

                <!-- Confirmar Contraseña -->
                <div class="form-outline mb-4">
                  <input type="password" name="password_confirmation" id="form3Example4cdg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example4cdg">Repite tu Contraseña</label>
                </div>

                <!-- Aceptar Términos -->
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="1" name="terms" id="form2Example3cg" required />
                  <label class="form-check-label" for="form2Example3cg">
                    Estoy de acuerdo con todos los <a href="#!" class="text-body"><u>Términos de Servicio</u></a>
                  </label>
                </div>

                <!-- Botón Registrarse -->
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                    Registrarse
                  </button>
                </div>

                <!-- Enlace a Login -->
                <p class="text-center text-muted mt-5 mb-0">
                  ¿Ya tienes una cuenta? 
                  <a href="{{ route('login') }}" class="fw-bold text-body"><u>Iniciar sesión aquí</u></a>
                </p>

              </form>

            </div>
          </div>
        </div>
      </div>
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
