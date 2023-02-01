@extends('Default')

@section('section')

    
<div class="container lg:w-2/6 max-sm:w-full  sm:w-4/6 mt-10 mx-auto order-2 p-8 shadow-xl shadow-green-500/40">
    <h1 class="text-4xl  font-bold text-red-600 mb-10  ">UPDATE ORDINATEUR </h1>
    <form class="w-full " action="/update/{id}" method="POST">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              ID Ordinateur
            </label>
            <input name="ido" readonly value={{ $ido }}  id="grid-first-name" type="text"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  id="grid-first-name" type="text" >
            <p class="text-red-500 text-xs italic"></p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              MARQUE
            </label>
            <input name="marque" value="{{ $marque }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              libele
            </label>
            <input name="libele" value="{{ $libele }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="">
           
          </div>
        </div>
        <div class="flex flex-wrap  mb-6">
          <div class="w-full ">
            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              Date Achat
            </label>
            <input name="dateacha" value="{{ $dateacha }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="date" >
          </div>
          </div>
          <div class="flex flex-wrap  ">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
              PRIX
            </label>
            <input name="prix" value="{{ $prix }}" class="appearance-none block w-full mb-10 bg-gray-200 text-gray-700 border  border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
          </div>
          <div    class="grid grid-cols-2 container  mx-auto gap-8  ">
            <input type="submit" class="bg-green-500 hover:bg-green-700   text-white font-bold py-2   px-4 border border-green-700 rounded"  placeholder="update" >
            <a href="/" class="bg-gray-500 hover:bg-gray-400   text-white font-bold py-2  text-center px-4 border border-gray-700 rounded"  >Cancel</a>
        </div>
        </div>
       
      </form>
    </div>
    
@endsection