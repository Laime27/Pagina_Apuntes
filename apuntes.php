<?php
include("crud.php");

if (!isset($_SESSION['usuario'])) {
  header("Location: index.php");
  exit();
}
$pagina = "apuntes";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1893f8b6d1.js" crossorigin="anonymous"></script>
  <title>Apuntes</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid justify-content-end">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav nav-underline me-auto mb-4 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if ($pagina == "apuntes") {
                                  echo "active";
                                } ?>" href="apuntes.php">Home</a>
          </li>
        </ul>
        <a class="btn btn-outline-success " href="<?php echo "cerrar.php" ?>">Cerrar</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">

      <button class="btn btn-dark mt-3 mb-3 botonlista" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar lista</button>

      <?php include("modal/agregarmodal.php") ?>

      <?php
      foreach ($listaNotas as $notas) {
      ?>
        <div class="col-md-6 col-lg-4 col-xxl-2  mb-2">
          <div class="card border-secondary" >
            <div class="card-header bs-body-bg-rgb">
              <h4><?php echo $notas["titulo"] ?><h4>
            </div>
            <div class="card-body">
              <h5><?php echo $notas["texto"] ?><h5>

                  <div class="links-container ">
                    <form method="post">
                      <input type="hidden" name="id" value=" <?php echo $notas["id"]; ?>">
                      <button type="button" class="boton-eliminar" name="accion" value="eliminar" data-bs-toggle="modal" data-bs-target="#staticBackdrop3<?php echo $notas['id']; ?>"><i class="fa-solid fa-trash icono-eliminar"></i></button>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2<?php echo $notas['id']; ?>">Editar</button>
                      <?php include("modal/editarmodal.php") ?>
                      <?php include("modal/eliminarmodal.php") ?>
                    </form>
                  </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>

  <script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
  </script>

</body>

</html>