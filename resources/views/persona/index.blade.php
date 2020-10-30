@extends('layouts.app')

@section('title', 'Lista de personas')

@section('content')
<div class="card mt-4">
<div class="card-header">
Lista de Personas
</div>

<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre 1</th>
      <th scope="col">Nombre 2</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($personas as $persona)
    <tr>
      <th scope="row">{{ $persona->id }}</th>
      <td>{{ $persona->nombre1 }}</td>
      <td>{{ $persona->nombre2 }}</td>
      <td>
        <form action="{{route('personas.destroy',  $persona)}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection