<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar lista</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <textarea type="text" class="form-control" id="titulo" placeholder="Ingresa título" name="titulo"></textarea>
          </div>
          <div class="mb-3">
            <label for="texto" class="form-label">Nota</label>
            <textarea class="form-control" placeholder="Ingresa nota" rows="5" name="texto"></textarea>
          </div>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary me-5" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary me-2" name="accion" value="crear">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>