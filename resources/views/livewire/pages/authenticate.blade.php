@include('layouts.heading')

    <div class="auth-container">
        <h1>@yield('authTitle','title')</h1>
        <br>
       

        @yield('content')
    </div>

@include('layouts.footer')