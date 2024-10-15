     <!-- Nav tabs -->
     <ul
     class="nav nav-tabs"
     id="navId"
     role="tablist"
 >
      {{-- <li class="nav-item dropdown">
         <a
             class="nav-link dropdown-toggle"
             data-bs-toggle="dropdown"
             href="#"
             role="button"
             aria-haspopup="true"
             aria-expanded="false"
             >Catalogos</a
         >
         <div class="dropdown-menu">
             <a class="dropdown-item" href="">Periodos</a>
             <a class="dropdown-item" href="">Plazas</a>

             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#tab4Id">Periodos</a>
         </div> --}}
         <li class="nav-item">
            <a
                href="{{route('UNO')}}"
                class="nav-link active"
                aria-current="page"
                >Catalogos</a
            >
            <li class="nav-item">
                <a
                    href="{{route('DOS')}}"
                    class="nav-link active"
              
                    aria-current="page"
                    >Horarios</a
                >
                <li class="nav-item">
                    <a
                        href="{{route('TRES')}}"
                        class="nav-link active"
                       
                        aria-current="page"
                        >Proyectos individuales</a
                    >
     <li class="nav-item">
         <a
             href="#tab1Id"
             class="nav-link active"
             data-bs-toggle="tab"
             aria-current="page"
             >Instrumentacion</a
         >
     </li>
     </li>
     <li class="nav-item">
        <a
            href="#tab1Id"
            class="nav-link active"
            data-bs-toggle="tab"
            aria-current="page"
            >Tutorias</a
        >
        <li class="nav-item">
            <select
                class="form-select form-select-lg"
                name=""
                id=""
            >
                <option selected>Periodo</option>
                <option value="">ENERO - JUNIO 24</option>
                <option value="">AGOSTO - DICIEMBRE 24</option>
                <option value="">ENERO - JUNIO 25</option>
            </select>
            <div class="mb-3">

            

     @guest
     <li class="nav-item" role="presentation">
         <a href="{{route('login')}}" class="nav-link"
             >Login</a
         >
     </li>
     @endguest

     @auth
     <li class="nav-link" role="presentation">
         <form method="POST" action="{{ route('logout') }}">
             @csrf

             <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                 this.closest('form').submit();">
                 {{ __('Log Out') }}
             </x-dropdown-link>
         </form>
     </li>
     @endauth
 </ul>
 
 
 <div
    class="container-xxl"
 >
    DESCRIPCION DEL SISTEMA COMO INICIO
 </div>
 

<footer>
 @Auth
 {{Auth::user()->name}}
 
 {{Auth::user()->email}}
 @endauth
</footer>