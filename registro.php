
<?php include("crud.php");?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1893f8b6d1.js" crossorigin="anonymous"></script>
    <title>Registro</title>
  
</head>
<body >
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">

              <img src="img/imagen-nota.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />

            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method = "POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Registrarse</span>
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Usuario</label>
                    <input type="text" class="form-control form-control-lg" name="usuario"  value="<?php if(isset($usuarioIngresado))echo $usuarioIngresado?>" required/>
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Contraseña</label>
                      
                      <input type="password" class="form-control form-control-lg" id="contra" name="clave"  value="<?php if(isset($clave))echo $clave?>" required/>
                   
                    
                  </div>
                  <?php if(isset($noexisteUsuario)){
                  echo "<h5 class='usuario-existe'>El usuario ya existe</h5>" ;}
                    else{
                      echo "";
                    }
                  ?>
                  
                  <div class="botones-editar mt-3">
                    <a href="index.php" type="button" class="btn btn-dark btn-lg btn-block" data-bs-dismiss="modal"> Cerrar<a>          
                    <button type="submit"  class="btn btn-primary btn-lg btn-block"  name="accion" value="registrar">Crear</button>
                  </div>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>