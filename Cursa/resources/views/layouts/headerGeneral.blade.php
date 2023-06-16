<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#000000">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}"><img src="/images/LogoPagina.png" width="100" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

              <div class="dropdown">
                <a class="nav-link link-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Races
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="nav-link link-success" href="{{ url ('allRaces')}}" >All Races</a></li>
                  <li> <a class="nav-link link-success" href="{{ url ('finishedRaces')}}" >Finished Races</a></li>
                  <li> <a class="nav-link link-success" href="{{ url ('racesToStart')}}" >Races To Start</a></li>
                </ul>
              </div>

        </li>
        <li class="nav-item">
          <a class="nav-link link-success" href="{{ route('ranking') }}">Ranking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-success" href="{{ route('gallery') }}">Gallery</a>
        </li>
      </ul>
      <form action="{{ route('raceSearch') }}" method="POST" class="d-flex">
        @csrf
        <input class="form-control me-2" type="search" name="race" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

