
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Karyawan Psycho Care Malang</title>
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
    <a href="<?php echo base_url(); ?>c_karyawan/" class="logo">
      <span class="logo-mini"><b>P</b>CM</span>
      <span class="logo-lg"><b>Karyawan</b> Psycho Care</span>
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
            <a href="<?php echo base_url(); ?>login/logout" >KELUAR <i class="fa fa-power-off"></i></a>
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
          <p><?php echo $this->session->userdata('username')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li class="">
          <a href="<?php echo base_url();?>c_karyawan/">
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
        <li class="">
          <a href="<?php echo base_url();?>c_karyawan/tampilanKaryawanNotifikasi">
            <i class="fa fa-envelope"></i>
            <span>Notifikasi</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        
        <!--PAGE GUIDE -->
        <!--PAGE GALERI -->
         <li class="active">
          <a href="<?php echo base_url();?>c_karyawan/tampilanKaryawanPeriksa">
            <i class="fa fa-stethoscope"></i>
            <span>Data pasien yang diperiksa</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url();?>c_karyawan/tampilanKaryawanTerapi">
            <i class="fa fa-medkit"></i>
            <span>Data pasien yang diterapi</span>
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
        Pemeriksaan Afeksi
      </h1>
    </section>
    <section class="content">
	
	  
	  <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

                   
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Biodata</h3>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#ambil" data-toggle="tab">Perkembangan Afeksi</a></li> 
              <li><a href="#tunalaras" data-toggle="tab">Perkembangan Tunalaras</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="ambil">
                 <form action="<?php echo base_url(); ?>c_karyawan/set_afeksi2" method="post">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kemampuan</th>
                  <th>K</th>
                  <th>C</th>
                  <th>B</th>
                  <th>Waktu</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    <?php
          foreach ($afeksi as $a) {
          if ($a['idData']!=15) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idData]"?></td>
                  <td><?php echo "$a[kemampuan]" ?></td>
                  <td><input type="radio" name="afeksi<?php echo "$a[idData]"?>" class="afeksi" data-idGejala="<?php echo "$a[idData]"?>" id="afeksi1" value="" <?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==10){echo "checked";}}};?>></td>
                  <td><input type="radio" name="afeksi<?php echo "$a[idData]"?>" class="afeksi" data-idGejala="<?php echo "$a[idData]"?>" id="afeksi2" value="" <?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==20){echo "checked";}}};?>></td>
                  <td><input type="radio" name="afeksi<?php echo "$a[idData]"?>" class="afeksi" data-idGejala="<?php echo "$a[idData]"?>" id="afeksi3" value="" <?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==30){echo "checked";}}};?>></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataAfeksi" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){print_r($b['waktu']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="waktu" data-tahap="2">
                </div></td>
                  <td><div class="form-group">
                  <input type="text" id="keterangan" class="dataAfeksi" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){print_r($b['keterangan']); }};?>" name="keterangan" placeholder="" data-namaKolom="keterangan" data-tahap="2">
                </div></td>
                  
                </tr>
        <?php
          }}
        ?>
        <tr>
                  <td>Hasil</td>
                  <td></td>
                  <td><?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){print_r($b['nilai']); }};?></td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kemampuan</th>
                  <th>Nilai</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <input type="hidden" id="idPelanggan" name = "idPelanggan" value="<?php echo "$idPelanggan";?>" >
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
              </div>
              <div class="tab-pane" id="tunalaras">
                  <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
                 <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Karakteristik</th>
                  <th>Ya</th>
                  <th>Tidak</th>
                </tr>
                </thead>
                <tbody>
                   <?php
          foreach ($tunalaras as $a) {
            if ($a['idGejala']!=40) {
        ?>
        <tr data-id="DataTunalaras" >
                  <td><?php echo "$a[idGejala]"?></td>
                  <td><?php echo "$a[gejala]" ?></td>
                  <td><input type="radio" name="tunalaras<?php echo "$a[idGejala]"?>" class="tunalaras" data-idGejala="<?php echo "$a[idGejala]"?>" id="tunalaras1" value="" <?php foreach ($nilai_tunalaras as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$idPelanggan){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="tunalaras<?php echo "$a[idGejala]"?>" class="tunalaras" data-idGejala="<?php echo "$a[idGejala]"?>" id="tunalaras2" value="" <?php foreach ($nilai_tunalaras as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$idPelanggan){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
                </tr>
        <?php
            }
          }
        ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Karakteristik</th>
                  <th>Ya</th>
                  <th>Tidak</th>
                </tr>
                </tfoot>
              </table>
            </div>
              
        </form>
              </div>
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
          </div>
        </div>
        <!-- /.col -->
      </div>
		
		
      <!-- /.row -->
    </section>
    <input type="hidden" id="idKaryawan" name ="idKaryawan" value="<?php echo $this->session->userdata('idKaryawan')?>" >
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
			url:"<?php echo base_url('Adminika/pembayaranValid'); ?>",
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
		title: "Ijazah atas nama  "+ nama +" Valid",
		text:"Yakin Ijazah ini valid?",
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "Yakin",
		closeOnConfirm: true,
	},
		function(){
		 $.ajax({
			url:"<?php echo base_url('Adminika/ijazahValid'); ?>",
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
        $(".afeksi").change(function() { 
          var idPelanggan=<?php echo "$idPelanggan";?>;
          var idKaryawan=$('#idKaryawan').val();
          var idData= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var psikomotor=$(this).attr("id");
          console.log(psikomotor);
            if(psikomotor=="afeksi3") { 
                $.ajax({
                    url: "<?php echo base_url('c_karyawan/set_afeksi2'); ?>",
                    data: { idPelanggan:idPelanggan, idKaryawan:idKaryawan, idData:idData, strState:30 }
                });
            } else if(psikomotor=="afeksi2") { 
                $.ajax({
                    url: "<?php echo base_url('c_karyawan/set_afeksi2'); ?>",
                    data: { idPelanggan:idPelanggan, idKaryawan:idKaryawan, idData:idData, strState:20 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_karyawan/set_afeksi2'); ?>",
                    data: { idPelanggan:idPelanggan, idKaryawan:idKaryawan, idData:idData, strState:10 }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".dataAfeksi").change(function() { 
          var idPelanggan=<?php echo "$idPelanggan";?>;
          var idKaryawan=$('#idKaryawan').val();
          var idData= $(this).attr("data-idGejala");
          var namaKolom= $(this).attr("data-namaKolom");
          var tahap= $(this).attr("data-tahap");
          var value=$(this).val();

          // var value= $(this).val();
          console.log(idData);
            
                $.ajax({
                    url: "<?php echo base_url('c_karyawan/set_data_afeksi'); ?>",
                    data: { idPelanggan:idPelanggan, idKaryawan:idKaryawan, idData:idData, namaKolom:namaKolom, tahap:tahap, value:value }
                });
            
        }); 
    });
  $(document).ready(function(){
        $(".tunalaras").change(function() { 
          var id=<?php echo "$idPelanggan";?>;
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var tunalaras=$(this).attr("id");
          console.log(tunalaras);
            if(tunalaras=="tunalaras1") { 
                $.ajax({
                    url: "<?php echo base_url('c_karyawan/set_tunalaras'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_karyawan/set_tunalaras'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
</script>
</body>
</html>
