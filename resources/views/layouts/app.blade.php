@include('layouts.heading')
  
  <div class="flex full_vh overflow_hidden">

    @include('layouts.sidenav')

    <section class="full_vh full_w">
     
      @include('layouts.topbar')

      <div class="main_content">

        @yield('content')
        
      </div>

    </section>

  </div>

@include('layouts.footer')


