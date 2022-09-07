<div class="layoutNav shadow" id="#navDesktop">
    <div class="nav-items">
        <div class="sidenav-menu-heading">Dashboard</div>
        <a class="nav-link @if(Route::currentRouteName()=="admin") active @endif" 
        href="{{ route('admin') }}">
            <i class="fas fa-tachometer-alt text-gray pr-1"></i> Dashboard
        </a>

        <div class="sidenav-menu-heading">Registros</div>
        <a class="nav-link @if(Route::currentRouteName()=="records.index") active @endif" 
        href="{{ route('records.index') }}">
            <i class="fas fa-cloud-download-alt text-gray pr-1"></i> Registros
        </a>

    </div>
    <div class="nav-footer py-4">
        <p>Logueado como:</p>
        <p>{{ ucwords(Auth::user()->name) }}</p>
    </div>
</div>