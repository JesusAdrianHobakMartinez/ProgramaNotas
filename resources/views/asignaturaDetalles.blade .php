<x-app-layout>
    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Asignatura Detalles</title>
            </head>

            <body>
                <div class="flex">

                <div class="w-1/3 mx-auto  text-black border-4 border-separate bg-white" >
                    <h1 class="p-3 my-2">Id:<br> {{$asignatura->id}}</h1>
                    <h1 class="px-3 mt-2">Clave:
                        <br>
                        <span class="font-semibold">
                            {{$asignatura->clave}}
                        </span>
                    </h1>
                    <h1 class=" px-3 my-2">Asignatura: <br> 
                        <span class="text-2xl text-center">
                        {{$asignatura->nombre}}
                        </span>
                    </h1>
                    
                    <h3 class="px-3 mt-2">Semestre al que corresponde: 
                        <span class="font-semibold">
                        {{$asignatura->semestre}}
                        </span>
                    </h3>
                </div>

                <div class="w-2/4 mx-auto text-md text-black border-4 border-separate bg-white" >
                    <h3 class="px-3 mt-2">Temas:</h1>
                    <ul class="p-3 my-2 mx-5">
                        @foreach ($asignatura->topics as $topic)
                            <li class="list-decimal">
                                {{$topic->tema}}
                            </li>
                        @endforeach
                        </ul>
                </div>

            </div>

            </body>
        </html>
</x-app-layout>