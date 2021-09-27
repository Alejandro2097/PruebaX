<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Figuras </title>
</head>
<body>
    <div class="container">
        <h2>Circulo</h2>
        <form action="">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Radio</span>
                <input type="number" class="from-control" id="radio">
            </div>
            <div class="col-12">
                <button class="btn btn-primary"  type="button" onclick="circulo(document.getElementById('radio').value)">Calcular</button>
            </div>
            <div class="col-12">
                <h3 id="res"></h3>
            </div>
        </form>
        <h2>Triangulo</h2>
        <form action="">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Base</span>
                <input type="number" class="from-control" id="base">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Altura</span>
                <input type="number" class="from-control" id="altura">
            </div>
            <div class="col-12">
                <button class="btn btn-primary"  type="button" onclick="triangulo(document.getElementById('base').value, document.getElementById('altura').value)">Calcular</button>
            </div>
            <div class="col-12">
                <h3 id="resT"></h3>
            </div>
        </form>
        <h2>Cuadrado</h2>
        <form action="">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">lado</span>
                <input type="number" class="from-control" id="lado">
            </div>
            <div class="col-12">
                <button class="btn btn-primary"  type="button" onclick="cuadrado(document.getElementById('lado').value)">Calcular</button>
            </div>
            <div class="col-12">
                <h3 id="resC"></h3>
            </div>
        </form>
        
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</html>