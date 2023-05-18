<x-app-layout>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Materias</title>
    </head>

    <body>
    <div class="text-2xl text-black mx-auto border-6 border-separate" >
            
            <table class = "tabletext-base mx-auto">
            <thead >
                <tr class=" bg-emerald-500">

                    <th class="border-red border-2">Asignatura</th>
                <th class="border-red border-2">Asignatura</th>
                <th class="border-red border-2">Clave</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($asignaturas as $asignatura)
                <tr class="border-black border-4">

                <tr class=" border-black border-4">
                    <th scope="row" class="px-6 py-4 font-medium border-black border-2">
                    {{ $asignatura->iteration }}
                </th>
                <th class="px-6 py-4 font-medium border-black border-2">
                    {{ $asignatura->nombre }}
                </th>
                <th class="px-6 py-4 font-medium border-black border-2">
                    {{ $asignatura->clave }}
                </th>

                <td class=" border-black border-4 mx-2  bg-blue-50 py-2 px-2">
                    <a href="{{ route('asignaturas.show', ['id' => $asignatura]) }}">Detalles</a>
                    
                </td>
                </tr>
                
                @endforeach

                <!--Card mensaje inicio-->          
                <div class="w-1/4 pb-4 mx-auto px-5 my-10 border-4 border-indigo-50  bg-white rounded-sm">

                    <!-- Información -->

                    <span class="box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 ...">
                         Tu carrera es Tu carrera es {{$asignatura->ing}}
                    </span> 
                
                </div>
            </tbody>
            </table>

        </div>
    </body>
    </html>
</x-app-layout>