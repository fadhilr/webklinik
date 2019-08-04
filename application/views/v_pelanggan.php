<?php
if($this->session->userdata('username')==null){
  ?>
  <script>
   alert("login gagal1");
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
  <title>Psycho Care Malang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/iconUb.jpeg">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
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
          <a href="<?php echo base_url(); ?>welcome/" class="navbar-static-top">
            <img src="<?php echo base_url(); ?>assets/images/Psycho.png" width="40%" class="" alt="" >
          </a>
          
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
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Proses 1</h3>

              <p>Biodata</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>c_pelanggan/tampilanBiodataPelanggan" class="small-box-footer">KLIK DISINI <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      

        <?php 
        $status=$this->session->userdata('status');
    if($status=='valid1' || $status=='bayar1' || $status=='lunas1' || $status=='periksa' || $status=='hasil' || $status=='kesimpulan' || $status=='bayar2' || $status=='lunas2' || $status=='hasil perkembangan' || $status=='kesimpulan2'){
      ?>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Proses 2</h3>

              <p>Pembayaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="<?php echo base_url(); ?>c_pelanggan/tampilanPembayaranPelanggan" class="small-box-footer">KLIK DISINI <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="box box-warning box-solid">
            <div class="box-header">
              <h3 class="">Proses 2</h3>
            </div>
            <div class="box-body" style ="margin-top: 10px;">
              Pembayaran
            </div>
      
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
          </div>
    </div> 
    <?php 
    }
    ?>
    
     <?php 
        $status=$this->session->userdata('status');
    if($status=='kesimpulan' || $status=='bayar2' || $status=='lunas2' || $status=='hasil perkembangan' ||$status=='kesimpulan2'){
      ?>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Proses 3</h3>

              <p>Hasil pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <a href="<?php echo base_url(); ?>c_pelanggan/tampilanPemeriksaanPelanggan/<?php echo $this->session->userdata('idPelanggan')?>" class="small-box-footer">KLIK DISINI <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="box box-success box-solid">
            <div class="box-header">
              <h3 class="">Proses 3</h3>
            </div>
            <div class="box-body" style ="margin-top: 10px;">
              Hasil pemeriksaan
            </div>
      
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
          </div>
    </div> 
    <?php 
    }
    ?>
        
    <?php 
        $status=$this->session->userdata('status');
    if($status=='kesimpulan2'){
      ?>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Proses 4</h3>

              <p>Hasil Perkembangan </p>
            </div>
            <div class="icon">
              <i class="fa fa-print"></i>
            </div>
            <a href="<?php echo base_url(); ?>c_pelanggan/tampilanTerapiPelanggan/<?php echo $this->session->userdata('idPelanggan')?>" class="small-box-footer">KLIK DISINI <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="box box-danger box-solid">
            <div class="box-header">
              <h3 class="">Proses 4</h3>
            </div>
            <div class="box-body" style ="margin-top: 10px;">
              Hasil Perkembangan
            </div>
      
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
          </div>
    </div> 
    <?php 
    }
    ?>

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
		<!-- START ACCORDION & CAROUSEL-->
		<h2 class="page-header"></h2>
      <div class="row">
        <div class="col-md-3">
		</div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generics" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url(); ?>assets/images/filkom.png" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/images/bg1.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/images/2.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ACCORDION & CAROUSEL-->
    </section>
    <!-- /.content -->
    <input type="hidden" id="alumni-id" name = "alumni-id" value="<?php echo $this->session->userdata('idPelanggan')?>" >
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2019 .</strong> Psycho Care Malang
	  <!-- /.hidden session -->
	  <input type="hidden" id="uname" name = "uname" value="<?php  $this->session->userdata()?>" >
	  <input type="hidden" id="alumni-id" name = "alumni-id" value="<?php echo $this->session->userdata('id')?>" >
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b73dc0eafc2c34e96e796d9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

<script>
$(document).ready(function(){
 var id=$('#alumni-id').val();
 console.log(id);

 function load_unseen_notification(view = '')
 {
	 
  $.ajax({
   url:"<?php echo base_url('Notifikasi/pelanggan'); ?>",
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
