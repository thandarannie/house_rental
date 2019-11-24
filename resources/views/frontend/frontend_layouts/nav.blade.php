<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">House Rental Mandalay</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Township
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Aung Myay Thar Zan</a>
            <a class="dropdown-item" href="#">Chan Aye Thar Zan</a>
            <a class="dropdown-item" href="#">Mahar Aung Myay</a>
            <a class="dropdown-item" href="#">Chan Mya Thar Si</a>
            <a class="dropdown-item" href="#">Pyi Gyi Ta Kon</a>
          </div>
        </li>

        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>

        
        
        <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="/agent" class="nav-link">Our Team</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        @guest 
            <!--if not login --> <!-- Middleware/Redirect --> <!-- Kernel.php -->
           <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <!-- resource/views/auth/login.blade.php -->

          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Sign up</a>
          </li>


          @else

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{Auth::user()->name}}
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    @hasrole('owner')
     
    <a class="dropdown-item" href="">Post</a>

    @endhasrole

    <a class="dropdown-item" href="{{route('user.edit',1)}}">Profile</a>


    <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Logout</a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" 
      style="display: none;">

      @csrf
      </form>

   </div>
   </li>


   @endguest


      </ul>
    </div>
  </div>
</nav>




