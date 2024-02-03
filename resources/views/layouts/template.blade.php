<!doctype html>
<html lang="en">
@include('includes.head')

  <body>

    
    <div class="site-wrap" id="home-section">
            @include('includes.spinner')
            @include('includes.navbar')


            @yield('content')


            @include('includes.footer')
     </div>   

           @include('includes.jsFooter')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    

  </body>

</html>