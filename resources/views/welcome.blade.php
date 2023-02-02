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
               
            }
        </style>
    </head>
    <body class="antialiased  bg-slate-200">
        <div class="flex flex-col container mx-auto mt-20  " >
          <p class="text-6xl  font-bold text-red-600"> TP CRUD</p>
            <p class="text-2xl  font-bold text-gray-400"> Table Ordinateur</p>
            <div class="flex   justify-end ">
            <a  href="/admin/ajouter" class="bg-sky-500  text-center  w-1/6 h-12 hover:bg-sky-900 text-white font-bold py-2 px-4 border border-sky-500 rounded">
                Ajouter Ordinateur
              </a>
             
            </div>
            <div class="flex justify-center mt-5">
            <form class="  w-4/6" action="/admin/recherche" method="POST">   
              @csrf
              <label for="default-search" class="mb-2 text-sm font-medium  text-gray-900 sr-only dark:text-white">Search</label>
              <div class="relative">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  </div>
                  <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                  <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
              </div>
            </div>
          </form>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center ">
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