<?php
include("conexion.php");
$consulta = "SELECT * from marcas";
$resultado = mysqli_query($conexion, $consulta);
$id_recibido = $_GET["id_enviado"];
while(

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Clase PHP</title>
</head>

<body>
    <div class="container p-5">
        <form action="guardar.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Origen</label>
                <select class="form-select" aria-label="Default select example" name="origen">


                    <option value="Japón">Japón</option>
                    <option value="China">China</option>
                    <option value="Francia">Francia</option>
                    <option value="EEUU">EEUU</option>
                    <option value="Otros">Otros</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Logo</label>

                <input type="text" class="form-control" id="exampleFormControlInput1" name="logo" placeholder="">

            </div>
            <button type="submit" class="btn btn-success">Editar</button>
        </form>


    </div>
    </div>
    </div>
    </div>

   

</body>

</html>