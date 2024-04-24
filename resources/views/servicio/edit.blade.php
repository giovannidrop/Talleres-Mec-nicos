<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Servicio</title>
</head>
<body>
    
<div class="container">
    <h1>Edit Servicio</h1>
    <form method="POST" action="{{ route('servicio.update', ['servicio' => $servicio->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" aria-describedby="codeHelp" name="code" value="{{ $servicio->id }}" disabled>
            <div id="codeHelp" class="form-text">Servicio code</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Servicio</label>
            <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{ $servicio->vehiculo_id }}">
        </div>
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