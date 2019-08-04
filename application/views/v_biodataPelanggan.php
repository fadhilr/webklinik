
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Psycho Care Malang</title>
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
      <h1 class= "text-center">
        Biodata
      </h1>
      
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1">
		</div>
		<div class="col-md-10">
          <!-- general form elements -->
    <!-- Main content -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Biodata</h3>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#ambil" data-toggle="tab">Identitas Anak</a></li> 
              <li><a href="#orangtua" data-toggle="tab">Identitas Orang Tua</a></li>
              <li><a href="#DataADHD" data-toggle="tab">Data ADHD</a></li>
              <li><a href="#DataTunalaras" data-toggle="tab">Data Tunalaras</a></li>
              <li><a href="#DataDS" data-toggle="tab">Data DownSindrom</a></li>
              <li><a href="#DataSL" data-toggle="tab">Data SlowLearner</a></li>
              <li><a href="#DataRM" data-toggle="tab">Data RM</a></li>
              <li><a href="#DataAutis" data-toggle="tab">Data Autis</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="ambil">
                 <form action="<?php echo base_url(); ?>c_pelanggan/reloadBiodataP" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>A.Identitas</h4></label><br>
                  <label for="exampleInputEmail1">Nama lengkap</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['namaPelanggan']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="namaPelanggan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama panggilan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['namaPelangganPgl']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="namaPelangganPgl">
                </div>
                <div class="form-group">
                  <label >Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php print_r($isi['usia']) ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usia">
                </div>
                <div class="form-group">
        <label>
                  Jenis kelamin
                </label>
        <br>
                  <input type="radio" name="jenisKelamin" class="pelangganR" id="jk1" value="" data-namaKolom="jenisKelamin" <?php if ($isi['jenisKelamin']=="Pria") {
                    echo "checked";};?>>
                <label>
                  Pria
                </label>
                  <input type="radio" name="jenisKelamin" class="pelangganR" id="jk2" value="" data-namaKolom="jenisKelamin" <?php if ($isi['jenisKelamin']=="Wanita") {
                    echo "checked";};?>>
                <label>
                  Wanita
                </label>
              </div>
              <div class="form-group">
                  <label >Tempat lahir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['tempatLahir']) ?>" name="tptLahir" placeholder="Masukkan tempat lahir" data-namaKolom="tempatLahir">
                </div>
        <div class="form-group">
        <label>Tanggal lahir <span style="color:grey;">(12/31/1990)</span>:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right pelanggan"  value="<?php print_r($isi['tanggalLahir']) ?>" id="datepicker" name="tglLahir" data-namaKolom="tanggalLahir">
                </div>
        </div>
        <div class="form-group">
                  <label >Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['agama']) ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agama">
                </div>
                <div class="form-group">
                  <label >Kewarganegaraan/suku</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['kwn']) ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="kwn">
                </div>
                <div class="form-group">
                  <label >Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pendidikan']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikan">
                </div>
                <div class="form-group">
                  <label >Anak ke dari jumlah saudara</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['anakKe']) ?>" name="tptLahir" placeholder="ex: anak ke 1 dari 3 saudara" data-namaKolom="anakKe">
                </div>
                <div class="form-group">
                  <label >Nama sekolah</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['namaSekolah']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="namaSekolah">
                </div>
                <div class="form-group">
                  <label >Kelas</label>
                  <input type="number_format" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['kelas']) ?>" name="tptLahir" placeholder="Masukkan kelas" data-namaKolom="kelas">
                </div>
                <div class="form-group">
                  <label>Alamat lengkap</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3" placeholder="Masukkan ..." data-namaKolom="alamat"><?php print_r($isi['alamat']) ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>B. Riwayat Kelahiran</h4></label><br>
                  <label for="exampleInputEmail1">1. Perkembangan Masa kehamilan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['perkHamil']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="perkHamil">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. Penyakit pada masa kehamilan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['penyakitHamil']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="penyakitHamil">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Usia kandungan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['usiaKandung']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="usiaKandung">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. Riwayat proses kelahiran</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['riwayatLhr']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="riwayatLhr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. tempat kelahiran</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['tempatLhr']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="tempatLahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">6. Penolong proses kelahiran</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['penolongLhr']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="penolongLhr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">7. gangguan pada saat bayi lahir</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['gangguanLhr']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="gangguanLhr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">8. Berat bayi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['beratBy']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="beratBy">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">9. panjang bayi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['panjangBy']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="panjangBy">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">10. tanda-tanda kelainan pada bayi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['kelainanBy']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kelainanBy">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>C. Perkembangan masa balita</h4></label><br>
                  <label for="exampleInputEmail1">1. menetek hingga umur</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['netekUmr']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="netekUmr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. minum susu kaleng hingga umur</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['mnmKlgUmr']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="mnmKlgUmr">
                </div>
                 <div class="form-group">
        <label>3. Imunisasi </label><br>
                  <input type="radio" name="imunisasi" class="pelangganR" id="im1"  <?php if ($isi['imunisasi']=="lengkap") {
                    echo "checked";};?> data-namaKolom="imunisasi">
        <label>Lengkap</label>
                  <input type="radio" name="imunisasi" class="pelangganR" id="im2" value="" <?php if ($isi['imunisasi']=="tidak") {
                    echo "checked";};?> data-namaKolom="imunisasi">
                <label>tidak lengkap</label>
              </div>
              <div class="form-group">
        <label>4. Pemeriksaan </label><br>
                  <input type="radio" name="pemeriksaan" class="pelangganR" id="pm1" value="" <?php if ($isi['pemeriksaan']=="rutin") {
                    echo "checked";};?> data-namaKolom="pemeriksaan">
        <label>Rutin</label>
                  <input type="radio" name="pemeriksaan" class="pelangganR" id="pm2" value="" <?php if ($isi['pemeriksaan']=="tidak") {
                    echo "checked";};?> data-namaKolom="pemeriksaan">
                <label>tidak rutin</label>
              </div>
               
                <div class="form-group">
                  <label for="exampleInputEmail1">5. Kualitas makanan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['kltsMkn']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kltsMkn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">6. kuantitas makanan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['knttsMkn']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="knttsMkn">
                </div>
                <div class="form-group">
        <label>7. Kesulitan makan </label><br>
                  <input type="radio" name="kltsMkn" class="pelangganR" id="km1" value="<?php print_r($isi['ksltnMkn']) ?>" <?php if ($isi['jenisKelamin']=="ya") {
                    echo "checked";};?> data-namaKolom="ksltnMkn">
        <label>Ya</label>
                  <input type="radio" name="kltsMkn" class="pelangganR" id="km2" value="" <?php if ($isi['ksltnMkn']=="tidak") {
                    echo "checked";};?> data-namaKolom="ksltnMkn">
                <label>tidak</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>D. Perkembangan fisik</h4></label><br>
                  <label for="exampleInputEmail1">1. Bisa berdiri di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['berdiriUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="berdiriUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. bisa berjalan di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['jalanUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="jalanUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. naik sepeda roda 4 di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['spdrdUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="spdrdUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. naik sepeda roda 2 di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['spdrdduaUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="spdrdduaUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. bicara kalimat lengkap di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['klmtLngkpUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="mnmKlgUmr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">6. kesulitan gerakan yang dialami</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['sulitGerak']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sulitGerak">
                </div>
                <div class="form-group">
        <label>7. Status gizi balita </label><br>
                  <input type="radio" name="giziBalita" class="pelangganR" id="sg1" value="" <?php if ($isi['giziBalita']=="baik") {
                    echo "checked";};?> data-namaKolom="giziBalita">
        <label>Baik</label>
                  <input type="radio" name="giziBalita" class="pelangganR" id="sg2" value="" <?php if ($isi['giziBalita']=="kurang") {
                    echo "checked";};?> data-namaKolom="giziBalita">
                <label>Kurang</label>
              </div>
              <div class="form-group">
        <label>8. Riwayat kesehatan </label><br>
                  <input type="radio" name="giziBalita" class="pelangganR"  id="rk1" value="" <?php if ($isi['rwytKshtn']=="baik") {
                    echo "checked";};?> data-namaKolom="rwytKshtn">
        <label>Baik</label>
                  <input type="radio" name="giziBalita" class="pelangganR" id="rk2" value="" <?php if ($isi['rwytKshtn']=="kurang") {
                    echo "checked";};?> data-namaKolom="rwytKshtn">
                <label>Kurang</label>
              </div>
              <div class="form-group">
        <label>9. Penggunaan tangan dominan </label><br>
                  <input type="radio" name="tanganDominan" class="pelangganR" id="pt1" value="" <?php if ($isi['tanganDominan']=="Kanan") {
                    echo "checked";};?> data-namaKolom="tanganDominan">
        <label>Kanan</label>
                  <input type="radio" name="tanganDominan" class="pelangganR" id="pt2" value="" <?php if ($isi['tanganDominan']=="Kiri") {
                    echo "checked";};?> data-namaKolom="tanganDominan">
                <label>Kiri</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>E. Perkembangan Bahasa</h4></label><br>
                  <label for="exampleInputEmail1">1. Meraba atau berceloteh di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['rabaUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="rabaUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. Mengucapkan satu suku kata yang bermakna di usia(mis:pa, ma, kak)</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['kataBrmkn']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kataBrmkn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Berbicara dengan satu suku kata bermakna pada usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['kataBrmknUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kataBrmknUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. berbicara dengan kalimat lengkap sederhana di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['klmtLngkp']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="klmtLngkp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>F. Perkembangan Sosial</h4></label><br>
                  <label for="exampleInputEmail1">1. Hubungan dengan saudara</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['hubSaudara']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hubSaudara">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. Hubungan dengan teman seusia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['hubTmn']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hubTmn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Hubungan dengan orang tua</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['hubOrtu']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hubOrtu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. Hobi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['hobi']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hobi">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. minat khusus</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['minat']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="minat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>G. Perkembangan Akademik</h4></label><br>
                  <label for="exampleInputEmail1">1. Masuk TK usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['tkUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="tkUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. lama pendidikan di TK</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['lamaTk']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="lamaTk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Kesulitan belajar di TK</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['sulitTk']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sulitTk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. Masuk SD usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['sdUsia']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sdUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. Kesulitan belajar di SD</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['sulitSd']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sulitSd">
                </div>
                <div class="form-group">
        <label>6. Pernah tidak naik kelas </label><br>
                  <input type="radio" name="tdkNaikKls" class="pelangganR" id="nk1" value="<?php print_r($isi['tdkNaikKls']) ?>" <?php if ($isi['jenisKelamin']=="iya") {
                    echo "checked";};?> data-namaKolom="tdkNaikKls">
        <label>Iya</label>
                  <input type="radio" name="tdkNaikKls" class="pelangganR" id="nk2" value="<?php print_r($isi['tdkNaikKls']) ?>" <?php if ($isi['jenisKelamin']=="tidak") {
                    echo "checked";};?> data-namaKolom="tdkNaikKls">
                <label>Tidak</label>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">7. layanan pendidikan khusus yang pernah diterima anak</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['layananSblm']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="layananSblm">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">8. Prestasi belajar yang pernah dicapai</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['prestasi']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="prestasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">9. Mata pelajaran yang dirasa paling sulit</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['matpelSulit']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="matpelSulit">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">10. Mata pelajaran yang paling disukai</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['matpelSuka']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="matpelSuka">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">11. Keterangan lain yang perlu dituliskan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['ketLain']) ?>" name="nama" placeholder="ex: mencari minat dan bakat anak" data-namaKolom="ketLain">
                </div>                      
        <div class="form-group">
                <label>Nomer Telpon:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control pelanggan" name = "noTelpon" value="<?php print_r($isi['noTlp']) ?>"
                         data-inputmask="'mask': ['(999) 999-9999', '(9999) 999-9999','(999) 999-99999']" data-mask data-namaKolom="noTlp">
                </div>
                <!-- /.input group -->
              </div>
        <div class="form-group">
                <label>Nomer HP:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control pelanggan" name = "noHp" value="<?php print_r($isi['noHp']) ?>"
                         data-inputmask="'mask': ['999-999-999-999', '+099 99 99 9999[9]']" data-mask data-namaKolom="noHp">
                </div>
                <!-- /.input group -->
              </div>
        <input type="hidden" class="form-control pelanggan" name = "email" value="" >
        <input type="hidden" class="form-control pelanggan" name = "password" value="" >
        
                <div class="form-group">
                  <label for="exampleInputFile">Upload Foto Anak</label>
          <p class="help-block"></p>
          <img src="<?php echo base_url(); ?>assets/images/foto/<?php print_r($isi['fotoPelanggan']) ?>" width="200px" height: "300px">
                  <input type="file" name = "fotoPelanggan" id="fotoPelanggan" >
                  <p class="help-block">Foto 3X4 ukuran kurang dari 3 MB.</p>
                </div>
        
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
              </div>
              <div class="tab-pane" id="orangtua">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
                 <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>A. Ayah</h4></label><br>
                  <label for="exampleInputEmail1">1. Nama </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['ayah']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="ayah">
                </div>
                <div class="form-group">
                  <label >2. Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php print_r($isi['usiaAyh']) ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usiaAyh">
                </div>
                <div class="form-group">
                  <label >3. Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['agamaAyh']) ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agamaAyh">
                </div>
                <div class="form-group">
                  <label >4. Status Ayah</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['statusAyh']) ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="statusAyh">
                </div>
                <div class="form-group">
                  <label >5. Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pendidikanAyh']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikanAyh">
                </div>
                <div class="form-group">
                  <label >6. Pekerjaan</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pekerjaanAyh']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pekerjaanAyh" >
                </div>
                <div class="form-group">
                  <label>7. Alamat Sekarang</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="almtAyh"><?php print_r($isi['almtAyh']) ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>B. Ibu</h4></label><br>
                  <label for="exampleInputEmail1">1. Nama </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['ibu']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="ibu">
                </div>
                <div class="form-group">
                  <label >2. Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php print_r($isi['usiaIbu']) ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usiaIbu">
                </div>
                <div class="form-group">
                  <label >3. Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['agamaIbu']) ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agamaIbu">
                </div>
                <div class="form-group">
                  <label >4. Status Ibu</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['statusIbu']) ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="statusIbu">
                </div>
                <div class="form-group">
                  <label >5. Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pendidikanIbu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikanIbu">
                </div>
                <div class="form-group">
                  <label >6. Pekerjaan</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pekerjaanIbu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pekerjaanIbu">
                </div>
                <div class="form-group">
                  <label>7. Alamat Sekarang</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="almtIbu"><?php print_r($isi['almtIbu']) ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>C. Wali</h4></label><br>
                  <label for="exampleInputEmail1">1. Nama </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['wali']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="wali">
                </div>
                <div class="form-group">
                  <label >2. Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php print_r($isi['usiaWl']) ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usiaWl">
                </div>
                <div class="form-group">
                  <label >3. Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['agamaWl']) ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agamaWl">
                </div>
                <div class="form-group">
                  <label >4. Status Ayah</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['statusWl']) ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="statusWl">
                </div>
                <div class="form-group">
                  <label >5. Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pendidikanWl']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikanWl">
                </div>
                <div class="form-group">
                  <label >6. Pekerjaan</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['pekerjaanWl']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pekerjaanWl">
                </div>
                <div class="form-group">
                  <label>7. Alamat Sekarang</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="almtWl"><?php print_r($isi['almtWl']) ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>D. Hubungan orang tua-anak</h4></label><br>
                   <label>1. Kedua orang tua tinggal serumah</label><br>
                  <input type="radio" name="ortuSerumah" class="pelangganR" id="ot1" value="" <?php if ($isi['ortuSerumah']=="iya") {
                    echo "checked";};?> data-namaKolom="ortuSerumah">
        <label>Iya</label>
                  <input type="radio" name="ortuSerumah" class="pelangganR" id="ot2" value="" <?php if ($isi['ortuSerumah']=="tidak") {
                    echo "checked";};?> data-namaKolom="ortuSerumah">
                <label>Tidak</label>
                </div>
                <div class="form-group">
        <label>2. anak tinggal serumah bersama orang tua </label><br>
                  <input type="radio" name="anakOrtu" class="pelangganR" id="at1" value="" <?php if ($isi['anakOrtu']=="iya") {
                    echo "checked";};?> data-namaKolom="anakOrtu">
        <label>Iya</label>
                  <input type="radio" name="anakOrtu" class="pelangganR" id="at2" value="" <?php if ($isi['anakOrtu']=="tidak") {
                    echo "checked";};?> data-namaKolom="anakOrtu">
                <label>Tidak</label>
              </div>
              <div class="form-group">
        <label>3. anak diasuh oleh salah satu orang tua/single parent </label><br>
                  <input type="radio" name="anakSatuOrtu" class="pelangganR" id="as1" value="" <?php if ($isi['anakSatuOrtu']=="iya") {
                    echo "checked";};?> data-namaKolom="anakSatuOrtu">
        <label>Iya</label>
                  <input type="radio" name="anakSatuOrtu" class="pelangganR" id="as2" value="" <?php if ($isi['anakSatuOrtu']=="tidak") {
                    echo "checked";};?> data-namaKolom="anakSatuOrtu">
                <label>Tidak</label>
              </div>
              <div class="form-group">
        <label>4. Anak diasuh oleh wali/saudara</label><br>
                  <input type="radio" name="anakWali" class="pelangganR" id="wl1" value="" <?php if ($isi['anakWali']=="iya") {
                    echo "checked";};?> data-namaKolom="anakWali">
        <label>Iya</label>
                  <input type="radio" name="anakWali" class="pelangganR" id="wl2" value="" <?php if ($isi['anakWali']=="tidak") {
                    echo "checked";};?> data-namaKolom="anakWali">
                <label>Tidak</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>E. Sosial Ekonomi orang tua</h4></label><br>
                  <label for="exampleInputEmail1">1. jabatan formal ayah di tempat kerja(jika ada) </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['jabAyh']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="jabAyh">
                </div>
                <div class="form-group">
                  <label>2. jabatan formal ibu di tempat kerja(jika ada)</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['jabIbu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="jabIbu">
                </div>
                <div class="form-group">
                  <label>3. jabatan informal ayah di luar tempat kerja(jika ada)</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['jabiAyh']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir">
                </div>
                <div class="form-group">
                  <label>4. jabatan informal ibu di luar tempat kerja(jika ada)</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['jabiIbu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="jabiIbu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>F. Persepsi orang tua terhadap anak</h4></label><br>
                  <label for="exampleInputEmail1">1. Persepsi/tanggapan orang tua terhadap anak </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php print_r($isi['persepsiOrtu']) ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="persepsiOrtu">
                </div>
                <div class="form-group">
                  <label>2. Kesulitan yang dihadapi orang tua selama ini dalam pengasuhan anak</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['kesulitanOrtu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="kesulitanOrtu">
                </div>
                <div class="form-group">
                  <label>3. harapan orang tua terhadap perkembangan dan pendidikan anak</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['harapanOrtu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="harapanOrtu">
                </div>
                <div class="form-group">
                  <label>4. bantuan yang diharapkan orang tua bagi anak</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php print_r($isi['bantuanOrtu']) ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="bantuanOrtu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>G. Penjelasan tambahan tentang anak</h4></label><br>
                  <textarea name="tambahan" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="tambahan"><?php print_r($isi['tambahan']) ?></textarea>
                </div>

            </div>
              
        </form>
              </div>
              <div class="tab-pane" id="DataADHD">
        <form role="form" action="<?php echo base_url(); ?>c_pelanggan/set_data" method="post" enctype="multipart/form-data">
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
          foreach ($adhd as $a) {
            if ($a['idGejala']!=19) {
              # code...
            

        ?>
        <tr data-id="DataADHD" >
                  <td><?php echo "$a[idGejala]"?></td>
                  <td><?php echo "$a[gejala]" ?></td>
                  <td><input type="radio" name="adhd<?php echo "$a[idGejala]"?>" class="adhd" data-idGejala="<?php echo "$a[idGejala]"?>" id="adhd1" value="" <?php foreach ($nilai_adhd as $b) {
                    if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan'))
                      {if ($b['nilai']==1)
                        {echo "checked" ;}
                      }
                    };
                      ?> ></td>
                  <td><input type="radio" name="adhd<?php echo "$a[idGejala]"?>" class="adhd" data-idGejala="<?php echo "$a[idGejala]"?>" id="adhd2" value="" <?php foreach ($nilai_adhd as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
              <div class="tab-pane" id="DataTunalaras">
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
                  <td><input type="radio" name="tunalaras<?php echo "$a[idGejala]"?>" class="tunalaras" data-idGejala="<?php echo "$a[idGejala]"?>" id="tunalaras1" value="" <?php foreach ($nilai_tunalaras as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="tunalaras<?php echo "$a[idGejala]"?>" class="tunalaras" data-idGejala="<?php echo "$a[idGejala]"?>" id="tunalaras2" value="" <?php foreach ($nilai_tunalaras as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
               <div class="tab-pane" id="DataDS">
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
          foreach ($ds as $a) {
            if ($a['idGejala']!=34) {
        ?>
        <tr data-id="DataDS" >
                  <td><?php echo "$a[idGejala]"?></td>
                  <td><?php echo "$a[gejala]" ?></td>
                  <td><input type="radio" name="ds<?php echo "$a[idGejala]"?>" class="ds" data-idGejala="<?php echo "$a[idGejala]"?>" id="ds1" value="" <?php foreach ($nilai_ds as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="ds<?php echo "$a[idGejala]"?>" class="ds" data-idGejala="<?php echo "$a[idGejala]"?>" id="ds2" value="" <?php foreach ($nilai_ds as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
                </tr>
        <?php
          }}
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
              <div class="tab-pane" id="DataSL">
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
          foreach ($sl as $a) {
            if ($a['idGejala']!=23) {
        ?>
        <tr data-id="DataSL" >
                  <td><?php echo "$a[idGejala]"?></td>
                  <td><?php echo "$a[gejala]" ?></td>
                  <td><input type="radio" name="sl<?php echo "$a[idGejala]"?>" class="sl" data-idGejala="<?php echo "$a[idGejala]"?>" id="sl1" value="" <?php foreach ($nilai_sl as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="sl<?php echo "$a[idGejala]"?>" class="sl" data-idGejala="<?php echo "$a[idGejala]"?>" id="sl2" value="" <?php foreach ($nilai_sl as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
                </tr>
        <?php
          }}
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
              <div class="tab-pane" id="DataRM">
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
          foreach ($rm as $a) {
            if ($a['idGejala']!=25) {
        ?>
        <tr data-id="DataDS" >
                  <td><?php echo "$a[idGejala]"?></td>
                  <td><?php echo "$a[gejala]" ?></td>
                  <td><input type="radio" name="rm<?php echo "$a[idGejala]"?>" class="rm" data-idGejala="<?php echo "$a[idGejala]"?>" id="rm1" value="" <?php foreach ($nilai_rm as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="rm<?php echo "$a[idGejala]"?>" class="rm" data-idGejala="<?php echo "$a[idGejala]"?>" id="rm2" value="" <?php foreach ($nilai_rm as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==0){echo "checked";}}};?>></td>

                  
                </tr>
        <?php
          }}
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
              <div class="tab-pane" id="DataAutis">
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
          foreach ($autis as $a) {
            if ($a['idGejala']!=10) {
        ?>
        <tr data-id="DataAutis" >
                  <td><?php echo "$a[idGejala]"?></td>
                  <td><?php echo "$a[gejala]" ?></td>
                  <td><input type="radio" name="autis<?php echo "$a[idGejala]"?>" class="autis" data-idGejala="<?php echo "$a[idGejala]"?>" id="autis1" value="" <?php foreach ($nilai_autis as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="autis<?php echo "$a[idGejala]"?>" class="autis" data-idGejala="<?php echo "$a[idGejala]"?>" id="autis2" value="" <?php foreach ($nilai_autis as $b) {if ($b['idGejala']==$a['idGejala'] && $b['idPelanggan']==$this->session->userdata('idPelanggan')){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
                </tr>
        <?php
          }}
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

	</div>
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
      <strong>Copyright &copy; 2018 .</strong> Psycho Care Malang
    </div>
    <!-- /.container -->
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
	  
	  //pilihan fakultas
	$.ajaxSetup({
	type:"POST",
	url: "<?php echo base_url()?>biodata/ambil_data",
	cache: false,
	});

	$("#fakultas").change(function(){
	
	var value=$(this).val();
	if(value>0){
	$.ajax({
	data:{modul:'jurusan',id:value},
	success: function(respond){
	$("#jurusan").html(respond);
	}
	})
	}

	});
	
	$("#jurusan").change(function(){
	var strataPendidikan=$("#strataPendidikan").val();
	var value=$(this).val();
	if(value>0){
	$.ajax({
	data:{modul:'programStudi',id:value,strataPendidikan:strataPendidikan},
	success: function(respond){
	$("#programStudi").html(respond);
	}
	})
	}

	});
	
	$("#strataPendidikan").change(function(){
	var strataPendidikan=$(this).val();
	var value=$("#jurusan").val();
	if(value>0){
	$.ajax({
	data:{modul:'programStudi',id:value,strataPendidikan:strataPendidikan},
	success: function(respond){
	$("#programStudi").html(respond);
	}
	})
	}

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
	$('#datepicker2').datepicker({
      autoclose: true
    })
	$('#datepicker3').datepicker({
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
  $(document).ready(function(){
        $(".pelanggan").change(function() { 
          var id=$('#alumni-id').val();
          var namaKolom= $(this).attr("data-namaKolom");
          var value=$(this).val();

          // var value= $(this).val();
          console.log(value);
            
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_pelanggan'); ?>",
                    data: { id:id, namaKolom:namaKolom, value:value }
                });
            
        }); 
    });
  $(document).ready(function(){
        $(".pelangganR").change(function() { 
          var id=$('#alumni-id').val();
          var namaKolom= $(this).attr("data-namaKolom");
          // var value= $(this).val();
          var radio=$(this).attr("id");
          console.log(namaKolom);
            if(radio=="jk1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"Pria" }
                });
            } else if (radio=="jk2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"Wanita" }
                });
            } else if (radio=="im1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"lengkap" }
                });
            }else if (radio=="im2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="pm1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"rutin" }
                });
            }else if (radio=="pm2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="km1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"ya" }
                });
            }else if (radio=="km2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="sg1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"baik" }
                });
            }else if (radio=="sg2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"kurang" }
                });
            }else if (radio=="rk1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"baik" }
                });
            }else if (radio=="rk2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"kurang" }
                });
            }else if (radio=="pt1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"Kanan" }
                });
            }else if (radio=="pt2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"Kiri" }
                });
            }else if (radio=="nk1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"iya" }
                });
            }else if (radio=="nk2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="ot1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"iya" }
                });
            }else if (radio=="ot2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="at1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"iya" }
                });
            }else if (radio=="at2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="as1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"iya" }
                });
            }else if (radio=="as2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }else if (radio=="wl1") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"iya" }
                });
            }else if (radio=="wl2") {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_pelangganR'); ?>",
                    data: { id:id, namaKolom:namaKolom, strState:"tidak" }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".adhd").change(function() { 
          var id=$('#alumni-id').val();
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var adhd=$(this).attr("id");
          console.log(adhd);
            if(adhd=="adhd1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_adhd'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_adhd'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".tunalaras").change(function() { 
          var id=$('#alumni-id').val();
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var tunalaras=$(this).attr("id");
          console.log(tunalaras);
            if(tunalaras=="tunalaras1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_tunalaras'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_tunalaras'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".ds").change(function() { 
          var id=$('#alumni-id').val();
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var tunalaras=$(this).attr("id");
          console.log(tunalaras);
            if(tunalaras=="ds1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_ds'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_ds'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".sl").change(function() { 
          var id=$('#alumni-id').val();
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var tunalaras=$(this).attr("id");
          console.log(tunalaras);
            if(tunalaras=="sl1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_sl'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_sl'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".rm").change(function() { 
          var id=$('#alumni-id').val();
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var tunalaras=$(this).attr("id");
          console.log(tunalaras);
            if(tunalaras=="rm1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_rm'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_rm'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
  $(document).ready(function(){
        $(".autis").change(function() { 
          var id=$('#alumni-id').val();
          var idGejala= $(this).attr("data-idGejala");
          // var value= $(this).val();
          var tunalaras=$(this).attr("id");
          console.log(tunalaras);
            if(tunalaras=="autis1") { 
                $.ajax({
                    url: "<?php echo base_url('c_pelanggan/set_autis'); ?>",
                    data: { id:id, idGejala:idGejala, strState:1 }
                });
            } else {
                $.ajax({
                  url: "<?php echo base_url('c_pelanggan/set_autis'); ?>",
                    data: { id:id, idGejala:idGejala, strState:0 }
                });
            }
        }); 
    });
  $(document).on("click","#submit",function(){
  var fileArsip = $('#fotoPelanggan').prop('files')[0];
  var form_data = new FormData();
  form_data.append('fileArsip', fileArsip);
   
   
    
  var tombol =$("#submitArsip").html();
  
    $.ajax({
      url:"<?php echo base_url('c_pelanggan/submit'); ?>",
      data:form_data,
      type: "POST",
      contentType: false,
      processData: false,
      dataType : "html",
      success: function(response){
        console.log(response);
        alert("file berhasil diupload");
        $("#submitArsip").html('Uploaded');
      },
      error: function() {
     alert("gagal");
      }
     });
   
});
</script>
</body>
</html>
