<x-app-layout>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas</title>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body>
        <div class="text-2xl text-black mx-auto border-4 border-separate">
            <!--Card mensaje inicio-->
            <div class="w-1/4 pb-4 mx-auto px-5 my-10    rounded-sm">
                <!-- Información -->
                <div class="w-full mt-4 bg-zinc-100  rounded-md">
                <span class="box-decoration-clone bg-gradient-to-r from-sky-600 to-pink-600 text-white px-2 ...">
                     Estas son tus notas
                </span>
                </div>
            </div>
            <button onclick="myFunction()" class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-1 px-2 rounded">Agrega la nota que quieras que vean.</button>
            <form action="{{route('cornellnote.create')}}" method="POST"  id="addnote" style="display:none;">
                {{ csrf_field() }}
                <label for="asignatura">Selecciona la asignatura</label>
                <select id="asignatura" name="id">
                    @foreach ($asignaturas as $asignatura)
                    <option value="{{ $asignatura->id }}">{{ $asignatura->nombre }}</option>
                    @endforeach
                </select>
                <button class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-1 px-2 rounded">
                Añadir nota
                </button>
            </form>
            <div class="lg-10 ml-10 sm-12 relative overflow-x-auto mx-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tema
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tu idea
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notas as $nta)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$nta->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$nta->titulo}}
                            </td>
                            <td class="px-6 py-4">
                                {{$nta->ideas}}
                            </td>
                            <td class="px-6 ">
                                <a href="{{route('cornellnote.show',$nta->id)}}" class="font-medium  hover:underline"><svg class="h-8 w-8 text-cyan-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                                <a href="{{route('cornellnote.edit',$nta->id)}}" class="font-medium  hover:underline"><svg class="h-8 w-8 text-blue-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg></a>
                                <form action="{{route('cornellnote.destroy',$nta->id)}}" method="POST" id="confirmacionborrar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" ><svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg></button>
                                </form>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
    <script>
        function myFunction() {
            var x = document.getElementById("addnote");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        (function() {
         var form = document.getElementById('confirmacionborrar');
         form.addEventListener('submit', function(event) {
           // si es false entonces que no haga el submit
           if (!confirm('Realmente desea eliminar la nota?')) {
             event.preventDefault();
           }
         }, false);
       })();
    </script>
</x-app-layout>

