<x-app-layout>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas</title>
    </head>

    <body>
    <div class="text-2xl text-black mx-auto border-4 border-separate">

        <!--Card mensaje inicio-->          
        <div class="w-1/4 pb-4 mx-auto px-5 my-10 border-2 border-indigo-50  bg-zinc rounded-sm">

            <!-- Información -->
            <div class="w-full mt-2 bg-gray-400  rounded-md">
                <h1 class="text-2xl  text-center font-bold  text-black">Las Notas Macizas</h1>
            </div>  

        </div>
            
            <table class = "table border-black border-3 text-base mx-auto">
            <thead >
                <tr class="border-black  bg-zinc-300">
                <th class="border-black border-2 "> Id</th>
                <th class="border-black  border-2 ">Titulo</th>
                <th class="border-black border-2 ">Resumen</th>
            
                
                </tr>
            </thead>
            <tbody>
                @foreach($notas as $nota)
                <tr class=" border-black border-4">
                    <th scope="row" class="px-6 py-4 font-medium border-black border-2">
                        {{$nota->id}}
                    </th>
                    <th class="px-6 py-4 font-medium border-black border-2">
                        {{$nota->titulo}}
                    </th>
                    <th class="px-6 py-4 font-medium border-black border-2">
                        {{$nota->resumen}}
                    </th>
                
                <!-- <td class=" border-black border-2 mx-2  bg-white py-2 px-2">{{ $nota->titulo }}</td>-->
                <td class=" border-black border-4 mx-2  bg-blue-50 py-2 px-2">
                    <a href="{{ route('notas.show', ['id' => $nota]) }}">Detalles</a>
                    
                </td>
                
                </tr>
                
                @endforeach
            </tbody>
            </table>

        </div>
    </body>
    </html>
</x-app-layout>