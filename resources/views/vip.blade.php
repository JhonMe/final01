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
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Cpath fill='none' stroke-width='200' id='a' d='M0-478l-413.96 717h827.92L0-478l-413.96 717h827.92z'/%3E%3C/defs%3E%3Cg transform='rotate(0 0 0)' style='transform-origin:center'%3E%3Cg transform='rotate(0 0 0)' style='transform-origin:center'%3E%3Cg transform='rotate(0 0 0)' style='transform-origin:center'%3E%3Cg transform='translate(1000 750)'%3E%3Cuse stroke='%23FF0' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23fff700' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23fff000' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffe800' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffe000' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffd800' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffd000' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffc800' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffc000' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffb800' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffb000' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ffa700' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff9f00' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff9600' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff8d00' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff8400' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff7b00' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff7100' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff6700' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff5d00' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff5200' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff4500' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff3700' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23ff2400' href='%23a' transform='rotate(0 0 0)'/%3E%3Cuse stroke='%23F00' href='%23a' transform='rotate(0 0 0)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
        h1{
          color: goldenrod;
        }
        .titulo{
          color: greenyellow;
        }
        h5{
          color: royalblue;
        }
        .boton{
          display: flex;
        }
    </style>
</head>
<body>
<div class="bg-5">
    <center><h1 class="animated-shadow">Bienvenido al sitio VIP</h1></center>
</div>
    <div>
    <div class="boton">
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
         <img src="http://rapidovip.com.pe/images/busgrande.png" class="img-fluid" alt="...">
     </div>
   </center>
</body>
</html>