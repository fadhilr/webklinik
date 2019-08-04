<?php
if($isi['pesan']==''){
  
}
else if($isi['pesan']=="Berhasil"){
  ?>
  <script>
   alert("upload berhasil");
  </script>
  <?php
}
else {
  ?>
  <script>
   alert("upload gagal");
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Psycho Care</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/skins/_all-skins.min.css">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/iconUb.jpeg">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url(); ?>welcome/cliant_dashboard" class="navbar-brand"><b>Psycho</b>Care</a>
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
         
        </div>
        <!-- /.navbar-collapse -->
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
            <a href="<?php echo base_url(); ?>login/logout" > <i class="fa fa-sign-out"></i></a>
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
                <span class="hidden-xs"><?php echo $this->session->userdata('user')?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/images/foto/<?php echo $this->session->userdata('fotoProfil')?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('user')?>
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
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class= "text-center">
        Hasil Pemeriksaan dan Diagnosa awal
      </h1>
      
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-2">
    </div>
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#hasil" data-toggle="tab">Pemeriksaan dan diagnosa awal</a></li> 
              <li><a href="#pembayaran" data-toggle="tab">Pembayaran untuk terapi</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="hasil">
			  <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
                 <div class="box-body">
                  <h4>A. Identitas Klien</h4>
              <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
                  
        <tr data-id="hasil" >
                  <td>1. </td>
                  <td>Nama</td>
                  <td><?php print_r($isi['namaPelanggan']) ?></td>
                </tr>
                <tr data-id="" >
                  <td>2. </td>
                  <td>Umur</td>
                  <td><?php print_r($isi['usia']) ?></td>
                </tr>
                <tr data-id="" >
                  <td>3. </td>
                  <td>Jenis kelamin</td>
                  <td><?php print_r($isi['jenisKelamin']) ?></td>
                </tr>
                <tr data-id="" >
                  <td>4. </td>
                  <td>Sekolah</td>
                  <td><?php print_r($isi['namaSekolah']) ?></td>
                </tr>
                <tr data-id="" >
                  <td>5. </td>
                  <td>Kelas</td>
                  <td><?php print_r($isi['kelas']) ?></td>
                </tr>
                

        
                </tbody>
                
              </table>
            </div>
            <div class="box-body">
                  <h4>B. Hasil Pemeriksaan</h4>
                  Berdasarkan hasil pemeriksaan dan assesment (neuro-psiko-pedagogik), subjek/klien ditengarahi memiliki kecenderungan berikut:
              <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
                  <thead>
                    <th>No.</th>
                    <th>Aspek</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                    <th>Minat-bakat/vokasional</th>
                    <th>Rekomendasi/treatment</th>
                  </thead>
         <?php
          foreach ($pemeriksaan1 as $a) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idHasil]"?></td>
                  <td><?php echo "$a[aspek]"?></td>
                  <td>
                    <?php if ($a['idHasil']==1) {
                     foreach ($nilai_akademik as $b) {if ($b['idData']==22){print_r($b['nilai']); }};
                  } else if ($a['idHasil']==2) {
                    foreach ($nilai_kognisi as $b) {if ($b['idData']==15){print_r($b['nilai']); }};
                  } else if ($a['idHasil']==3) {
                    foreach ($nilai_afeksi as $b) {if ($b['idData']==15){print_r($b['nilai']); }};
                  } else if ($a['idHasil']==4) {
                    foreach ($nilai_psikomotor as $b) {if ($b['idData']==18){print_r($b['nilai']); }};
                  } else {
                    foreach ($nilai_sosial as $b) {if ($b['idData']==12){print_r($b['nilai']); }};
                  }?>
                    </td>
                  <td>
                  <?php echo "$a[keterangan]"?> 
                </td>
                  <td><?php if ($a['idHasil']==1): ?>
                    <?php echo "$a[minat_bakat]"?>
                  <?php endif ?>
                    </td>
                  <td><?php if ($a['idHasil']==1): ?>
                    <?php echo "$a[rekomendasi]"?>
                  <?php endif ?></td>
                  
                </tr>
        <?php
          }
        ?>
                <tfoot>
                  <th>Kesimpulan</th>
                  <th><?php echo "$a[kesimpulan]"?></th>
                </tfoot>
        
                </tbody>
                
              </table>
            </div>
            <div class="box-body">
                  <h4>C. Program penanganan</h4>
                  Berdasarkan kesimpulan di atas, maka program penanganan yang perlu diberikan terhadap klien/subjek sebagai berikut:
              <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
                  <thead>
                    <th>No.</th>
                    <th>Terapi/rehabilitasi</th>
                    <th>Psikoedukasi</th>
                    <th>Modifikasi perilaku</th>
                    <th>Optimalisasi minat-bakat</th>
                    <th>Vitamin/pengaturan gizi</th>
                    <th>Durasi/waktu</th>
                  </thead>
                  
       <?php
          foreach ($pemeriksaan2 as $a) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idHasil]"?></td>
                  <td><?php echo "$a[terapi]"?></td>
                  <td><div class="form-group">
                  <?php echo "$a[psikoedukasi]"?> 
                </div></td>
                  <td><div class="form-group">
                  <?php echo "$a[modifikasi]"?> 
                </div></td>
                  <td><div class="form-group">
                  <?php echo "$a[optimalisasi]"?>
                </div></td>
                  <td><div class="form-group">
                  <?php echo "$a[vitamin]"?> 
                </div></td>
                <td><div class="form-group">
                  <?php echo "$a[durasi]"?> 
                </div></td>
                </tr>
        <?php
          }
        ?>
                
                <tfoot>
                  <th>Kesimpulan</th>
                  <th><?php foreach ($pemeriksaan2 as $a) {echo "$a[kesimpulan]";}?> </th>
                </tfoot>
                </tbody>
                
              </table>
            </div>
            <div class="box-body">
                  <h4>D. Masalah Sebenarnya</h4>
              <?php foreach ($pemeriksaan2 as $a) {echo "$a[masalah]";}?>
            </div>
              
			  </form>
        <!-- <div class="row no-print">    <div class="box-body">
        <div class="col-xs-12">
         <a href="<?php echo base_url(); ?>cetak/cetak" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
      </div> -->
              </div>
              <div class="tab-pane" id="pembayaran">
            <div class="row">
        <!-- left column -->
        <div class="col-md-2">
    </div>
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
          <b>ID pembayaran:</b> <?php print_r($isi['idPembayaran']) ?><br>
              <hr>
      </div>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-6">
          Dari
          <address>
            <strong>Psycho Care malang</strong><br>
            Jl. Danau Toba Blok C-11 Sawojajar<br>
            Malang, 65113<br>
            Phone: (0341) 561-945<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          Kepada
          <address>
            <strong><?php print_r($isi['namaPelanggan']) ?></strong><br>
            <span><?php print_r($isi['alamat']) ?></span><br>
      
            No. HP: <span><?php print_r($isi['noHp']) ?> </span><br>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="box-body">
          Pembayaran untuk melakukan terapi dan layanan
        </div>
       
        <!-- /.col -->
      </div>
      <!-- /.row -->
