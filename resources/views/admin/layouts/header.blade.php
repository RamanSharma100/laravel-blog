
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Admin Dashboard</a>
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
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item">
          <a class="nav-link {{Request::is('admin/dashboard') ? 'active' : ''}}"  href="{{url('/admin/dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('admin/uploads') ? 'active' : ''}}" href="{{url('/admin/uploads')}}">Uploads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('/admin/users')}}">Users</a>
        </li>
        
      </ul>
      <a href="{{ route('admin.logout') }}" class="btn btn-outline-light">Logout</a>
      <a href="{{ route('admin.register') }}" class="btn btn-light mx-1">Register</a>
    </div>
  </div>
</nav>