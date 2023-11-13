<div class="modal fade" id="staticBackdrop3<?php echo $notas['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <form method="post">
          <div class="mb-3">
            <h5>¿Deseas eliminar esta nota?</h5>
          </div>
          <input type="hidden" name="id" value="<?php echo $notas["id"]; ?>">
          <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger" name="accion" value="eliminar">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>