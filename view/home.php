{{>header}}
<body>
<nav class="navbar navbar-expand-l bg-light">

    <a class="navbar-brand " href="#" id="imagenA" >
        <img src="recursos/imagenes/logo.jpg" alt="logo" style="width:100px;">
    </a>
    <h1 class=" navbar-brand text-center font-weight-bold" id="titulo" >Jojodex</h1>

    <form class="form-inline" action="../index.php" method="post">
        <input class="form-control mt-1 mr-sm-2" type="text" name="usuario" placeholder="Usuario">
        <input class="form-control mt-1 mr-sm-2" type="password" name="password" placeholder="Password">
        <button class="btn btn-dark mt-1" type="submit">Ingresar</button>
    </form>
</nav>

<div class="container-fluid bg-light pb-2" >
    <form class="form-inline container" method="get" action="../index.php" id="ingreso" >
    <input class="form-control w-50" type="text" placeholder="Ingrese nombre, tipo o stand" name="buscar">
        <input class="btn btn-dark ml-1" type="submit" value="Buscar">
    </form>
</div>



<div class="container mt-3" id="tabla">
    <!-- <div class='container bg-gradient-light mt-3 mb-3 p-2 text-center'><h2><Strong>Personaje no encontrado</Strong></h2></div> -->

    <table class="table table-bordered text-center table-responsive-sm">
        <thead >
        <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Tipo de Stand</th>
            <th>Nombre de Stand</th>
            <th>Id</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td><a href=""></a></td>
                <td><a href=""><img src='recursos/imagenes/$imagen'></a></td>
                <td><img src='recursos/imagenes/$tipo.jpg'</td>
                <td></td>
                <td></td>
            </tr>



        </tbody>
    </table>
</div>

</body>
</html>
