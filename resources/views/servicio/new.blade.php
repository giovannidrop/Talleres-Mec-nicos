<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Servicio</title>
</head>
<body>
    
<div class="container">
    <h1>Add Servicio</h1>
    <form method="POST" action="{{ route('servicios.store') }}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" aria-describedby="codeHelp" name="code" placeholder="Servicio code." required>
            <div id="codeHelp" class="form-text">Servicio code</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Servicio</label>
            <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Servicio name.">
        </div>
        <label for="vehiculo">Vehiculo :</label>
        <select class="form-select" id="vehiculo" name="vehiculo_code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($vehiculos as $vehiculo)
                <option value="{{$vehiculo->id}}">{{$vehiculo->propietario_id}}</option>
            @endforeach
        </select>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('servicios.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>