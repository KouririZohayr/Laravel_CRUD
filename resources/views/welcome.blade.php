<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
                background-image: url("bg.jpg");
                background-repeat: no-repeat;
                background-size: 100% , 100%;

            }
        </style>
    </head>
    <body class="antialiased">
      

        <div class="flex flex-col container mx-auto mt-20   ">
          <p class="text-6xl  font-bold text-red-600"> TP CRUD</p>
            <p class="text-2xl  font-bold text-gray-400"> Table Ordinateur</p>
            <div class="flex   justify-end ">
            <a  href="/admin/ajouter" class="bg-sky-500  text-center  w-1/6 h-12 hover:bg-sky-900 text-white font-bold py-2 px-4 border border-sky-500 rounded">
                Ajouter Ordinateur
              </a>
            </div>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center opacity-90">
                    <thead class="border-b bg-gray-800">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          #
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          ID ORDINATEUR
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          LIBELE
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                          MARQUE
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            PRIX 
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            ACTION 
                        </th>
                      </tr>
                    </thead class="border-b">
                    <tbody>
                        @php ($i = 0)
                       
                        @foreach ($ordi  as $oridnateur)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $i=$i+1 }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $oridnateur->ido }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                               {{ $oridnateur->libele }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $oridnateur->marque }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $oridnateur->prix }} MDH
                            </td>
                            <td class="text-sm font-light px-6 py-4 whitespace-nowrap ">
                                
                                  <a href="/update/{{ $oridnateur->ido }}" class="bg-green-500 mx-5 hover:bg-green-900 text-white font-bold py-2 px-4 border border-green-500 rounded">
                                    UPDATE
                                  <a href="/delete/{{ $oridnateur->ido }}" onclick="return myFunction();" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 border border-red-500 rounded">
                                    DELET
                                  </a>
                            </td>
                          </tr class="bg-white border-b">
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="flex justify-center mt-10">
            <nav aria-label="Page navigation example flex  ">
              <ul class="inline-flex -space-x-px">
                <li>
                  <a href="#"   target="blank"  aria-current="page" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                @php ($cmp =0)
                @for ($i = 4; $i < $nbrordi; $i+=4)
                  <li>
                    <a href="/{{ $i }}"  target="blank"  class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $cmp=$cmp+1 }}</a>
                  </li>
                @endfor
                <li>
                  <a href="#"  target="blank"  class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
              </ul>
            </nav>
          </div>
          
          </div>
          <div class="flex justify-center mt-5">
            <a  href="/{{ $nbrordi }}" class="bg-sky-500  text-center  w-1/6 h-12 hover:bg-sky-900 text-white font-bold py-2 px-4 border border-sky-500 rounded">
              AFFICHER TOUT
            </a>
          </div>
          
        </div>
     
    </body>
</html>
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>