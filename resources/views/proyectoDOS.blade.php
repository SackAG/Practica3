@extends('inicio2')
    
@section('contenidodos')
    
<div class="btn-group" role="group" aria-label="">
    <button type="button" class="btn btn-secondary">Docentes</button>
    <button type="button" class="btn btn-secondary">Alumnos</button>
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
            <a class="dropdown-item" href="#">Alumnos</a>
            <a class="dropdown-item" href="#">Docentes</a>
        </div>
    </div>
 </div>
@endsection