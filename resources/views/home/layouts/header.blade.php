<style>
  .menu-active {
    color: rgb(214, 0, 0) !important;
    font-weight: bold;
  }

  .navbar-custom {
    background: linear-gradient(135deg, #7a1f1f 0%, #a62828 45%, #5b1212 100%);
    backdrop-filter: blur(8px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.16);
    z-index: 1030;
    border-bottom: 2px solid #ffbf00;
    padding: 0.72rem 0;
    position: sticky;
    top: 0;
    width: 100%;
  }

  .navbar-custom .navbar-brand,
  .navbar-custom .nav-link,
  .navbar-custom .navbar-toggler-icon {
    color: #ffffff !important;
  }

  .navbar-custom .nav-link {
    font-weight: 600;
    padding: 0.5rem 0.95rem;
    margin: 0 0.2rem;
    border-radius: 999px;
    transition: background-color 0.2s ease, color 0.2s ease;
  }

  .navbar-custom .nav-link:hover,
  .navbar-custom .nav-link:focus {
    color: #ffe9b3 !important;
    background-color: rgba(255, 243, 196, 0.12);
  }

  .btn-admin-login {
    background: #fff3c4;
    color: #7a1f1f;
    border: none;
    border-radius: 999px;
    padding: 0.6rem 1.1rem;
    font-weight: 700;
    box-shadow: 0 4px 10px rgba(255, 243, 196, 0.18);
    transition: all 0.2s ease-in-out;
  }

  .btn-admin-login:hover {
    color: #7a1f1f;
    transform: translateY(-1px);
    box-shadow: 0 6px 14px rgba(255, 243, 196, 0.24);
  }

  .brand-badge {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    overflow: hidden;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #ffbf00, #ff7a00);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    border: 2px solid #fff3c4;
  }

  .brand-badge img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
<header class="sticky-top">
  <nav class="navbar navbar-expand-md navbar-light navbar-custom">
    <div class="container">
      <a class="navbar-brand font-weight-bold d-flex align-items-center gap-2 me-3" href="/">
        <span class="brand-badge">
          <img src="{{ asset($headerLogo ?? '/images/logo.png') }}" alt="Logo Bikin Nagih" onerror="this.style.display='none'; this.parentElement.innerHTML='BN';">
        </span>
        <span>Bikin Nagih</span>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 ms-md-4">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#products">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#contact">Detail Kami</a>
          </li>
        </ul>
        <div class="d-flex align-items-center ms-3">
          <a href="/login" class="btn btn-admin-login d-flex align-items-center gap-2">
            <i class="fas fa-user-circle"></i>
            <span>Login Admin</span>
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>