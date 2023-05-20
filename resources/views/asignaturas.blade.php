<x-app-layout>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asignaturas</title>
    </head>

    <body>
    <div class="text-2xl text-black mx-auto border-4 border-separate" >
            
            <table class = "tabletext-base mx-auto">
            <thead >
                <tr class=" bg-emerald-500">

                <th class="border-black border-4"> # </th>
                <th class="border-black border-4">Asignatura</th>
                <th class="border-black border-4">Clave</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($asignaturas as $asignatura)
                <tr class="border-black border-4">

                <td class=" border-black border-4 mx-2  bg-white py-2 px-2">{{ $loop->iteration }}</td>
                <td class=" border-black border-2 mx-2  bg-white py-2 px-2">{{ $asignatura->nombre }}</td>
                <td class=" border-black border-2 mx-2  bg-white py-2 px-2">{{ $asignatura->clave }}</td>
                <td class=" border-black border-4 mx-2  bg-blue-50 py-2 px-2">
                    <a href="{{ route('subjects.show', ['id' => $asignatura]) }}">Detalles</a>
                    
                </td>
                </tr>
                
                @endforeach

                <!--Card mensaje inicio-->          
                <div class="w-1/4 pb-4 mx-auto px-5 my-10 border-4 border-indigo-50  bg-white rounded-sm">

                    <!-- Información -->
                    <div class="w-full mt-4 bg-lime-100  rounded-md">
                        <h1 class="text-2xl  text-center font-bold  text-black">Tu carrera es {{$asignatura->ing}}</h1>
                    </div>  
                
                </div>
            </tbody>
            </table>

        </div>
    </body>
    </html>
</x-app-layout>