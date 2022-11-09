s<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
              </div>
              <form method="post" action="<?php echo base_url('registrasi/daftar') ?>" class="user">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Nama Anda" name="nama" required>

                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" pattern="+@gmail.com" placeholder="Email Anda" name="username" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="password form-control form-control-user"  placeholder="Password" name="password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="confirmPassword form-control form-control-user" placeholder="Ulangi Password" name="password" required>
                  </div>
                </div>

                <button type="submit" class="button btn btn-primary btn-user btn-block">Daftar</button>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('form_login/index') ?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  