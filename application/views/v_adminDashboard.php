<?php
if($this->session->userdata('username')==null){
  ?>
  <script>
   alert("login gagal");
  </script>
  <?php
  redirect($home."welcome/");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Psycho Care Malang</title>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/iconUb.jpeg">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/skins/_all-skins.min.css">
  <!-- lighbox -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lightbox/dist/css/lightbox.css'); ?>">
  <!-- pop up -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url(); ?>c_admin/" class="logo">
      <span class="logo-mini"><b>P</b>CM</span>
      <span class="logo-lg"><b>Admin</b>Psycho Care</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning count"></span>
              </a>
              <ul class="dropdown-menu notif">
                
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
         <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo base_url(); ?>login/logout" >KELUAR <i class="fa fa-power-off"></i></a>
          </li>
        </ul>
      </div>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url(); ?>assets/images/foto/<?php echo $this->session->userdata('fotoProfil')?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('username')?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/images/foto/<?php echo $this->session->userdata('fotoPelanggan')?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('username')?>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                </li>
              </ul>
            </li>
          </ul>
        </div>
      <!-- /.navbar-custom-menu -->
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
		<li class="active">
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
         <li class="">
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
        <li class="">
          <a href="<?php echo base_url();?>c_admin/tampilanAdminHarga">
            <i class="fa fa-money"></i>
            <span>Harga</span>
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
        DASHBOARD
      </h1>
    </section>
    <section class="content">
	
      <div class="row">
        <div class="col-lg-2 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $jumlahPelanggan;?></h3>
              <p>TOTAL TELAH REGISTRASI</p>
            </div>
            <div class="icon">
              <i class="fa fa-table"></i>
            </div>
            <a href="<?php echo base_url(); ?>adminika/lihat/" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $jumlahPelangganPending;?></h3>
              <p>TOTAL PELANGGAN PENDING</p>
            </div>
            <div class="icon">
              <i class="fa fa-table"></i>
            </div>
            <a href="#" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <div class="col-lg-2 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $jumlahPelangganBayar;?></h3>
              <p>TOTAL TELAH MEMBAYAR</p>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="<?php echo base_url(); ?>adminika/memberMembayar/" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <div class="col-lg-2 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $jumlahPelangganPeriksa;?></h3>
              <p>TOTAL MELAKUKAN PEMERIKSAAN</p>
            </div>
            <div class="icon">
              <i class="fa fa-eyedropper"></i>
            </div>
            <a href="<?php echo base_url(); ?>adminika/memberTerkirim/" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $jumlahPelangganBayar2;?></h3>
              <p>TOTAL MELAKUKAN TERAPI</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-paper-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>adminika/memberTerkirim/" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $jumlahPelangganSelesai;?></h3>
              <p>TOTAL TELAH SELESAI&emsp;&emsp;  </p>
            </div>
            <div class="icon">
              <i class="fa  fa-check-square-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>adminika/memberTerkirim/" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
	  
	  <div class="row">
        <div class="col-sm-6 col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan Pending</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
				 <th>No</th>
                  <th>Nama</th>
                  <th>Foto Pasien</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
          foreach ($pelangganPending as $a) {
          
        ?>
        <tr data-id="" >
                  <td><?php echo "$a[idPelanggan]"?></td>
                  <td><?php echo "$a[namaPelanggan]" ?></td>
                  <td><a href="<?php echo base_url(); ?>assets/images/foto/<?php echo "$a[fotoPelanggan]" ?>" data-lightbox="image-1" data-title="My caption">
          <img src="<?php echo base_url(); ?>assets/images/foto/<?php echo "$a[fotoPelanggan]" ?>" width="100px" height: "100px"></a></td>
                  <td><div class="btn-group">
                      <a href="<?php echo base_url(); ?>c_admin/tampilanAdminPasienDetail/<?php echo "$a[idPelanggan]" ?>" type="button" class="btn btn-info btn-flat"><i class="fa fa-info"></i></a>
                      <button type="button" class="btn btn-success btn-flat ijazah-valid" 
            data-nama = "<?php echo "$a[namaPelanggan]"?>" data-id="<?php echo "$a[idPelanggan]"?>" ><i class="fa fa-check"></i></button>
            <a href="<?php echo base_url(); ?>c_admin/tampilanAdminNotifikasi/<?php echo "$a[idPelanggan]" ?>" type="button" class="btn btn-warning btn-flat"><i class="fa fa-send"></i></a>
                      <button type="button" class="btn btn-danger btn-flat hapus-member " id="hapus" 
            data-nama = "" data-id="" ><i class="fa fa-trash"></i></button>
                    </div></td>
                  
                </tr>

        <?php
          }
        ?>
				
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		<div class="col-sm-6 col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan Melakukan Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Bukti Transfer</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
			 <?php
          foreach ($pelangganBayar1 as $a) {
          
        ?>
        <tr data-id="" >
                  <td><?php echo "$a[idPelanggan]"?></td>
                  <td><?php echo "$a[namaPelanggan]" ?></td>
                  <td><a href="<?php echo base_url(); ?>assets/images/pembayaran/<?php echo "$a[buktiPembayaran1]" ?>" data-lightbox="image-1" data-title="My caption">
          <img src="<?php echo base_url(); ?>assets/images/pembayaran/<?php echo "$a[buktiPembayaran1]" ?>" width="100px" height: "100px"></a></td>
                  <td><div class="btn-group">
                      <a href="" type="button" class="btn btn-info btn-flat"><i class="fa fa-info"></i></a>
                      <button type="button" class="btn btn-success btn-flat pembayaran-valid" 
            data-nama2 = "<?php echo "$a[namaPelanggan]"?>" data-id2="<?php echo "$a[idPelanggan]"?>" ><i class="fa fa-check"></i></button>
            <a href="" type="button" class="btn btn-warning btn-flat"><i class="fa fa-send"></i></a>
                      <button type="button" class="btn btn-danger btn-flat hapus-member " id="hapus" 
            data-nama2 = "" data-id="" ><i class="fa fa-trash"></i></button>
                    </div></td>
                  
                </tr>

        <?php
          }
        ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		</div>
    <div class="row">
		<div class="col-sm-6 col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan Melakukan Pembayaran untuk terapi dan layanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Bukti Transfer</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
       <?php
          foreach ($pelangganBayar2 as $a) {
          
        ?>
        <tr data-id="" >
                  <td><?php echo "$a[idPelanggan]"?></td>
                  <td><?php echo "$a[namaPelanggan]" ?></td>
                  <td><a href="<?php echo base_url(); ?>assets/images/pembayaran/<?php echo "$a[buktiPembayaran2]" ?>" data-lightbox="image-1" data-title="My caption">
          <img src="<?php echo base_url(); ?>assets/images/pembayaran/<?php echo "$a[buktiPembayaran2]" ?>" width="100px" height: "100px"></a></td>
                  <td><div class="btn-group">
                      <a href="" type="button" class="btn btn-info btn-flat"><i class="fa fa-info"></i></a>
                      <button type="button" class="btn btn-success btn-flat pembayaran-valid2" 
            data-nama2 = "<?php echo "$a[namaPelanggan]"?>" data-id2="<?php echo "$a[idPelanggan]"?>" ><i class="fa fa-check"></i></button>
            <a href="" type="button" class="btn btn-warning btn-flat"><i class="fa fa-send"></i></a>
                      <button type="button" class="btn btn-danger btn-flat hapus-member " id="hapus" 
            data-nama2 = "" data-id="" ><i class="fa fa-trash"></i></button>
                    </div></td>
                  
                </tr>

        <?php
          }
        ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
		
      <!-- /.row -->
    </section>
    <input type="hidden" id="alumni-id" name = "alumni-id" value="<?php echo $this->session->userdata('idAdmin')?>" >
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>&copy; 2018 DEVELOPED BY <a href="<?php echo base_url(); ?>">Psycho Care Malang</a>.</strong> ALL RIGHTS RESERVED.
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
<!-- lightbox -->
<script src="<?php echo base_url(); ?>/assets/lightbox/dist/js/lightbox.js"></script>
<!-- page script -->
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
<script>
  $(function () {
	  $.ajaxSetup({
	type:"post",
	cache:false,
	dataType: "json"
	})
	
	$(document).on("click",".info-pembayaran",function(){
	var id=$(this).attr("data-id");
	var harga=$(this).attr("data-harga");
	swal({
		title: "Total Harga : Rp "+ harga +" ,-",
		text:"Pembayaran harus sesuai dengan harga",
		type: "info",
		confirmButtonText: "Oke",
		closeOnConfirm: true,
	},
		);
});

$(document).on("click",".pembayaran-valid",function(){
	var id=$(this).attr("data-id2");
	var nama=$(this).attr("data-nama2");
	swal({
		title: "Pembayaran atas nama "+ nama +" Valid",
		text:"Yakin Pemabayaran ini valid?",
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "Yakin",
		closeOnConfirm: true,
	},
		function(){
		 $.ajax({
			url:"<?php echo base_url('c_admin/pembayaranValid'); ?>",
			data:{id:id},
			success: function(){
				$("tr[data-id2='"+id+"']").fadeOut("fast",function(){
					$(this).remove();
				});
			}
		 });
	});
});

$(document).on("click",".pembayaran-valid2",function(){
  var id=$(this).attr("data-id2");
  var nama=$(this).attr("data-nama2");
  swal({
    title: "Pembayaran atas nama "+ nama +" Valid",
    text:"Yakin Pemabayaran ini valid?",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Yakin",
    closeOnConfirm: true,
  },
    function(){
     $.ajax({
      url:"<?php echo base_url('c_admin/pembayaranValid2'); ?>",
      data:{id:id},
      success: function(){
        $("tr[data-id2='"+id+"']").fadeOut("fast",function(){
          $(this).remove();
        });
      }
     });
  });
});

$(document).on("click",".ijazah-valid",function(){
	var id=$(this).attr("data-id");
	var nama=$(this).attr("data-nama");
	swal({
		title: "Biodata atas nama  "+ nama +" Valid",
		text:"Yakin Biodata ini valid?",
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "Yakin",
		closeOnConfirm: true,
	},
		function(){
		 $.ajax({
			url:"<?php echo base_url('c_admin/biodataValid'); ?>",
			data:{id:id},
			success: function(){
				$("tr[data-id='"+id+"']").fadeOut("fast",function(){
					$(this).remove();
				});
			}
		 });
	});
});

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
			url:"<?php echo base_url('Adminika/hapus'); ?>",
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

  $(document).ready(function(){
 var id=$('#alumni-id').val();
 console.log(id);

 function load_unseen_notification(view = '')
 {
   
  $.ajax({
   url:"<?php echo base_url('Notifikasi/admin'); ?>",
   method:"POST",
   data:{view:view,id:id},
   dataType:"json",
   success:function(data)
   {
    $('.notif').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});

  $(document).on("click",".info-notif",function(){
  var nama=$(this).attr("data-nama");
  var pesan=$(this).attr("data-pesan");
  console.log(nama);
  swal({
    title: "Notifikasi dari :  "+ nama +"",
    text: pesan,
    type: "info",
    confirmButtonText: "Oke",
    closeOnConfirm: true,
  },
    );
});
</script>
</body>
</html>
