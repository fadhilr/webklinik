
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Pscyho Care Malang</title>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/iconUb.jpeg">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url(); ?>adminika/" class="logo">
      <span class="logo-mini"><b>Psycho</b>Care</span>
      <span class="logo-lg"><b>Admin</b> Psycho Care</span>
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
          <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("username"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
    <li class="">
          <a href="<?php echo base_url();?>c_admin/">
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
          <a href="<?php echo base_url();?>c_admin/tampilanNotifikasi">
            <i class="fa fa-envelope"></i> <span>Notifikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url(); ?>c_admin/tampilanAdminNotifikasi">Notifikasi Pelanggan</a></li>
            <li><a href="<?php echo base_url(); ?>c_admin/tampilanAdminNotifikasiAhli">Notifikasi Ahli</a></li>
            
          </ul>
        </li>
       
        <li class="">
          <a href="<?php echo base_url();?>c_admin/tampilanAdminKaryawan">
            <i class="fa fa-child"></i>
            <span>Karyawan</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <!--PAGE GUIDE -->
        <!--PAGE GALERI -->
         <li class="active">
          <a href="<?php echo base_url();?>c_admin/tampilanAdminAhli">
            <i class="fa fa-user-md"></i>
            <span>Ahli</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url();?>c_admin/tampilanAdminPasien">
            <i class="fa fa-smile-o"></i>
            <span>Pasien</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
       </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Daftar Ahli
        <small>Psycho Care malang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>c_admin/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>c_admin/tampilanAdminKaryawan/">Ahli</a></li>
        <li class="active">Lihat Ahli</li>
      </ol>
    </section>
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Ahli</h3>
            </div>
            <div class="col-lg-3 col-xs-6">
             <a href="<?php echo base_url();?>c_admin/tampilanAdminAhliTambah">
              <button type="button" class="btn  btn-success btn-lg"><i class="fa fa-plus"> </i>Tambah Ahli</button>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>No. HP</th>
                  <th>Foto Ahli</th>
                  <th>Status Akun</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   <?php
          foreach ($ahli as $a) {
          
        ?>
        <tr data-id="" >
                  <td><?php echo "$a[namaAhli]" ?></td>
                  <td><?php echo "$a[noHp]" ?></td>
                  <td><a href="<?php echo base_url(); ?>assets/images/foto/<?php echo "$a[fotoAhli]" ?>" data-lightbox="image-1" data-title="My caption">
          <img src="<?php echo base_url(); ?>assets/images/foto/<?php echo "$a[fotoAhli]" ?>" width="100px" height: "100px"></a></td>
                  <td><?php echo "$a[status]" ?></td>
                  <td><div class="btn-group">
                      <a href="<?php echo base_url(); ?>c_admin/tampilanAdminKaryawanDetail/<?php echo "$a[idAhli]" ?>" type="button" class="btn btn-info btn-flat"><i class="fa fa-info"></i></a>
                      
            <a href="" type="button" class="btn btn-warning btn-flat"><i class="fa fa-gear"></i></a>
                      <button type="button" class="btn btn-danger btn-flat hapus-member " id="hapus" 
            data-nama = "" data-id="" ><i class="fa fa-trash"></i></button>
                    </div></td>
                </tr>

        <?php
          }
        ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>CSS grade</th>
                  <th>Status Akun</th>
                  <th>Status Pembayaran</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>&copy; 2018 DEVELOPED BY <a href="<?php echo base_url(); ?>">IKA UB</a>.</strong> ALL RIGHTS RESERVED.
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
    
    $.ajaxSetup({
  type:"post",
  cache:false,
  dataType: "json"
  })
  
  $(document).on("click",".hapus-member",function(){
  var id=$(this).attr("data-id");
  var nama=$(this).attr("data-nama");
  swal({
    title: "Hapus "+ nama +" sebagai Member",
    text:"Yakin akan menghapus member ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Hapus",
    closeOnConfirm: true,
  },
    function(){
     $.ajax({
      url:"<?php echo base_url('adminika/hapus'); ?>",
      data:{id:id},
      success: function(){
        $("tr[data-id='"+id+"']").fadeOut("fast",function(){
          $(this).remove();
        });
      }
     });
  });
});
    
    
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
