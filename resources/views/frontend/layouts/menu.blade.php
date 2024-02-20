<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ url('frontend') }}/assets/img/logo.png" alt="">
        <!-- <span>FlexStart</span> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <!-- <li><a class="nav-link scrollto " href="#services">Services</a></li> -->
          <li class="nav-link scrollto dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Chatbot Development</a></li>

              <li><a href="#">Drupal Development</a></li>
              <li><a href="#">CMS Development</a></li>
              <li><a href="#">App Store Development</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Social Media Marketing</a></li>
              <li><a href="#">SEM</a></li>
              <li><a href="#">SEO</a></li>
            </ul>
          </li>

          <li><a href="{{ route('blogs.index')}}">Blog</a></li>

          <li><a class="nav-link scrollto" href="{{ route('contact-us.index')}}">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                </div><div>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
