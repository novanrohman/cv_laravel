<nav class="navbar navbar-expand-lg fixed-top text-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="{{ url('/novan') }}">{{$brand}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ url('/novan') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ url('/novan/portfolio') }}">Portfolio</a>
        </li  >
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ url('/novan/contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
