<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <header>
        <h1>INSERTE UN MENÚ AQUI.....</h1>
    </header>

    <main>
    
        <div class="container">

        <form class="mt-5" method="POST" action="registrarPersonas.php">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombreUsuario">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellidoUsuario">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                        <input type="number" class="form-control" placeholder="cedula" name="cedulaUsuario">
                </div>
            </div>
            <div class="row mt-3">
                    <div class="col">
                        <textarea class="form-control" rows="3" name="descripcion"></textarea>
                   
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mt-3" name="boton">registrar</button>
        </form>
        
        </div>
    
    </main>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>