</div>

      <div class="row">
        <div class="box-body">
        <div class="col-xs-6">
          <h4 class="box-title">Transfer ke Rekening</h4>
          <img src="<?php echo base_url(); ?>/assets/dist/img/credit/btn.jpg" class="btn" alt="btn" width="50%">
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            a/n  Psycho Care Malang
            No. Rek : 00121 01 50 005095 0
          </p>
        </div>
        <!-- /.col -->
    <form action="<?php echo base_url(); ?>c_pelanggan/set_pembayaran2/" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="box-body">
        <div class="col-xs-6">
          <br><br>
          <div class="table-responsive">
            <table class="table" width="50%">
              <tr>
                <th style="width:60%" >Jumlah Layanan:</th>
                <td><span><?php print_r($isi['totalLayanan']) ?></span> Paket Layanan</td>
              </tr>
              <tr>
                <th>Biaya per Layanan:</th>
                <td>Rp.<span>550.000</span>,-</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>Rp.<span><?php print_r($isi['totalPembayaran2']) ?></span>,-</td>
              </tr>
        <tr>
                <th>Upload Bukti Pembayaran:</th>
                <td><img src="<?php echo base_url(); ?>assets/images/pembayaran/<?php print_r($isi['buktiPembayaran2']) ?>" width="200px" height: "300px"><input id = "foto" name="foto" type="file" class="">
          </input></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
      </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="box-body">
        <div class="col-xs-12">
    
    <button type="submit" class="btn btn-primary pull-right " style="margin-right: 5px;">
            <i class="fa fa-download " ></i> Konfirmasi Pembayaran
          </button>
          
          
        </div>
      </div>
      </div>
    </form>
          </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </div>
      </div>
      <!-- /.box -->
    </section>
	<input type="hidden" id="alumni-id" name = "alumni-id" value="<?php echo $this->session->userdata('id')?>" >
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2018 .</strong> IKA Universitas Brawijaya
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>/assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>/assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>

<script>
$(document).ready(function(){
 var id=$('#alumni-id').val();

 function load_unseen_notification(view = '')
 {
	 
  $.ajax({
   url:"<?php echo base_url('Notifikasi/fetch'); ?>",
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



</script>

<script>
  $(function () {
	  
	 $("#jasa").change(function(){
	var value=$(this).val();
	var kota=$("#kota").val();
	$.ajax({
		type:"POST",
	url: "<?php echo base_url()?>pengiriman/cekPaket",
	cache: false,
	data:{jenis:value,kota:kota},
	success: function(respond){
	$("#paket").html(respond);
	}
	})
	  });
	
	$("#paket").change(function(){
	var value=$("#jasa").val();
	var kota=$("#kota").val();
	var paket=$("#paket").val();
	$.ajax({
		type:"POST",
	url: "<?php echo base_url()?>pengiriman/cekHarga",
	cache: false,
	data:{jenis:value,kota:kota,paket:paket},
	success: function(respond){
	$("#harga").html(respond);
	}
	})
	
	$.ajax({
		type:"POST",
	url: "<?php echo base_url()?>pengiriman/getHarga",
	cache: false,
	data:{jenis:value,kota:kota,paket:paket},
	success: function(respond){
	$("#ongkir").html(respond);
	$("#ongkir").val(respond);
	}
	})
	  });
	
	$("#provinsi").change(function(){
	var value=$(this).val();
	if(value>0){
	$.ajax({
		type:"POST",
	url: "<?php echo base_url()?>pengiriman/get_kota",
	cache: false,
	data:{id:value},
	success: function(respond){
	$("#kota").html(respond);
	$("#kota").val(respond);
	}
	})
	}

	
  });
  
	$("#kota").change(function(){
	var value=$(this).val();
  });
  //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
	
  })
</script>
</body>
</html>
