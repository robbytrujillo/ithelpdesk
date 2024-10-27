<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>assets/back/index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">IT Helpdesk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->username; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('dashboard') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>
            
          </li>
          
          <?php if (itadmin()) { ?>
          <li class="nav-header">DATA MASTER</li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Master Karyawan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= base_url('jabatan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('divisi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Divisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Karyawan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Ticket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('tiket') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Ticket</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">LAPORAN TICKET</li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('laporan') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header">PROFILE</li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('karyawan/profile/' . $this->session->id_users); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile User
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Log Out
              </p>
            </a>
            
          </li>
          
          <?php } else { ?>
            <li class="nav-item has-treeview">
            <a href="<?= base_url('tiket') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Ticket
              </p>
            </a>
            
          </li>    
          <li class="nav-header">PROFILE</li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('karyawan/profile/' . $this->session->id_users); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile User
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Log Out
              </p>
            </a>
            
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>