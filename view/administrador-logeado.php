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

            <tr>
                <td></td>
                <td></td>            
                <td></td>
                <td> <button type='button' class='btn btn-danger m-2'>
                            Eliminar
                            </button></td>
            </tr>
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
    <button type='button' class='btn btn-info'> Agregar admin </button>
    <button type='button' class='btn btn-warning'> Cerrar sesion </button>
</div>
</body>