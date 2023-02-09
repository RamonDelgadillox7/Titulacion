    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <title>Siniestro</title>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Content here -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
                <div class="container-md">
                    <a class="navbar-brand" href="#">Formulario de siniestros de ciclistas</a>
                </div>
            </nav>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> datos requeridos<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('siniestro.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="input-group mb-5">
                    <span class="input-group-text">Fecha y Hora</span>
                    <input type="text" aria-label="First name"  id="fecha" name="fecha" class="form-control">
                    <input type="text" aria-label="Last name" id="hora" name="hora" class="form-control">
                </div>
                <div class="input-group mb-5">
                    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle">
                    <span class="input-group-text">y</span>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                </div>
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">Tipo de vialidad</span>
                    <input type="text" class="form-control" id="tipo_vialidad" name="tipo_vialidad" placeholder="Ingrese el tipo de vialidad" aria-label="Username" aria-describedby="basic-addon1">
                </div>  
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">Colonia</span>
                    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Ingrese la colonia" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">Municipio</span>
                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Ingrese el municipio" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">Tipo de Vehiculo</span>
                    <input type="text" class="form-control" id="tipo_vehiculo" name="tipo_vehiculo" placeholder="Ingrese el tipo de vehiculo" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">Tipo de Siniestro</span>
                    <input type="text" class="form-control" id="tipo_siniestro" name="tipo_siniestro" placeholder="Ingrese el tipo de siniestro" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="d-grid gap-2 col-2 mb-3 mx-auto">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>   
            </form>
        </div>
    </body>
    </html>