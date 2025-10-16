@php
    // Detect common auth-related routes/paths to simplify the navbar on those pages
    $isAuthPage =
        request()->is('login') ||
        request()->is('register') ||
        request()->is('password/*') ||
        request()->is('passwords/*') ||
        request()->is('email/*') ||
        request()->is('verification*');
@endphp

<div class="barra-superior">
    <div class="logo">Ecommerce</div>
    <nav>
        @unless ($isAuthPage)
            <a href="{{ url('/') }}" class="nav-link">Inicio</a>
            <a href="{{ url('products') }}" class="nav-link">Productos</a>
            <a href="#" class="nav-link">Contacto</a>
        @endunless

        {{-- Authentication links (always visible) --}}
        @guest
            @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <div class="nav-link" style="display:inline-block">
                <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
                <div style="display:inline-block; margin-left:8px">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                </div>
            </div>
        @endguest
    </nav>
</div>
