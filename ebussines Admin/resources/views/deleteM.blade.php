<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<x-app-layout>
            

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        
                    </div>
                </div>
            </div>
            <div>
        <table class="table">
            <thead class="table-dark">
                <th scope="col">id</th>
                <th scope="col">pais</th>
            </thead>
            @foreach($municipio as $itemP)
            <tbody>
                <td>
                    {{$itemP->id}}
                </td>
                <td>
                    {{$itemP->name}}
                </td>
                <form action="{{route('delete.municipio',$itemP->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <td>
                    <button class="btn btn-dark">Eliminar</button>
                    </td>
                </form>
            </tbody>
            @endforeach
        </table>
    </div>
            
</x-app-layout>
<body>
    
    
</body>
</html>