<div class="modal fade" id="staticBackdrop2<?php echo $notas['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="editar-contenedor" id="contenedor-editar">
          <form method="post">
            <div class="titulo-editar mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control fondo-text" name="titulo" id="titulo" value="<?php echo $notas["titulo"] ?>">
            </div>
            <div class="texto-editar mb-3">
              <label for="texto" class="form-label">Nota</label>
              <textarea class="form-control fondo-text" rows="5" name="texto"><?php echo $notas["texto"] ?></textarea>
            </div>
            <div class="botones-editar text-center">
              <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" name="accion" value="modificar">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>