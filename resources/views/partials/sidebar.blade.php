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
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ ($content === "Dashboard") ? 'active' : '' }}">
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
            <a href="/pengalaman-kuliah" class="nav-link {{ ($content === "Members") ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                List Member
            
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/artikel" class="nav-link {{ ($content === "Transactions") ? 'active' : '' }}">
                <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Transaksi
            
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/hobi" class="nav-link {{ ($content === "Employees") ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                List Pegawai
            
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>