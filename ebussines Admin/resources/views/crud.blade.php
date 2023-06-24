<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Crud</title>
</head>
<x-app-layout>
            

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        
                    </div>
                </div>
            </div>
            
    </x-app-layout>
<body>
    
    
    <div class="position-absolute top-50 start-50 translate-middle">
            
                <form action="{{route('Crear.pais')}}" method="POST">
                    @csrf
                    <legend>registra el pais con su departamento</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Pais</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="pais" name="name">
                    </div>
                    <button class="btn btn-dark">registrar</button>
                    <a class="btn btn-dark" href="{{route( 'deleter.pais' )}}">Borrar un pais</a>
                </form>
                <form action="{{route('Crear.departamento')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Departamento</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="departamento" name="name">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="id del pais a vincular" name="pais_id">
                    </div>
                    <button class="btn btn-dark">registrar</button>
                    <a class="btn btn-dark" href="{{route( 'deleter.departamento' )}}">Borrar un departamentos</a>
                </form>
                <form action="{{route('Crear.municipio')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Municipio</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="municipio" name="name">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="id del departamento a vincular" name="departamentos_id">
                    </div>
                    <button class="btn btn-dark">registrar</button>
                    <a  class="btn btn-dark" href="{{route( 'deleter.municipio' )}}">Borrar un municipio</a>
                </form>
    </div>
    <div>
    <table class="table">
        <thead class="table-dark">
            <th scope="col">id</th>
            <th scope="col">departamentos</th>
            <th scope="col">municipio</th>
            <th scope="col">pais</th>
        </thead>
        @foreach($departamento as $itemD)
        <tbody>
            
                <td>
                    {{$itemD->id}}
                </td>
                <td>
                    {{$itemD->name}}
                </td>
                @foreach($municipio as $itemM)
                    @if($itemM->departamentos_id == $itemD->id)
                        <td>
                            {{$itemM->name}}
                        </td>
                    @endif
                @endforeach
                @foreach($pais as $itemP)
                    @if($itemP->id==$itemD->pais_id)
                        <td>
                            {{$itemP->name}}
                        </td>
                    @endif
                @endforeach
            
        </tbody>
        @endforeach
    </table>
    </div>
    
    


</body>
</html>