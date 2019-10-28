<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?= base_url('asset/'); ?> plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('asset/'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('asset/'); ?>dist/img/1.jpg" style="width:50%" alt="Avatar">
                  </div>

                  <h3 class="profile-username text-center">Muhammad Abu Bakar Sidik</h3>
                  <p class="text-muted text-center">Wringin Bondowoso</p>
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Teknik Informatika</b> <b class="float-right">2019</b><br>
                      <b class="text-muted text-left">Program Jurusan</b><a class="text-muted float-right">Tahun Lulus</a>
                    </li>
                    <li class="list-group-item">
                      <b>Guru Pendidikan Teknik</b> <b class="float-right">01 Nopember 2019</b><br>
                      <b class="text-muted text-left">Formasi Lamaran</b><a class="text-muted float-right">Tanggal Daftar</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Input Lamaran</b></a>
                  <a href="#" class="btn btn-primary btn-block"><b>Input Biodata</b></a>
                  <a href="#" class="btn btn-primary btn-block"><b>Keluar</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            
            </div>
            <!-- /.col -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header p-2">
                  BIODATA DIRI
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">
                    
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      
      <div class="card text-center">
        <div class="card-header">
           INFORMASI
        </div>
        <div class="card-body">
          <p class="card-text">Anda Belum Mengikuti Ujian</p>
          <a href="#" class="btn btn-primary">Ikuti Ujian</a>
        </div>
      <div class="card-footer text-muted">
            21 Nopember 2019
     </div>
    </div>
      <!-- /.content -->
    </div>

    
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-center d-none d-sm-block">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
      </div>
     
    </footer>

  </div>
  <!-- ./wrapper -->
  <script src="<?= base_url('asset/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('asset/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
  <script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
</body>

</html>