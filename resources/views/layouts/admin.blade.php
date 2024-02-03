<!doctype html>
<html lang="en">

       @include('includes.head')
  <body>

    
    <div class="site-wrap" id="home-section">
        @include('includes.adminNavbar')
        @yield('content')
        @include('includes.footer')
    </div>

  </body>

</html>