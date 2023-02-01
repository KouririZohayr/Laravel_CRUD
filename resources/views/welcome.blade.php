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
    <body class="antialiased">
      

        <div class="flex flex-col container mx-auto mt-52 ">
            
            <h1 class="text-4xl  font-bold text-red-600"> Table Ordinateur</h1>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center">
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
                                {{ $oridnateur->prix }}
                            </td>
                            <td class="text-sm font-light px-6 py-4 whitespace-nowrap ">
                                
                                  <a href="/update/{{ $oridnateur->ido }}" class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-4 border border-green-500 rounded">
                                    UPDATE
                                  <a class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 border border-red-500 rounded">
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
          </div>
            
        </div>
     
    </body>
</html>
