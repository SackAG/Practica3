@extends('inicio2')
    
@section('contenidouno')
    
<div class="btn-group-vertical" role="group" aria-label="">
    <button type="button" class="btn btn-secondary">Periodos</button>
    <button type="button" class="btn btn-secondary">Plazas</button>
    <div class="btn-group" role="group">
        <button
            id="dropdownId"
            type="button"
            class="btn btn-secondary dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
        >
            Mas
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="">Puestos</a>
            <a class="dropdown-item" href="">Personal</a>
            <a class="dropdown-item" href="">Deptos</a>
            <a class="dropdown-item" href="">Carreras</a>
            <a class="dropdown-item" href="">Reticulas</a>
            <a class="dropdown-item" href="">Materias</a>
            <a class="dropdown-item" href="">Alumnos</a>
        </div>
    </div>
 </div>
@endsection