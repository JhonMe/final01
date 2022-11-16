<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <style>
     body{
            background-color: #181a1b;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzAwIiBoZWlnaHQ9IjE1MCI+PGRlZnM+PGZpbHRlciBpZD0iZGFya3JlYWRlci1pbWFnZS1maWx0ZXIiPjxmZUNvbG9yTWF0cml4IHR5cGU9Im1hdHJpeCIgdmFsdWVzPSIwLjMzMyAtMC42NjcgLTAuNjY3IDAuMDAwIDEuMDAwIC0wLjY2NyAwLjMzMyAtMC42NjcgMC4wMDAgMS4wMDAgLTAuNjY3IC0wLjY2NyAwLjMzMyAwLjAwMCAxLjAwMCAwLjAwMCAwLjAwMCAwLjAwMCAxLjAwMCAwLjAwMCIgLz48L2ZpbHRlcj48L2RlZnM+PGltYWdlIHdpZHRoPSIzMDAiIGhlaWdodD0iMTUwIiBmaWx0ZXI9InVybCgjZGFya3JlYWRlci1pbWFnZS1maWx0ZXIpIiB4bGluazpocmVmPSJkYXRhOmltYWdlL3N2Zyt4bWwsJTNDc3ZnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zycgd2lkdGg9JzEwMCUyNSclM0UlM0NkZWZzJTNFJTNDbGluZWFyR3JhZGllbnQgaWQ9J2EnIGdyYWRpZW50VW5pdHM9J3VzZXJTcGFjZU9uVXNlJyB4MT0nMCcgeDI9JzAnIHkxPScwJyB5Mj0nMTAwJTI1JyBncmFkaWVudFRyYW5zZm9ybT0ncm90YXRlKDI0MCknJTNFJTNDc3RvcCBvZmZzZXQ9JzAnIGNsYXNzPSdjb2xvcjEnIHN0b3AtY29sb3I9JyUyM0ZGRicvJTNFJTNDc3RvcCBvZmZzZXQ9JzEnIGNsYXNzPSdjb2xvcjInIHN0b3AtY29sb3I9JyUyMzRGRScvJTNFJTNDL2xpbmVhckdyYWRpZW50JTNFJTNDcGF0dGVybiBwYXR0ZXJuVW5pdHM9J3VzZXJTcGFjZU9uVXNlJyBpZD0nYicgY2xhc3M9J3NjYWxlJyB3aWR0aD0nNTQwJyBoZWlnaHQ9JzQ1MCcgeD0nMCcgeT0nMCcgdmlld0JveD0nMCAwIDEwODAgOTAwJyUzRSUzQ2cgZmlsbC1vcGFjaXR5PScwLjEnJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nOTAgMTUwIDAgMzAwIDE4MCAzMDAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc5MCAxNTAgMTgwIDAgMCAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0FBQScgcG9pbnRzPScyNzAgMTUwIDM2MCAwIDE4MCAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc0NTAgMTUwIDM2MCAzMDAgNTQwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nNDUwIDE1MCA1NDAgMCAzNjAgMCcvJTNFJTNDcG9seWdvbiBwb2ludHM9JzYzMCAxNTAgNTQwIDMwMCA3MjAgMzAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc2MzAgMTUwIDcyMCAwIDU0MCAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc4MTAgMTUwIDcyMCAzMDAgOTAwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nODEwIDE1MCA5MDAgMCA3MjAgMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNEREQnIHBvaW50cz0nOTkwIDE1MCA5MDAgMzAwIDEwODAgMzAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc5OTAgMTUwIDEwODAgMCA5MDAgMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNEREQnIHBvaW50cz0nOTAgNDUwIDAgNjAwIDE4MCA2MDAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc5MCA0NTAgMTgwIDMwMCAwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM2NjYnIHBvaW50cz0nMjcwIDQ1MCAxODAgNjAwIDM2MCA2MDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzI3MCA0NTAgMzYwIDMwMCAxODAgMzAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc0NTAgNDUwIDM2MCA2MDAgNTQwIDYwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nNDUwIDQ1MCA1NDAgMzAwIDM2MCAzMDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzOTk5JyBwb2ludHM9JzYzMCA0NTAgNTQwIDYwMCA3MjAgNjAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPSc2MzAgNDUwIDcyMCAzMDAgNTQwIDMwMCcvJTNFJTNDcG9seWdvbiBwb2ludHM9JzgxMCA0NTAgNzIwIDYwMCA5MDAgNjAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc4MTAgNDUwIDkwMCAzMDAgNzIwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNBQUEnIHBvaW50cz0nOTkwIDQ1MCA5MDAgNjAwIDEwODAgNjAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc5OTAgNDUwIDEwODAgMzAwIDkwMCAzMDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzkwIDc1MCAwIDkwMCAxODAgOTAwJy8lM0UlM0Nwb2x5Z29uIHBvaW50cz0nMjcwIDc1MCAxODAgOTAwIDM2MCA5MDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzREREJyBwb2ludHM9JzI3MCA3NTAgMzYwIDYwMCAxODAgNjAwJy8lM0UlM0Nwb2x5Z29uIHBvaW50cz0nNDUwIDc1MCA1NDAgNjAwIDM2MCA2MDAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc2MzAgNzUwIDU0MCA5MDAgNzIwIDkwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nNjMwIDc1MCA3MjAgNjAwIDU0MCA2MDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzgxMCA3NTAgNzIwIDkwMCA5MDAgOTAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzY2NicgcG9pbnRzPSc4MTAgNzUwIDkwMCA2MDAgNzIwIDYwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nOTkwIDc1MCA5MDAgOTAwIDEwODAgOTAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzk5OScgcG9pbnRzPScxODAgMCA5MCAxNTAgMjcwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nMzYwIDAgMjcwIDE1MCA0NTAgMTUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPSc1NDAgMCA0NTAgMTUwIDYzMCAxNTAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc5MDAgMCA4MTAgMTUwIDk5MCAxNTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzAgMzAwIC05MCA0NTAgOTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPScwIDMwMCA5MCAxNTAgLTkwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nMTgwIDMwMCA5MCA0NTAgMjcwIDQ1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM2NjYnIHBvaW50cz0nMTgwIDMwMCAyNzAgMTUwIDkwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjMyMjInIHBvaW50cz0nMzYwIDMwMCAyNzAgNDUwIDQ1MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzRkZGJyBwb2ludHM9JzM2MCAzMDAgNDUwIDE1MCAyNzAgMTUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc1NDAgMzAwIDQ1MCA0NTAgNjMwIDQ1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjMyMjInIHBvaW50cz0nNTQwIDMwMCA2MzAgMTUwIDQ1MCAxNTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzcyMCAzMDAgNjMwIDQ1MCA4MTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzY2NicgcG9pbnRzPSc3MjAgMzAwIDgxMCAxNTAgNjMwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nOTAwIDMwMCA4MTAgNDUwIDk5MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzOTk5JyBwb2ludHM9JzkwMCAzMDAgOTkwIDE1MCA4MTAgMTUwJy8lM0UlM0Nwb2x5Z29uIHBvaW50cz0nMCA2MDAgLTkwIDc1MCA5MCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzNjY2JyBwb2ludHM9JzAgNjAwIDkwIDQ1MCAtOTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0FBQScgcG9pbnRzPScxODAgNjAwIDkwIDc1MCAyNzAgNzUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPScxODAgNjAwIDI3MCA0NTAgOTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSczNjAgNjAwIDI3MCA3NTAgNDUwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nMzYwIDYwMCA0NTAgNDUwIDI3MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzNjY2JyBwb2ludHM9JzU0MCA2MDAgNjMwIDQ1MCA0NTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzIyMicgcG9pbnRzPSc3MjAgNjAwIDYzMCA3NTAgODEwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nOTAwIDYwMCA4MTAgNzUwIDk5MCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzkwMCA2MDAgOTkwIDQ1MCA4MTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPScwIDkwMCA5MCA3NTAgLTkwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nMTgwIDkwMCAyNzAgNzUwIDkwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nMzYwIDkwMCA0NTAgNzUwIDI3MCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzU0MCA5MDAgNjMwIDc1MCA0NTAgNzUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPSc3MjAgOTAwIDgxMCA3NTAgNjMwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjMyMjInIHBvaW50cz0nOTAwIDkwMCA5OTAgNzUwIDgxMCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzEwODAgMzAwIDk5MCA0NTAgMTE3MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzRkZGJyBwb2ludHM9JzEwODAgMzAwIDExNzAgMTUwIDk5MCAxNTAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPScxMDgwIDYwMCA5OTAgNzUwIDExNzAgNzUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzY2NicgcG9pbnRzPScxMDgwIDYwMCAxMTcwIDQ1MCA5OTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPScxMDgwIDkwMCAxMTcwIDc1MCA5OTAgNzUwJy8lM0UlM0MvZyUzRSUzQy9wYXR0ZXJuJTNFJTNDL2RlZnMlM0UlM0NyZWN0IHg9JzAnIHk9JzAnIGZpbGw9J3VybCglMjNhKScgd2lkdGg9JzEwMCUyNScgaGVpZ2h0PScxMDAlMjUnLyUzRSUzQ3JlY3QgeD0nMCcgeT0nMCcgZmlsbD0ndXJsKCUyM2IpJyB3aWR0aD0nMTAwJTI1JyBoZWlnaHQ9JzEwMCUyNScvJTNFJTNDL3N2ZyUzRSIgLz48L3N2Zz4=");
            background-attachment: fixed;
            background-size: cover;
        }
      .title{
        color: rebeccapurple;
      }
      .img1{
        width: 350px;
        height: 200px;
      }
      .img2{
        width: 345px;
        height: 200px;
      }
      .img3{
        width: 350px;
        height: 200px;
      }
      .est{
        background: rebeccapurple;
      }
      .pre{
        background: blue;
      }
      .vip{
        background: red;
      }
      p{
        color: red;
        font-size: medium;
        font-family: Georgia;
        
      }
   </style>
