<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class="container mx-auto">
    <h1 class="text-6xl font-bold text-red-600 my-16 ">UPDATE ORDINATEUR </h1>
    <form class="w-full max-w-lg mx-16" action="/update/{id}" method="POST">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              ID Ordinateur
            </label>
            <input name="ido" readonly value="{{ $id }}"   id="grid-first-name" type="text" placeholder="{{ $id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  id="grid-first-name" type="text" placeholder="{{ $id }}">
            <p class="text-red-500 text-xs italic"></p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              MARQUE
            </label>
            <input name="marque" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              libele
            </label>
            <input name="libele" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="">
           
          </div>
        </div>
        <div class="flex flex-wrap  mb-6">
          <div class="w-full ">
            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              Date Achat
            </label>
            <input name="dateacha" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="date" >
          </div>
          </div>
          <div class="flex flex-wrap   ">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
              PRIX
            </label>
            <input name="prix" class="appearance-none block w-full mb-10 bg-gray-200 text-gray-700 border  border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
          </div>
          <div    class=" ">
            <input type="submit" class="bg-blue-500 hover:bg-blue-700 w-53/6  text-white font-bold py-2 my-2 mx-96 px-4 border border-blue-700 rounded"  placeholder="update" >
        </div>
        </div>
       
      </form>
    </div>
  
</body>
</html>