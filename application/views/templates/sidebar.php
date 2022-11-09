<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-motorcycle"></i>
        </div>
        <div class="sidebar-brand-text mx-3 " style="font-family: cursive; ">Motor Trail.com</div>
      </a>

      <hr class="sidebar-divider my-0">

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Kategori
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-layer-group"></i>
          <span>MERK MOTOR</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-navy py-2 collapse-inner rounded">
            <a style="text-decoration: none; color: white;" class="collapse-item" href="<?= base_url('kategori/honda') ?>"><i class="fas fa-motorcycle"></i> Honda</a>
            <hr>
            <a style="text-decoration: none; color: white;" class="collapse-item" href="<?= base_url('kategori/yamaha') ?>"><i class="fas fa-motorcycle"></i> Yamaha</a>
            <hr>
            <a style="text-decoration: none; color: white;" class="collapse-item" href="<?= base_url('kategori/viar') ?>"><i class="fas fa-motorcycle"></i> Viar</a>
            <hr>
            <a style="text-decoration: none; color: white;" class="collapse-item" href="<?= base_url('kategori/sm_sport') ?>"><i class="fas fa-motorcycle"></i> SM Sport</a>
            <hr>
            <a style="text-decoration: none; color: white;" class="collapse-item" href="<?= base_url('kategori/kawasaki') ?>"><i class="fas fa-motorcycle"></i> Kawasaki</a>
            <hr>
          </div>
        </div>
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
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <a style="text-decoration: none; color: black;" href="<?php echo base_url('dashboard/detail_keranjang') ?>">
            <?php
            $keranjang = 'Pesan : ' . $this->cart->total_items() . ' Unit Motor'
            ?>

            <?= $keranjang ?>
          </a>
          <div class="topbar-divider d-none d-sm-block"></div>

          <ul class="na navbar-nav navbar-right">
            <?php if ($this->session->userdata('username')) { ?>
              <li>
                <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
              </li>
              <li class="ml-4"><?php echo anchor(
                                  'form_login/logout',
                                  'Logout'
                                ) ?></li>
            <?php } else { ?>
              <li><?php echo anchor('form_login', 'Login') ?></li>

            <?php } ?>
          </ul>
          </ul>

        </nav>