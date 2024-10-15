@extends('inicio2')
    
@section('contenidotres')
    

<div class="btn-group">
    <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="triggerId"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        Proyectos individuales
    </button>
    <div
        class="dropdown-menu dropdown-menu-start"
        aria-labelledby="triggerId"
    >
        <a class="dropdown-item" href="#">Capacitacion</a>
        <a class="dropdown-item" href="#">Asesorias</a>
        <a class="dropdown-item" href="#">Proyectos</a>
        <a class="dropdown-item" href="#">Material didactico</a>
        <a class="dropdown-item" href="#">Docencia e inv</a>
        <a class="dropdown-item" href="#">Asesorias Proyectos ext</a>
        <a class="dropdown-item" href="#">Asesorias ss</a>
        
    </div>
 </div>
@endsection