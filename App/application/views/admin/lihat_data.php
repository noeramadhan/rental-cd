


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->


      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?=base_url('index.php/login/tambah_cd');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>tambah CD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/tambah_user');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>tambah user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_cd');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>EDIT CD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_customer');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> edit customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_negara');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> edit negara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_pemain');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> edit pemain</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_transaksi');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> edit transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_genre');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> edit genre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_peminjaman');?>"  class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>EDIT PEMINJAMAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_user');?>" " class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>EDIT USER</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/login/edit_negara');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> LIHAT DATA</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <h1 style="color: red ; margin-left: 500px;" class="col-md-4;"> data CD</h1>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-body">
                  <?php if($this->session->flashdata('hasil')){ ?>
                    <div class="alert alert-info">
                      <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                  <?php } ?>

                  <div style="padding-bottom: 20px;">
                    <a href="<?php echo base_url().'index.php/login/tambah_cd/'; ?>" class="btn btn-info" role="button">
                      <i class="fa fa-plus"></i> Tambah Data
                    </a>
                  </div>
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 5%; text-align: center;">No</th>
                          <th style="width: 15%; text-align: center;">Nama</th>
                          <th style="width: 15%; text-align: center;">genre</th>
                          <th style="width: 15%; text-align: center;">stradara</th>
                          <th style="width: 15%; text-align: center;">produksi</th>
                          <th style="width: 15%; text-align: center;">tgl rilis</th>
                          <th style="width: 15%; text-align: center;">tahun</th>
                          <th style="width: 15%; text-align: center;">negara</th>
                          <th style="width: 15%; text-align: center;">durasi</th>
                          <th style="width: 15%; text-align: center;">rating</th>
                          <th style="width: 15%; text-align: center;">sinopsis</th>
                          <th style="width: 15%; text-align: center;">stok</th>
                          <th style="width: 15%; text-align: center;">status</th>
                          <th style="width: 15%; text-align: center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($datacd as $row): ?>
                          <tr>
                            <td class="text-center"><?php echo $row->id; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->genre; ?></td>
                            <td><?php echo $row->sutradara; ?></td>
                            <td><?php echo $row->produksi; ?></td>
                            <td><?php echo $row->tanggal_rilis; ?></td>
                            <td><?php echo $row->tahun; ?></td>
                            <td><?php echo $row->negara; ?></td>
                            <td><?php echo $row->durasi; ?></td>
                            <td><?php echo $row->rating; ?></td>
                            <td><?php echo $row->sinopsis; ?></td>
                            <td><?php echo $row->stok; ?></td>
                            <td><?php echo $row->status; ?></td>
                            <td class="text-center">
                              <div class="btn-group">
                                <a title="edit_cd" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/login/edit_cd/'.$row->id; ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/login/hapus_cd/'.$row->id; ?>"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          <?php  endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<br><br>

          <div class="content-wrapper">
            <h1 style="color: red ; margin-left: 500px;" class="col-md-4;"> data customers</h1>
            
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-body">
                  <?php if($this->session->flashdata('hasil')){ ?>
                    <div class="alert alert-info">
                      <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                  <?php } ?>

                  <div style="padding-bottom: 20px;">
                    <a href="<?php echo base_url().'index.php/login/edit_transaksi/'; ?>" class="btn btn-info" role="button">
                      <i class="fa fa-plus"></i> Tambah Data
                    </a>
                  </div>
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 15%; text-align: center;">username </th>
                          <th style="width: 15%; text-align: center;">password</th>
                          <th style="width: 15%; text-align: center;">nama</th>
                          <th style="width: 15%; text-align: center;">email</th>
                          <th style="width: 15%; text-align: center;">alamat</th>
                          <th style="width: 15%; text-align: center;">no hp</th>
                         
                          <th style="width: 15%; text-align: center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($datacus as $row): ?>
                          <tr>
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->password; ?></td>
                            <td><?php echo $row->nama; ?></td>
                             <td><?php echo $row->email; ?></td>
                              <td><?php echo $row->alamat; ?></td>
                               <td><?php echo $row->no_hp; ?></td>
                            
                            <td class="text-center">
                              <div class="btn-group">
                                <a title="edit_cd" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/login/edit_customer/'.$row->username; ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/login/hapus_customers/'.$row->username; ?>"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          <?php  endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <br><br>
        <div class="content-wrapper">
            <h1 style="color: red ; margin-left: 500px;" class="col-md-4;"> data transaksi</h1>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-body">
                  <?php if($this->session->flashdata('hasil')){ ?>
                    <div class="alert alert-info">
                      <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                  <?php } ?>

                  <div style="padding-bottom: 20px;">
                    <a href="<?php echo base_url().'index.php/login/edit_transaksi/'; ?>" class="btn btn-info" role="button">
                      <i class="fa fa-plus"></i> Tambah Data
                    </a>
                  </div>
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 5%; text-align: center;">No</th>
                          <th style="width: 15%; text-align: center;">tanggal pinjam</th>
                          <th style="width: 15%; text-align: center;">tanggal kembali</th>
                          <th style="width: 15%; text-align: center;">status</th>
                         
                          <th style="width: 15%; text-align: center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($datatrans as $row): ?>
                          <tr>
                            <td class="text-center"><?php echo $row->id; ?></td>
                            <td><?php echo $row->tanggal_pinjam; ?></td>
                            <td><?php echo $row->tanggal_kembali; ?></td>
                            <td><?php echo $row->status; ?></td>
                            
                            <td class="text-center">
                              <div class="btn-group">
                                <a title="edit_transaksi" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/login/edit_transaksi/'.$row->id; ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/login/hapus_customers/'.$row->id; ?>"><i class="fas fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          <?php  endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="<?=base_url();?>/assets/admin/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="<?=base_url();?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Morris.js charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="<?=base_url();?>/assets/admin/plugins/morris/morris.min.js"></script>
      <!-- Sparkline -->
      <script src="<?=base_url();?>/assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
      <!-- jvectormap -->
      <script src="<?=base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?=base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?=base_url();?>/assets/admin/plugins/knob/jquery.knob.js"></script>
      <!-- daterangepicker -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
      <script src="<?=base_url();?>/assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- datepicker -->
      <script src="<?=base_url();?>/assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="<?=base_url();?>/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <!-- Slimscroll -->
      <script src="<?=base_url();?>/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="<?=base_url();?>/assets/admin/plugins/fastclick/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="<?=base_url();?>/assets/admin/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?=base_url();?>/assets/admin/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?=base_url();?>/assets/admin/dist/js/demo.js"></script>
    </body>
    </html>
