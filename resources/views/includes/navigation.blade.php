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


        <li class="nav-item {{ Request::route()->named('reportmodules.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('reportmodules.index') ? 'active' : '' }}"
                href="{{ route('reportmodules.index') }}">
                <i class="fas fa-newspaper text-green"></i> Modulo de reportes
            </a>
        </li>



        <li class="nav-item {{ Request::route()->named('customers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('customers.index') ? 'active' : '' }}"
                href="{{ route('customers.index') }}">
                <i class="fas fa-newspaper text-green"></i> Clientes
            </a>
        </li>




        <li class="nav-item {{ Request::route()->named('agendas.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('agendas.index') ? 'active' : '' }}"
                href="{{ route('agendas.index') }}">
                <i class="fas fa-newspaper text-green"></i> Agenda
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('billings.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('billings.index') ? 'active' : '' }}"
                href="{{ route('billings.index') }}">
                <i class="fas fa-newspaper text-green"></i> Facturización
            </a>
        </li>


        <li class="nav-item {{ Request::route()->named('case_customers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('case_customers.index') ? 'active' : '' }}"
                href="{{ route('case_customers.index') }}">
                <i class="fas fa-newspaper text-green"></i> Caso cliente
            </a>
        </li>


        <li class="nav-item {{ Request::route()->named('change_histories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('change_histories.index') ? 'active' : '' }}"
                href="{{ route('change_histories.index') }}">
                <i class="fas fa-newspaper text-green"></i> Historial de cambios
            </a>
        </li>



        <li class="nav-item {{ Request::route()->named('documents.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('documents.index') ? 'active' : '' }}"
                href="{{ route('documents.index') }}">
                <i class="fas fa-newspaper text-green"></i> Documentos
            </a>
        </li>


        <li class="nav-item {{ Request::route()->named('evidence_sections.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('evidence_sections.index') ? 'active' : '' }}"
                href="{{ route('evidence_sections.index') }}">
                <i class="fas fa-newspaper text-green"></i> Apartado de evidencias
            </a>
        </li>






    </ul>
</div>
