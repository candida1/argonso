<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}">
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}"
                href="{{ route('ejemplo.index') }}">
                <i class="fas fa-book text-purple"></i> Ejemplo

            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('icons.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('icons.index') ? 'active' : '' }}"
                href="{{ route('icons.index') }}">
                <i class="ni ni-box-2 text-orange"></i> Nucleo Icons
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}">
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>



    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">


        <li class="nav-item {{ Request::route()->named('tags.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('tags.index') ? 'active' : '' }}"
                href="{{ route('tags.index') }}">
                <i class="fas fa-dove text-orange"></i> Tags (Normal)
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('articles.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('articles.index') ? 'active' : '' }}"
                href="{{ route('articles.index') }}">
                <i class="fas fa-newspaper text-green"></i> Articles (Relacionado)
            </a>
        </li>
        <li class="nav-item {{ Request::route()->named('lawyers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('lawyers.index') ? 'active' : '' }}"
                href="{{ route('lawyers.index') }}">
                <i class="fas fa-newspaper text-green"></i> Abogado
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('activities.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('activities.index') ? 'active' : '' }}"
                href="{{ route('activities.index') }}">
                <i class="fas fa-newspaper text-green"></i> Actividades
            </a>
        </li>









    </ul>
</div>
