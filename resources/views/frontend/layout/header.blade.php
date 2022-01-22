
 <!-- ======= Header/Navbar ======= -->
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
  </button>
        <a class="navbar-brand text-brand" href="index.html">Recidency<span class="color-b">Maintainance</span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{url('home')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{url('about')}}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('property') ? 'active' : '' }}" href="{{url('property')}}">Property</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }} " href="{{url('blog')}}">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Security</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="property-single.html">Guard</a>
                        <a class="dropdown-item " href="blog-single.html">CCTV</a>              
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sevices</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="{{url('cleaning')}}">Cleaning</a>
                        <a class="dropdown-item " href="{{url('deep_cleaning')}}">Deep Cleaning</a>
                        <a class="dropdown-item " href="{{url('documentation')}}">Documentation Service</a>
                        <a class="dropdown-item " href="{{url('rent')}}">Rent & Operations</a>
                         
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maintainance</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="property-single.html">House Indoor</a>
                        <a class="dropdown-item " href="blog-single.html">Safety Tank</a>
                        <a class="dropdown-item " href="blog-single.html">Water Tank</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }} " href="{{url('contact')}}">Contact</a>
                </li>
            </ul>
        </div>

        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
    <i class="bi bi-search"></i>
  </button>

    </div>
</nav>


