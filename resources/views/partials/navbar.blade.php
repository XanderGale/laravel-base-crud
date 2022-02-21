<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Comics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::route() && Request::route()->getName() === 'comics.index' ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('comics.index') }}">Home</a>
        </li>
        <li class="nav-item {{ Request::route() && Request::route()->getName() === 'comics.create' ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('comics.create') }}">Aggiungi nuovo elemento</a>
        </li>
      </ul>
    </div>
  </nav>