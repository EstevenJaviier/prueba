@extends('layouts.app') 

@section('title', 'Crear persona')

@section('content')


<div class="row  mt-5">
    <div class="col-lg-6">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="card">
            <div class="card-header">Nueva Persona</div>
            <div class="card-body">
                <form action="{{ route('personas.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre1">Primer nombre:*</label>
                        <input
                            type="text"
                            id="nombre1"
                            class="form-control"
                            name="nombre1"
                        />
                    </div>

                    <div class="form-group">
                        <label for="nombre2">Segundo nombre:*</label>
                        <input
                            type="text"
                            id="nombre2"
                            class="form-control"
                            name="nombre2"
                        />
                    </div>

                    <button type="submit" class="btn btn-success">
                        Guardar Persona
                    </button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection