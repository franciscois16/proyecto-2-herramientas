<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Intento de login</title>
    </head>
    <body>



<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Inicio de Sesion</h3>
            
            <form action="verificacion.php" method="POST">
              <div class="form-outline mb-4">
                <input type="text" id="typeUserX-2" name="user" class="form-control form-control-lg" />
                <label class="form-label" for="typeUserX-2">Usuario</label>
              </div>
              
              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Contraseña</label>
              </div>
              
             
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" name="remember_password" />
                <label class="form-check-label" for="form1Example3"> Recordar Contraseña </label>
              </div>
              
              <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar Sesion</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>