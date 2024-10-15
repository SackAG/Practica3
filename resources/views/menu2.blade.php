@guest
<!-- Nav tabs -->
<ul
    class="nav nav-tabs"
    id="navId"
    role="tablist"
>
    <li class="nav-item">
        <a
            href="#tab1Id"
            class="nav-link active"
            data-bs-toggle="tab"
            aria-current="page"
            >Acerca de</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
            >contactenos</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link disabled" data-bs-toggle="tab"
            >ayuda</a
        >
    </li>

    <li class="nav-item" role="presentation">
        <a href="{{route('login')}}" class="nav-link"
            >Login</a
        >
    </li>
    @endguest
    @guest
    <li class="nav-item" role="presentation">
        <a href="{{route('register')}}" class="nav-link"
            >Register</a
        >
    </li>
</ul>

<div
    class="container"
>
    TEXTO DE BIENVENIDA
</div>

<footer>
<div
    class="alert alert-primary"
    role="alert"
>
    <strong>Tecnologias utilizadas!</strong
    ><br><a href="https://laravel.com/" class="alert-link" target="_blank">Laravel</a>
    <br><a href="https://getbootstrap.com/" class="alert-link" target="_blank">Bootstrap</a>
    <br><a href="https://herd.laravel.com/windows" class="alert-link" target="_blank">Herd</a>
    <br><a href="https://www.w3.org/Style/CSS/Overview.en.html" class="alert-link" target="_blank">CSS</a>
    <br><a href="https://lenguajehtml.com/html/" class="alert-link" target="_blank">HTML5</a>
</div>
</footer>


@endguest

