{{>header}}
<body>
<div class='container bg-gradient-light mt-3 mb-3 p-2 text-center'>
    <form action="/Administrador/login" method="post" class="center">
           <div class="w-75 m-auto">
               <div class="bg-warning">{{mensajeError}}</div>
               <strong>Usuario</strong>
                <input type="text" class="form-control" id="email" placeholder="Ingrese nombre de usuario" name="usuario">
                <strong>Contraseña</strong>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="password">

                <br>
            <button type="submit" class="btn btn-primary w-75">Ingresar</button><br>
        </form><br>
</div>
</body>
</html>