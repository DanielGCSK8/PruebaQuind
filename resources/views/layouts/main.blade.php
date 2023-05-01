<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quind</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

     <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100">
      <nav class="flex py-5 bg-green-500 text-white px-24">
          <div class="w-1/2 px-12 mr-auto">
             <a href="/" class="text-2x1 font-bold">Alquiler de cámaras</p>
          </div>
         
           <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        
         <li class="nav-item px-4">
                <a href="" class="nav-link font-semibold hover:bg-green-700 py-3 px-4 rounded-md">Cámaras</a>
            </li>

            <li class="nav-item px-4">
                <a href="" class="nav-link font-semibold hover:bg-green-700 py-3 px-4 rounded-md">Alquilar</a>
            </li>

        <p class="font-semibold hover:bg-green-700"></p>
 
      </ul>
      </nav>
      <main class="pt-3 py-4">
        @yield('content')
    </main>
  </body>
</html>