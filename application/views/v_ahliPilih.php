
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ahli Psycho Care</title>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/iconUb.jpeg">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url(); ?>adminika/" class="logo">
      <span class="logo-mini"><b>Psycho</b>Care</span>
      <span class="logo-lg"><b>Ahli</b> Psycho Care</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo base_url(); ?>login/logoutAdmin" >KELUAR <i class="fa fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ahli</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li class="">
          <a href="<?php echo base_url();?>c_ahli/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>

        <!--PAGE GUIDE -->
        <li class="treeview">
          <a href="<?php echo base_url();?>c_ahli/tampilanAhliNotifikasi">
            <i class="fa fa-envelope"></i> <span>Notifikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url(); ?>c_ahli/tampilanAhliNotifikasi">Notifikasi Pelanggan</a></li>
            <li><a href="<?php echo base_url(); ?>c_ahli/tampilanAhliNotifikasiAdmin">Notifikasi Admin</a></li>
            
          </ul>
        </li>
        
        <!--PAGE GUIDE -->
        <!--PAGE GALERI -->
         <li class="active">
          <a href="<?php echo base_url();?>c_ahli/tampilanAhliPeriksa">
            <i class="fa fa-stethoscope"></i>
            <span>Data pasien pemeriksaan</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url();?>c_ahli/tampilanAhliTerapi">
            <i class="fa fa-medkit"></i>
            <span>Data pasien terapi</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
       </ul>
    </section>
  </aside>
  
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pilih Karyawan Pemeriksaan dan observasi untuk pasien <?php echo "$namaPelanggan" ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pilih Karyawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-3">
    </div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pilih Karyawan </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url(); ?>c_ahli/set_pilihKaryawan/" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Pilih Pemeriksa Psikomotor</label>
                  <input type="hidden" id="idPelanggan" class="form-control pelanggan" name = "idPelanggan" value="<?php echo $idPelanggan; ?>" >
                  <select  id="karyawan1" name ="karyawan1" class="form-control select" style="width: 100%;" required>
                
                <option <?php if($idPelanggan!='') {echo "selected";}?> value="<?php echo $idPelanggan; ?>" >
          <?php foreach($listPelanggan as $f){
            if($idPelanggan==$f->idPelanggan){
              echo $namaKaryawan1;
            }
          }
          ?>
        </option>
          <?php
          if($idPelanggan=='') {
        ?>
          <?php
          }
        ?>
                  <?php foreach($listKaryawan as $f){
            
          ?>
          <option value="<?php echo $f->idKaryawan; ?>" ><?php echo $f->username; ?></option>
          
                  <?php
          }
          ?>
                  
                </select>
                <label>Pilih Pemeriksa Koginisi</label>
                 <select  id="karyawan2" name ="karyawan2" class="form-control select" style="width: 100%;" required>
          <option <?php if($idPelanggan!='') {echo "selected";}?> value="<?php echo $idPelanggan; ?>" >
          <?php foreach($listPelanggan as $f){
            if($idPelanggan==$f->idPelanggan){
              echo $namaKaryawan2;
            }
          }
          ?>
        </option>
          <?php
          if($idPelanggan=='') {
        ?>
          <?php
          }
        ?>
         
          
                  <?php foreach($listKaryawan as $f){
            
          ?>
          <option value="<?php echo $f->idKaryawan; ?>" ><?php echo $f->username; ?></option>
          
                  <?php
          }
          ?>
                  
                </select>
                <label>Pilih Pemeriksa Afeksi</label>
                  <select  id="karyawan3" name ="karyawan3" class="form-control select" style="width: 100%;" required>
           <option <?php if($idPelanggan!='') {echo "selected";}?> value="<?php echo $idPelanggan; ?>" >
          <?php foreach($listPelanggan as $f){
            if($idPelanggan==$f->idPelanggan){
              echo $namaKaryawan3;
            }
          }
          ?>
        </option>
          <?php
          if($idPelanggan=='') {
        ?>
          <?php
          }
        ?>
         
          
                  <?php foreach($listKaryawan as $f){
            
          ?>
          <option value="<?php echo $f->idKaryawan; ?>" ><?php echo $f->username; ?></option>
          
                  <?php
          }
          ?>
                  
                </select>
                <label>Pilih Pemeriksa Akademik</label>
                  <select  id="karyawan4" name ="karyawan4" class="form-control select" style="width: 100%;" required>
               <option <?php if($idPelanggan!='') {echo "selected";}?> value="<?php echo $idPelanggan; ?>" >
          <?php foreach($listPelanggan as $f){
            if($idPelanggan==$f->idPelanggan){
              echo $namaKaryawan4;
            }
          }
          ?>
        </option>
          <?php
          if($idPelanggan=='') {
        ?>
          <?php
          }
        ?>
         
          
                  <?php foreach($listKaryawan as $f){
            
          ?>
          <option value="<?php echo $f->idKaryawan; ?>" ><?php echo $f->username; ?></option>
          
                  <?php
          }
          ?>
                  
                </select>
                <label>Pilih Pemeriksa Sosial</label>
                  <select  id="karyawan5" name ="karyawan5" class="form-control select" style="width: 100%;" required>
             <option <?php if($idPelanggan!='') {echo "selected";}?> value="<?php echo $idPelanggan; ?>" >
          <?php foreach($listPelanggan as $f){
            if($idPelanggan==$f->idPelanggan){
              echo $namaKaryawan5;
            }
          }
          ?>
        </option>
          <?php
          if($idPelanggan=='') {
        ?>
          <?php
          }
        ?>
         
          
                  <?php foreach($listKaryawan as $f){
            
          ?>
          <option value="<?php echo $f->idKaryawan; ?>" ><?php echo $f->username; ?></option>
          
                  <?php
          }
          ?>
                  
                </select>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>&copy; 2019 DEVELOPED BY <a href="<?php echo base_url(); ?>">Psycho Care</a>.</strong> ALL RIGHTS RESERVED.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
