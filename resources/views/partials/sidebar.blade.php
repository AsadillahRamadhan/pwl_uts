<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Kelompok 11</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-bottom: 390px;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Hello, {{ Auth::user()->username }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link {{ ($content === "Dashboard") ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/products" class="nav-link {{ ($content === "Products") ? 'active' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                List Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/movie" class="nav-link {{ ($content === "Movies") ? 'active' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                List Movie
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>