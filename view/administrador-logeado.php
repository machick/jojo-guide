{{>header}}
<body>
<div class="container bg-gradient-light mt-3 mb-3 p-2 text-center" id="tabla" >    

    <table class="table table-bordered text-center table-responsive-sm">
        <thead >
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Contraseña</th>                        
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>            
            {{#admins}}
            <tr>
            <td>{{id}}</td>
            <td>{{nick}}</td>
            <td>{{password}}</td>
            <td> <button type='button' class='btn btn-danger m-2'>
                            Eliminar
                            </button></td>
            </tr>
            {{/admins}}
        </tbody>
    </table>
    <!-- Button trigger modal -->
    <button type='button' class='btn btn-info'data-toggle="modal" data-target="#agregarModal"> Agregar admin </button>  

<!-- Modal -->
<div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarModalLabel">Agregar admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="agregarAdmin" method="POST">
  <div class="form-group">
    <label for="exampleInputNombre">Ingrese nombre</label>
    <input type="text" name="nombreNuevoAdmin" class="form-control" autocomplete="off" minlength="4" maxlength="24">        
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Ingrese contraseña</label>
    <input type="password" name="passwordNuevoAdmin" class="form-control password" autocomplete="off" minlength="4" maxlength="24">
    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <a href="/logout"><button type='button' class='btn btn-warning'> Cerrar sesion</button></a>
</div>
</body>