@includeIf('layouts.heading')

<div class="flex full_vh overflow_hidden">

    @includeIf('layouts.sidenav')

    <section class="full_vh full_w">
        @includeIf('layouts.topbar')
        <div class="main_content">
            @yield('content')
        </div>
    </section>

</div>

@includeIf('layouts.footer')
