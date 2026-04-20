<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
  <div class="container">

    <!-- Logo / Brand -->
    <a class="navbar-brand fw-bold fs-4" href="#">
      <h1>Sistem Informasi Wisata</h1>
    </a>

    <!-- Toggle (Mobile) -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <!-- Menu kiri -->
      <ul class="navbar-nav me-auto ms-3">
        <li class="nav-item">
          <a class="nav-link active fw-semibold" href="#">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            Destinasi
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            Paket Wisata
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            Kontak
          </a>
        </li>
      </ul>

      <!-- Menu kanan -->
      <div class="d-flex gap-2">
        <a href="#" class="btn btn-outline-light rounded-pill
          px-4 fw-bold">Login</a>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-outline-light rounded-pill
          px-4 fw-bold">Logout</button>
        </form>
      </div>

    </div>
  </div>
</nav>