<x-app-layout>
<div class="w-full max-w-xs mx-auto">
    <a href="{{route('notas')}}" ><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
        Cancelar
      </button></a>
  <form action="{{route('cornellnote.update',$nota->id)}}" method="POST" role="form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
    @csrf
    @method("PUT")
    <h2 class="mx-auto">Crear nota</h2>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Titulo">
        Titulo(Asignatura)
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titulo" name="titulo" type="text" placeholder="tema" value="{{$nota->titulo}}" readonly>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="idea">
        Ideas(Palabra Clave)
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="ideas" name="ideas" type="text" placeholder="ier.123" value="{{$nota->ideas}}">
      @error('ideas')
        <div class="alert alert-danger mt-1 mb-1 text-red-700">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="notas">
       Anotaciones
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="notas" name="notas" type="text" placeholder="Esta seccion..." value="{{$nota->notas}}" readonly>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="resumen">
        Resumen:
      </label>
      <textarea class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="resumen" name="resumen" type="text" placeholder="" ></textarea>
      @error('resumen')
        <div class="alert alert-danger mt-1 mb-1 text-red-700">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="notas">
       Asignatura del tema:
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="text" placeholder="Esta seccion..." value="{{$nota->topic->tema}}" readonly>
      <input hidden class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="topic" name="topic" type="text" placeholder="Esta seccion..." value="{{$nota->topic->id}}" readonly>
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Actualizar nota
      </button>
    </div>
  </form>
</div>
</x-app-layout>
