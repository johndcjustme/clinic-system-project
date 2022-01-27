@include('layouts.heading')

    <div class="auth-container full_w full_vh flex flex_y_center flex_x_center flex_column overflow_hidden">


        <div class="overflow_y full_w p_20">
            <div class="card" style="max-width: 270px; margin: auto">
            
                @include('livewire.components.atoms.auth-dango-logo')
                <br>
                <h4>@yield('authTitle','title')</h4>
                @yield('content')

            </div>
        </div>
    </div>

@include('layouts.footer')