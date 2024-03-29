<header class="site-navbar site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center position-relative">

    <div class="col-3">
      <div class="site-logo">
        <a href="{{route('index')}}"><strong>CarRental</strong></a>
      </div>
    </div>

    <div class="col-9  text-right">
      
      <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

      <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
        <ul class="site-menu main-menu js-clone-nav ml-auto ">
          <li class="active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
          <li><a href="{{route('listing')}}" class="nav-link">Listing</a></li>
          <li><a href="{{route('testimonial')}}" class="nav-link">Testimonials</a></li>
          <li><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
          <li><a href="{{route('about')}}" class="nav-link">About</a></li>
          <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
        </ul> 
      </nav>
    </div>
    
  
        @if (Route::has('login'))
            @auth
                <!-- <a href="{{route('contact')}}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                    Admin
                </a> -->
                <a href="{{route('cars')}}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                    Admin
                  </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                    Login<i class="fa fa-arrow-right ms-3"></i>
                </a>
            @endauth
        @endif
     
</div>
</div>

</header>
<script>
    anchors = Array.from(document.getElementsByClassName("nav-item nav-link"))

    anchors.forEach(function (anchor) {
        if (anchor.href === window.location.href) {
            anchor.className = "nav-item nav-link active"
        } else {
            anchor.className = "nav-item nav-link"
        }
    })

</script>
