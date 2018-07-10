<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="<?=base_url();?>assets/tle/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/tle/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/tle/plugins/datatables/dataTables.bootstrap4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-bell-o"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#"><i
            class="fa fa-user"></i></a>
          </li>
        </ul>
      </nav>

      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="index3.html" class="brand-link">
          <img src="<?=base_url();?>assets/tle/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">Ren-Dy</span>
        </a>

        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?=base_url();?>assets/tle/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Johar Putra</a>
            </div>
          </div>

          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fa fa-history"></i>
                  <p>
                    Sejarah
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Peminjaman</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Pengembalian</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-cogs"></i>
                  <p>Setting</p>
                </a>
              </li>

            </ul>

          </nav>
        </div>
      </aside>

      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm">
                <h1 class="m-0 text-dark">Setting</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="container-fluid">
            <div class="row">

              <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <!-- profile-user-img -->
                    <div class="image">
                      <img class="img-fluid" src="<?=base_url();?>assets/tle/dist/img/photo1.png" alt="User profile picture">
                      <button class="btn btn-info btn-block mt-3">
                        <i class="fa fa-camera"></i> Change Picture
                      </button>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="col-6">

                <div class="card">
                  <div class="card-body">
                    <div class="card-text">

                      <div class="row">
                        <div class="col">
                         <div class="form-group">
                          <label>Username</label>
                          <input class="form-control" type="text" disabled="" value="joharptr">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" value="joharptr@gmail.com">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Old Password</label>
                          <input class="form-control" type="password" value="oldpassword">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>New Password</label>
                          <input class="form-control" type="password" value="newpassword">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Alamat</label>
                          <input class="form-control" type="text" value="Ajibarang">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>No HP</label>
                          <input class="form-control" type="number" value="0812345678901234">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control" type="text" value="Johar Putra">
                    </div>

                    <button class="btn btn-info btn-block mt-3">
                      <i class="fa fa-check"></i> Save Changes
                    </button>

                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        Made with <i class="fa fa-heart text-danger"></i> by Human.
      </div>
      <strong>&copy 2018</strong>
    </footer>
  </div>

  <script src="<?=base_url();?>assets/tle/plugins/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/tle/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>assets/tle/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?=base_url();?>assets/tle/plugins/datatables/dataTables.bootstrap4.js"></script>
  <script src="<?=base_url();?>assets/tle/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="<?=base_url();?>assets/tle/plugins/fastclick/fastclick.js"></script>
  <script src="<?=base_url();?>assets/tle/dist/js/adminlte.min.js"></script>
  <script src="<?=base_url();?>assets/tle/dist/js/demo.js"></script>

</body>
</html>
