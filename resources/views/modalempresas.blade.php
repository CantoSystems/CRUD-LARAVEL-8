<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar nueva empresa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('registrar')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Clave de la empresa: </label>
                  <input type="text" class="form-control" name="clave_empresa" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de la empresa:</label>
                  <input type="text" class="form-control" name="nombre_empresa">
                </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrer</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
      </div>
    </div>
  </div>