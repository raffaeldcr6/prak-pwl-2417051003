<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">PWL App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" href="{{ url('/user') }}">List User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user/create') ? 'active' : '' }}" href="{{ route('user.create') }}">Tambah User</a>
        </li>
      </ul>
    </div>
  </div>
</nav>