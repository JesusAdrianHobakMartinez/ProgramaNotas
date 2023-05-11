<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    <div class="w-full mt-4 bg-gray-400  rounded-md">
                <h1 class="text-4xl  text-center  border-8 font-bold  text-black">Listado de Perfiles </h1>
            </div>
            
            <table class = "table border-black border-3 text-base mx-auto">
            <thead >
                <tr class="border-zinc border-2 bg-zinc-400">
                <th class="border-black border-2 ">Nombre</th>
                <th class="border-black border-2 ">Email</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class=" border-black ">
                
                <td class=" border-red border-4 mx-4  bg-white py-4 px-4">{{ $user->name }}</td>
                <td class=" border-red border-4 mx-4  bg-white py-4 px-4">{{ $user->email }}</td>
                
                </tr>
                @endforeach
            </tbody>
            </table>

        </div>
    </body>
    </html>

</x-app-layout>
