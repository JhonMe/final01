<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubicaciones </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #181a1b;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzAwIiBoZWlnaHQ9IjE1MCI+PGRlZnM+PGZpbHRlciBpZD0iZGFya3JlYWRlci1pbWFnZS1maWx0ZXIiPjxmZUNvbG9yTWF0cml4IHR5cGU9Im1hdHJpeCIgdmFsdWVzPSIwLjMzMyAtMC42NjcgLTAuNjY3IDAuMDAwIDEuMDAwIC0wLjY2NyAwLjMzMyAtMC42NjcgMC4wMDAgMS4wMDAgLTAuNjY3IC0wLjY2NyAwLjMzMyAwLjAwMCAxLjAwMCAwLjAwMCAwLjAwMCAwLjAwMCAxLjAwMCAwLjAwMCIgLz48L2ZpbHRlcj48L2RlZnM+PGltYWdlIHdpZHRoPSIzMDAiIGhlaWdodD0iMTUwIiBmaWx0ZXI9InVybCgjZGFya3JlYWRlci1pbWFnZS1maWx0ZXIpIiB4bGluazpocmVmPSJkYXRhOmltYWdlL3N2Zyt4bWwsJTNDc3ZnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zycgd2lkdGg9JzEwMCUyNSclM0UlM0NkZWZzJTNFJTNDbGluZWFyR3JhZGllbnQgaWQ9J2EnIGdyYWRpZW50VW5pdHM9J3VzZXJTcGFjZU9uVXNlJyB4MT0nMCcgeDI9JzAnIHkxPScwJyB5Mj0nMTAwJTI1JyBncmFkaWVudFRyYW5zZm9ybT0ncm90YXRlKDI0MCknJTNFJTNDc3RvcCBvZmZzZXQ9JzAnIGNsYXNzPSdjb2xvcjEnIHN0b3AtY29sb3I9JyUyM0ZGRicvJTNFJTNDc3RvcCBvZmZzZXQ9JzEnIGNsYXNzPSdjb2xvcjInIHN0b3AtY29sb3I9JyUyMzRGRScvJTNFJTNDL2xpbmVhckdyYWRpZW50JTNFJTNDcGF0dGVybiBwYXR0ZXJuVW5pdHM9J3VzZXJTcGFjZU9uVXNlJyBpZD0nYicgY2xhc3M9J3NjYWxlJyB3aWR0aD0nNTQwJyBoZWlnaHQ9JzQ1MCcgeD0nMCcgeT0nMCcgdmlld0JveD0nMCAwIDEwODAgOTAwJyUzRSUzQ2cgZmlsbC1vcGFjaXR5PScwLjEnJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nOTAgMTUwIDAgMzAwIDE4MCAzMDAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc5MCAxNTAgMTgwIDAgMCAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0FBQScgcG9pbnRzPScyNzAgMTUwIDM2MCAwIDE4MCAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc0NTAgMTUwIDM2MCAzMDAgNTQwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nNDUwIDE1MCA1NDAgMCAzNjAgMCcvJTNFJTNDcG9seWdvbiBwb2ludHM9JzYzMCAxNTAgNTQwIDMwMCA3MjAgMzAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc2MzAgMTUwIDcyMCAwIDU0MCAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc4MTAgMTUwIDcyMCAzMDAgOTAwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nODEwIDE1MCA5MDAgMCA3MjAgMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNEREQnIHBvaW50cz0nOTkwIDE1MCA5MDAgMzAwIDEwODAgMzAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc5OTAgMTUwIDEwODAgMCA5MDAgMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNEREQnIHBvaW50cz0nOTAgNDUwIDAgNjAwIDE4MCA2MDAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc5MCA0NTAgMTgwIDMwMCAwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM2NjYnIHBvaW50cz0nMjcwIDQ1MCAxODAgNjAwIDM2MCA2MDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzI3MCA0NTAgMzYwIDMwMCAxODAgMzAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc0NTAgNDUwIDM2MCA2MDAgNTQwIDYwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nNDUwIDQ1MCA1NDAgMzAwIDM2MCAzMDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzOTk5JyBwb2ludHM9JzYzMCA0NTAgNTQwIDYwMCA3MjAgNjAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPSc2MzAgNDUwIDcyMCAzMDAgNTQwIDMwMCcvJTNFJTNDcG9seWdvbiBwb2ludHM9JzgxMCA0NTAgNzIwIDYwMCA5MDAgNjAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPSc4MTAgNDUwIDkwMCAzMDAgNzIwIDMwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNBQUEnIHBvaW50cz0nOTkwIDQ1MCA5MDAgNjAwIDEwODAgNjAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc5OTAgNDUwIDEwODAgMzAwIDkwMCAzMDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzkwIDc1MCAwIDkwMCAxODAgOTAwJy8lM0UlM0Nwb2x5Z29uIHBvaW50cz0nMjcwIDc1MCAxODAgOTAwIDM2MCA5MDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzREREJyBwb2ludHM9JzI3MCA3NTAgMzYwIDYwMCAxODAgNjAwJy8lM0UlM0Nwb2x5Z29uIHBvaW50cz0nNDUwIDc1MCA1NDAgNjAwIDM2MCA2MDAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc2MzAgNzUwIDU0MCA5MDAgNzIwIDkwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nNjMwIDc1MCA3MjAgNjAwIDU0MCA2MDAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzgxMCA3NTAgNzIwIDkwMCA5MDAgOTAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzY2NicgcG9pbnRzPSc4MTAgNzUwIDkwMCA2MDAgNzIwIDYwMCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nOTkwIDc1MCA5MDAgOTAwIDEwODAgOTAwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzk5OScgcG9pbnRzPScxODAgMCA5MCAxNTAgMjcwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nMzYwIDAgMjcwIDE1MCA0NTAgMTUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPSc1NDAgMCA0NTAgMTUwIDYzMCAxNTAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPSc5MDAgMCA4MTAgMTUwIDk5MCAxNTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzAgMzAwIC05MCA0NTAgOTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPScwIDMwMCA5MCAxNTAgLTkwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nMTgwIDMwMCA5MCA0NTAgMjcwIDQ1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM2NjYnIHBvaW50cz0nMTgwIDMwMCAyNzAgMTUwIDkwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjMyMjInIHBvaW50cz0nMzYwIDMwMCAyNzAgNDUwIDQ1MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzRkZGJyBwb2ludHM9JzM2MCAzMDAgNDUwIDE1MCAyNzAgMTUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSc1NDAgMzAwIDQ1MCA0NTAgNjMwIDQ1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjMyMjInIHBvaW50cz0nNTQwIDMwMCA2MzAgMTUwIDQ1MCAxNTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzcyMCAzMDAgNjMwIDQ1MCA4MTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzY2NicgcG9pbnRzPSc3MjAgMzAwIDgxMCAxNTAgNjMwIDE1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nOTAwIDMwMCA4MTAgNDUwIDk5MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzOTk5JyBwb2ludHM9JzkwMCAzMDAgOTkwIDE1MCA4MTAgMTUwJy8lM0UlM0Nwb2x5Z29uIHBvaW50cz0nMCA2MDAgLTkwIDc1MCA5MCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzNjY2JyBwb2ludHM9JzAgNjAwIDkwIDQ1MCAtOTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0FBQScgcG9pbnRzPScxODAgNjAwIDkwIDc1MCAyNzAgNzUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPScxODAgNjAwIDI3MCA0NTAgOTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzQ0NCcgcG9pbnRzPSczNjAgNjAwIDI3MCA3NTAgNDUwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM5OTknIHBvaW50cz0nMzYwIDYwMCA0NTAgNDUwIDI3MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzNjY2JyBwb2ludHM9JzU0MCA2MDAgNjMwIDQ1MCA0NTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzIyMicgcG9pbnRzPSc3MjAgNjAwIDYzMCA3NTAgODEwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nOTAwIDYwMCA4MTAgNzUwIDk5MCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzkwMCA2MDAgOTkwIDQ1MCA4MTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPScwIDkwMCA5MCA3NTAgLTkwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjM0NDQnIHBvaW50cz0nMTgwIDkwMCAyNzAgNzUwIDkwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjNGRkYnIHBvaW50cz0nMzYwIDkwMCA0NTAgNzUwIDI3MCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzQUFBJyBwb2ludHM9JzU0MCA5MDAgNjMwIDc1MCA0NTAgNzUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0ZGRicgcG9pbnRzPSc3MjAgOTAwIDgxMCA3NTAgNjMwIDc1MCcvJTNFJTNDcG9seWdvbiBmaWxsPSclMjMyMjInIHBvaW50cz0nOTAwIDkwMCA5OTAgNzUwIDgxMCA3NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzMjIyJyBwb2ludHM9JzEwODAgMzAwIDk5MCA0NTAgMTE3MCA0NTAnLyUzRSUzQ3BvbHlnb24gZmlsbD0nJTIzRkZGJyBwb2ludHM9JzEwODAgMzAwIDExNzAgMTUwIDk5MCAxNTAnLyUzRSUzQ3BvbHlnb24gcG9pbnRzPScxMDgwIDYwMCA5OTAgNzUwIDExNzAgNzUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyMzY2NicgcG9pbnRzPScxMDgwIDYwMCAxMTcwIDQ1MCA5OTAgNDUwJy8lM0UlM0Nwb2x5Z29uIGZpbGw9JyUyM0RERCcgcG9pbnRzPScxMDgwIDkwMCAxMTcwIDc1MCA5OTAgNzUwJy8lM0UlM0MvZyUzRSUzQy9wYXR0ZXJuJTNFJTNDL2RlZnMlM0UlM0NyZWN0IHg9JzAnIHk9JzAnIGZpbGw9J3VybCglMjNhKScgd2lkdGg9JzEwMCUyNScgaGVpZ2h0PScxMDAlMjUnLyUzRSUzQ3JlY3QgeD0nMCcgeT0nMCcgZmlsbD0ndXJsKCUyM2IpJyB3aWR0aD0nMTAwJTI1JyBoZWlnaHQ9JzEwMCUyNScvJTNFJTNDL3N2ZyUzRSIgLz48L3N2Zz4=");
            background-attachment: fixed;
            background-size: cover;
        }
        h1{
            color: blue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .parrafos{
            display: flex;
        }
        .parrafo2{
            display: flex;
        }
    </style>
</head>
<body>
    <center>
       <h1>Ubicaciones 
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
               <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
               <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
           </svg>
       </h1>
    </center>
    <center>
    <div class="parrafos">
   <p>
    <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">Machu Picchu
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
               <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg></h5>
        <h6 class="card-subtitle mb-2 text-muted">puedes ver su ubicaciones</h6> 
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="https://www.google.com/maps/place/Machu+Picchu/@-13.1628665,-72.5465275,14.97z/data=!4m5!3m4!1s0x0:0x3a10370ea4a01a27!8m2!3d-13.1631412!4d-72.5449629" class="card-link">Aqui Machu Picchu</a>
     </div>
   </div>
   </p>
   <p>
   <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">lago  tita caca 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
               <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg></h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="https://www.google.com/maps/place/Titicaca/@-15.9134984,-69.9612097,9z/data=!3m1!4b1!4m5!3m4!1s0x915d9b22f6af7c75:0xf682724d4df71dc!8m2!3d-15.9254!4d-69.3354" class="card-link">Aqui lago Titicaca</a>
     </div>
   </div>
   </p>
   <p>
   <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">HUASCARAN
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
               <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg></h5>
        <h6 class="card-subtitle mb-2 text-muted">Te mostraremos Aqui</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="https://www.google.com/maps/place/Huascar%C3%A1n/@-9.1223371,-77.643257,14z/data=!4m13!1m7!3m6!1s0x91a94787b67d944d:0x92e763d30fd90096!2sHuascar%C3%A1n!3b1!8m2!3d-9.1223815!4d-77.6063478!3m4!1s0x91a94787b67d944d:0x92e763d30fd90096!8m2!3d-9.1223815!4d-77.6063478?hl=es-419" class="card-link">Aqui HUASCARAN</a>
     </div>
   </div>
   </p>
   <p>
   <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">Amazonas
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
               <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg></h5>
        <h6 class="card-subtitle mb-2 text-muted">Te mostraremos Aqui</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="https://www.google.com/maps/place/Amazonas/@-1.5933834,-72.3625506,5z/data=!3m1!4b1!4m5!3m4!1s0x926eca1645365b6b:0xabfc431d20b2b474!8m2!3d-3.2996216!4d-60.6646509?hl=es-419" class="card-link">Aqui Amazonas</a>
     </div>
   </div>
   </p>
   </div>
   <div class="parrafo2">
    <p>
   <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">Montaña de 7 colores
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
               <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg></h5>
        <h6 class="card-subtitle mb-2 text-muted">Te mostraremos Aqui</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="https://www.google.com/maps/place/Tour+Monta%C3%B1a+7+Colores/@-13.525171,-72.0112983,14z/data=!4m9!1m2!2m1!1smonta%C3%B1a+7+colores+!3m5!1s0x916dd5ab3a608719:0x85fd3470273174f1!8m2!3d-13.5251719!4d-71.9742234!15sChJtb250YcOxYSA3IGNvbG9yZXNaFCISbW9udGHDsWEgNyBjb2xvcmVzkgENdHJhdmVsX2FnZW5jeZoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VNdE9YUkljVVozRUFF4AEA?hl=es-419" class="card-link">Aqui Montaña 7 colores</a>
     </div>
   </div>
   </p>
   <p>
   <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">Lineas de nazca
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
               <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg></h5>
        <h6 class="card-subtitle mb-2 text-muted">Te mostraremos Aqui</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="https://www.google.com/maps/place/L%C3%ADneas+de+Nazca/@-14.7390151,-75.1327355,16.86z/data=!4m5!3m4!1s0x91141e46ccb532ad:0x1802d2b96697b591!8m2!3d-14.739027!4d-75.130005?hl=es-419" class="card-link">Aqui lineas de nazca</a>
     </div>
   </div>
   </p>
   </div>
   </center>
   <a href="http://127.0.0.1:8000/">
     <button class="btn btn-primary" type="submit">Volver</button>
   </a>

</body>
</html>