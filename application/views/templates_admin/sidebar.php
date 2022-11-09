<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-users-cog"></i> 
        </div>
        <div class="sidebar-brand-text mx-3 " style="font-family: cursive; ">ADMIN</div>
      </a>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard Admin</span></a>
        </li>

      <hr class="sidebar-divider my-0">

      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/data_motor') ?>">
          <i class="fa-solid fas fa-motorcycle"></i>
          <span>Data Motor</span></a>
        </li>
        
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/data_pesanan') ?>">
          <i class="fas fa-file-invoice"></i>
          <span>Penyewaan Motor</span></a>
        </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>



            <div class="topbar-divider d-none d-sm-block"></div>

              <ul class="na navbar-nav navbar-right">
                <?php if($this->session->userdata('username')) { ?>
                  <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                  <li class="ml-4"><?php echo anchor('auth/logout', 'Logout'
                  ) ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login', 'Login' )?></li>

                <?php } ?>
              </ul>
          </ul>

        </nav>
