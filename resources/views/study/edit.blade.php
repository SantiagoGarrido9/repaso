<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio</title>
</head>
<body>
<h1>Edicion de estudio</h1>
<table>
    <form action="/studies/{{$study->id)}}" method="post">
        @csrf
        <input type="hidden" name="_methot" value="PUT">
        <div>
            <label for="">Código</label>
            <input type="text" name="code" value="{{$study->code)}}">
        </div>
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$study->name)}}">
        </div>
        <div>
            <label for="">Abreviatura</label>
            <input type="text" name="abreviation" value="{{$study->abreviation)}}">
        </div>
        <div>
            <input type="submit" value="Guardar">
        </div>
    </form>
</table>
</body>
</html>