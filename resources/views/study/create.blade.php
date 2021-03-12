<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio</title>
</head>
<body>
<h1>Alta de estudio</h1>
<table>
    <form action="/studies" method="post">
        @csrf
        <div>
            <label for="">Código</label>
            <input type="text" name="code" value="{{old('code')}}">
            @error('code')
                <div><small>{{$message}}</small></div>
            @enderror

        </div>
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{old('name')}}">
            @error('name')
                <div><small>{{$message}}</small></div>
            @enderror
        </div>
        <div>
            <label for="">Abreviatura</label>
            <input type="text" name="abreviation" value="{{old('abreviation')}}">
            @error('abreviation')
                <div><small>{{$message}}</small></div>
            @enderror
        </div>
        <div>
            <input type="submit" value="Guardar">
        </div>
    </form>
</table>
</body>
</html>