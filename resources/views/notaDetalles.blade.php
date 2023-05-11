<x-app-layout>
    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title> Detalles nota</title>
            </head>

            <body>
                <div class="flex">

                <div class="w-1/3 mx-auto  text-black border-4 border-separate bg-white" >
                    <h1 class="p-3 my-2">Id:<br> {{$nota->id}}</h1>
                    
                    <h1 class=" px-3 my-2">Asignatura: <br> 
                        <span class="font-semibold text-2xl text-center">
                        {{$nota->titulo}}
                        </span>
                    </h1>
                    
                </div>

                <div class="w-2/4 px-3 mt-2 mx-auto text-md text-black border-4 border-separate bg-white" >
                    <h2>Ideas:</h2>
                    <p>{{$nota->ideas}}</p>
                    <br>
                    <h2>Notas:</h2>
                    <p>{{$nota->notas}}</p>
                    <br>
                    <h2>Resumen:</h2>
                    <p>{{$nota->resumen}}</p>
                </div>

            </div>

            </body>
        </html>
</x-app-layout>