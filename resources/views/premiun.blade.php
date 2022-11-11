<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Crect fill='none' stroke-width='100' id='a' x='-400' y='-300' width='800' height='600'/%3E%3C/defs%3E%3Cg transform='rotate(0 0 0)' style='transform-origin:center'%3E%3Cg transform='rotate(0 0 0)' style='transform-origin:center'%3E%3Cg transform='rotate(0 0 0)' style='transform-origin:center'%3E%3Cg transform='translate(1000 750)'%3E%3Cuse stroke='%23000' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000011' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000022' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000033' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000044' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000055' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000066' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000077' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000088' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23000099' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%230000aa' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%230000bb' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%230000cc' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%230000dd' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%230000ee' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%2300F' href='%23a' transform='rotate(0 0 0)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
        h1{
            color: blue;
        }
        h5{
            color: green;
        }
        .titulo{
            color: red;
        }
        .img1{
            height: 300px;
            width: 500px;
        }
    </style>
</head>
<body>
   <center><h1>Bienvenido al sitio premium</h1></center>
    <div>
    <div>
    <a href="http://127.0.0.1:8000/boleto">
      <button type="button" class="btn btn-warning">Regresar</button>
    </a>
   </div>
  <fieldset disabled>
  <center><legend class="titulo">Rellenar los datos correspondientes</legend>
    <h5>Ingrese su nombre y apellido</h5>
    <input class="form-sm form-control-sm" type="text">
    <h5>Ingrese su numero DNI</h5>
    <input class="form-sm form-control-sm" type="text">
    <h5>Ingrese una contraseña</h5>
    <input class="form-sm form-control-sm" type="text">
    <h5>Ingrese el lugar donde viajara</h5>
    <div>
      <select class="form-sm form-control-sm">
        <option>Disabled select</option>
        <option>Disabled select</option>
        <option>Disabled select</option>
      </select>
    </div>
   </center>
   <center>
     <div>
         <img class="img1" src="https://www.pngplay.com/wp-content/uploads/7/Blue-Bus-PNG-Clipart-Background.png" class="img-fluid" alt="...">
     </div>
   </center>
</body>
</html>