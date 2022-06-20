<link rel="stylesheet" href="{{ asset('style/css/navbar.css') }}">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
    <!-- icono o nombre -->

    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo/sip.png') }}" alt="" width="40" height="40"
            class="d-inline-block align-text-top">
    </a>

    <a class="navbar-brand" href="{{ route('dashboard.index') }}">
      <i class="bi bi-flower1"></i>
      <span class="text-warning">ChadHotel</span>
    </a>
        
    <!-- boton del menu -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

      <!-- elementos del menu colapsable -->

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('transaction.index') }}">Transactions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Information
          </a>

          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('room.index') }}">Rooms</a></li>
            <li><a class="dropdown-item" href="{{ route('type.index') }}">Type</a><li>   
            <li><a class="dropdown-item" href="{{ route('roomstatus.index') }}">Status</a></li>
          </ul>
        </li>

        @if (auth()->user()->role == 'Super')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">Users</a>
          </li>
        @endif
      </ul>

      

      <ul class="dropdown-menu">
        @if (auth()->user()->role == 'Super')
            <li><a class="dropdown-item" href="{{ route('user.index') }}">User</a></li>
        @endif
    </ul>

      <hr class="d-md-none text-white-50">

     <a class="navbar-brand" href="{{ route('user.show', ['user' => auth()->user()->id]) }}">
        <i class="bi bi-flower1"></i>
        <span class="text-warning">Profile</span>
      </a>

      <a class="navbar-brand" href="{{ route('logout') }}">
        <i class="bi bi-flower1"></i>
        <span class="text-warning">Logout</span>
      </a>
      
      
    </div>
 
    </div>  
  </nav>
