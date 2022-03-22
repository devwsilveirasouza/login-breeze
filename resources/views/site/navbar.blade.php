<nav class="blue">
    <div class="nav-wrapper container">
        <a href="{{ route('home') }}" class="brand-logo light">Login Breeze</a>

        {{-- Menu Desktop --}}
        <ul class="right hide-on-med-and-down">
            {{-- Aparece se não estiver logado --}}
            @guest
                <li><a href=" {{ route('login') }} ">Login</a></li>
                <li><a href=" {{ route('register') }} ">Registre-se</a></li>
            @endguest
            {{-- Aparace quando estiver logado --}}
            @auth
                <li><a href=" {{route('dashboard')}} ">DASHBOARD</a></li>
            @endauth
        </ul>
    </div>
</nav>
