<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#000000">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{ url('/home-admin') }}"><img src="/images/LogoPagina.png" width="100" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link link-success fw-bold" style="color: #1EB808;" href="{{ url('races') }}">Races</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-success fw-bold" href="{{ url('insurers') }}">Insurers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-success fw-bold" href="{{ url('sponsors') }}">Sponsors</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link link-success fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
