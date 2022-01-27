@include('layouts.heading')
  
  <div class="flex full_vh overflow_hidden">

    <section class="sidenav full_vh br_1">
      @include('layouts.sidenav')
    </section>

    <section class="full_vh full_w">

      <div class="topbar flex flex_x_between bb_1 flex_y_center">
        @include('layouts.topbar')
      </div>

      <div class="main_content">
        @yield('content')
      </div>

    </section>

  </div>

@include('layouts.footer')