</head>
<body>
    <center>
      <h1 class="title">Sitio de compras de boleto</h1>
    </center>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <h4 class="est">Estandar</h4>
      <img class="img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJPsDlyTN7TJTGqjpkkTk-tgk_aVGu8LpZvg&usqp=CAU" alt="">
      <p>Este te tiene un lugar comodo dende podras viajar de mane comoda .
      </p>
      <a href="http://127.0.0.1:8000/estandar">
      <button type="button" class="btn btn-primary">Comprar
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
      </svg>
      </button>
      </a>
    </div>
    <div class="col">
    <h4 class="pre">Premium</h4>
     <img class="img2" src="https://www.peruhop.com/wp-content/uploads/image_make_different_1.jpg" alt="">
      <p> este servicio te dara una comodida mas confortable y podras dsifrutar de viaje de una manera segura.
      </p>
      <a href="http://127.0.0.1:8000/premiun">
      <button type="button" class="btn btn-success">Comprar
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
      </svg>
      </button>
      </a>
    </div>
    <div class="col">
      <h4 class="vip">VIP</h4>
      <img class="img3" src="https://www.blog.recorrido.pe/wp-content/uploads/2020/04/zbuss-peru-conexi%C3%B3n-empresa.jpg" alt="">
      <p>Este servicio tiene los mejores terramosas que tre aternderan las horas que viajes tendra doas pisos tiene califaxiones
        y tiene los mejores asientos donde podras sentite como@.
      </p>
      <a href="http://127.0.0.1:8000/vip">
      <button type="button" class="btn btn-warning">Comprar
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
      </svg>
      </button>
      </a>
    </div>
  </div>
</div>
<div>
   <a href="http://127.0.0.1:8000/">
     <button type="button" class="btn btn-info">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square" viewBox="0 0 16 16">
               <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
           <path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z"/>
     </svg>Regresar
    </button>
   </a>
</div>
</body>
</html>
