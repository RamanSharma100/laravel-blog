
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Laravel Blog</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link {{Request::is('/') ? 'active' : ''}}"  href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('tutorials') ? 'active' : ''}}" href="{{url('/tutorials')}}">Tutorials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="{{url('/about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{url('/contact')}}">Contact Us</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>