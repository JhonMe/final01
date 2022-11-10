<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CITY TOURS WEB</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
             
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
            }
            h1{
               
                color:green;
            }
            
            .card-text{
                color: blue;
            }
            .parafo1{
                display: flex;
                position: relative;
            }
            .img1{
                height: 200px;
                width: 400px;
            }
            .img2{
                height: 200px;
                width: 300px;
            }
            .img3{
                height: 200px;
                width: 4s00px;
            }
            .sub{
                color: blue;
            }
            .card2{
                color: red;
            }
            .card3{
                color: navajowhite;
            }
            .card4{
                color: goldenrod;
            }
            .card1{
                color: green;
            }
            


        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div>
                          <h1><FONT FACE="impact" SIZE=6 COLOR="while">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
                                      <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"/>
                            </svg>CITY TOURS</FONT>
                         </h1>
                         <h5 class="sub">La seguridad de nuestra gente es primero</h5>
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/fotos" class="underline text-gray-900 dark:text-white">ver lugares</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Aqui le mostraremos las fotos de los luagres que usted y su familia podrian ir a visitar.
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                               <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                           </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/boleto" class="underline text-gray-900 dark:text-white">Comprar boleto</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Aqui puede comprar los pasajes que usted desea y segun a su economia.
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">ubicaciones</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Quieres saber donde queda? no te precupes te mostraremos las ubicaciones <a href="http://127.0.0.1:8000/ubicaciones" class="underline">Ver</a>,.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="parafo1"> 
                <p>
                <div class="card1" style="width: 18rem;">
                    <img src="https://historiaperuana.pe/wp-content/uploads/rio-amazonas.jpg" class="img1" alt="...">
                    <div class="card-body"> <h4>Amazonas</h4>
                       <p class="card-text1">Amazonas es uno de los veinticuatro departamentos que, junto a la Provincia Constitucional del Callao, forman la República del Perú. Su capital es Chachapoyas y su ciudad más poblada es Bagua Grande.
                            Entidad: Departamento del Perú
                            Capital: Chachapoyas
                            Fundación Ley: 21 de noviembre de 1832.</p>
                    </div>
                </div>
                </p>
                <p>
                <div class="card2" style="width: 18rem;">
                    <img src="http://www.wamanadventures.com/blog/wp-content/uploads/2020/06/mapa-2-nazca.gif" class="img2" alt="...">
                    <div class="card-body"> <h4>Lineas de Nazca</h4>
                       <p class="card-text2">Es una tierra entre negruzca y rojiza que se torna violácea al anochecer. Un semicírculo de cerros en la lejanía conforman un gigantesco anfiteatro natural abierto hacia el poniente. En esta región miles de líneas se extienden por 520 km², y algunas incluso se prolongan hasta un área de 800 km².
                         Región: América Latina y el Caribe
                         Inscripción: 1994 (XVIII sesión).</p>
                    </div>
                </div>
                </p>
                <p>
                <div class="card3" style="width: 18rem;">
                    <img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2018/08/29/000528602W.jpg" class="img3" alt="...">
                    <div class="card-body"><h4>Montaña de 7 colores</h4>
                       <p class="card-text3">Se trata de la montaña de los Siete Colores, también conocida como Vinicunca o Arcoíris. El monte se encuentra en la Cordillera del Vilcanota a 5.200 metros sobre el nivel del mar, en el distrito de Pitumarca.
                         Sus laderas y cumbres están teñidas por unas franjas de intensos tonos de fucsia, turquesa, lavanda y dorado.
                      </p>
                    </div>
                </div>
                </p>
                <p>
                <div class="card4" style="width: 18rem;">
                    <img src="https://as2.ftcdn.net/v2/jpg/02/16/67/85/1000_F_216678598_maCXVAWA3fPssw5EqfP1ewKgb3QkszGV.jpg" class="img3" alt="...">
                    <div class="card-body"><h4>Volcan Misti</h4>
                       <p class="card-text4">Es un estratovolcán conformado por la acumulación sucesiva de flujos de lava y secuencias piroclásticas. En los últimos 50 000 años, el Misti ha registrado al menos 12 erupciones volcánicas,
                         cuyos productos expulsados se han depositado en gran parte en el área que hoy ocupa la ciudad de Arequipa.
                      </p>
                    </div>
                </div>
                </p>
             </div>
                  <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

                      <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Gracias por visitarnos (: .
                      </div>
                 </div>
            </div>
        </div>
    </body>
</html>
