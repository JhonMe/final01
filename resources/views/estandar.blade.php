<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
        .titulo{
            color: goldenrod;
        }
        .img1{
            height: 300px;
            width: 500px;
        }
    </style>
</head>
<body>
<form>
  <div>
  <fieldset disabled>
  <center><legend class="titulo">Rellenar los datos correspondientes</legend>
    <h5>Ingrese su nombre y apellido</h5>
    <input class="form-sm form-control-sm" type="text">
    <h5>Ingrese una contraseña</h5>
    <input class="form-sm form-control-sm" type="text">
    <h5>Ingrese el lugar donde viajara</h5>
    <input class="form-sm form-control-sm" type="text">
    <datalist id="datalistOptions">
     <option value="San Francisco">
     <option value="New York">
     <option value="Seattle">
     <option value="Los Angeles">
     <option value="Chicago">
     </datalist>
   </center>
   <div>
    <a href="http://127.0.0.1:8000/boleto">
      <button type="button" class="btn btn-primary">Regresar</button>
    </a>
   </div>
   <center>
     <div>
         <img class="img1" src="https://assets.stickpng.com/images/580b585b2edbce24c47b2bf6.png" class="img-fluid" alt="...">
     </div>
   </center>
</form>
</body>
</html>