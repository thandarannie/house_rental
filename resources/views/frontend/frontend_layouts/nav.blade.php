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
            @foreach($townships as $row)
            <a class="dropdown-item" href="#">{{$row->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="/agent" class="nav-link">Our Team</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>




