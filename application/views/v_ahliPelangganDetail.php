
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
    <section class="content-header">
      <h1>
        Daftar Pasien
        <small>Psycho Care malang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>c_admin/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>c_admin/tampilanAdminKaryawan/">Pasien</a></li>
        <li class="active">Lihat Pasien</li>
      </ol>
    </section>
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

         
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi Detail Pasien</h3>
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
              <li><a href="#DataPsikomotor" data-toggle="tab">Data Psikomotor</a></li>
              <li><a href="#DataKognisi" data-toggle="tab">Data Kognisi</a></li>
              <li><a href="#DataAfeksi" data-toggle="tab">Data Afeksi</a></li>
              <li><a href="#DataAkademik" data-toggle="tab">Data Akademik</a></li>
              <li><a href="#DataSosial" data-toggle="tab">Data Sosial</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="ambil">
                 <form action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <?php
          foreach ($pelanggan as $a) {
                ?>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>A.Identitas</h4></label><br>
                  <label for="exampleInputEmail1">Nama lengkap</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelanggan]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="namaPelanggan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama panggilan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="namaPelangganPgl">
                </div>
                <div class="form-group">
                  <label >Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usia">
                </div>
                <div class="form-group">
        <label>
                  Jenis kelamin
                </label>
        <br>
                  <input type="radio" name="jenisKelamin" class="pelangganR" id="jk1" value="" data-namaKolom="jenisKelamin" <?php if ("$a[namaPelangganPgl]"=="Pria") {
                    echo "checked";};?>>
                <label>
                  Pria
                </label>
                  <input type="radio" name="jenisKelamin" class="pelangganR" id="jk2" value="" data-namaKolom="jenisKelamin" <?php if ("$a[namaPelangganPgl]"=="Wanita") {
                    echo "checked";};?>>
                <label>
                  Wanita
                </label>
              </div>
              <div class="form-group">
                  <label >Tempat lahir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan tempat lahir" data-namaKolom="tempatLahir">
                </div>
        <div class="form-group">
        <label>Tanggal lahir <span style="color:grey;">(12/31/1990)</span>:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right pelanggan"  value="<?php echo "$a[namaPelangganPgl]" ?>" id="datepicker" name="tglLahir" data-namaKolom="tanggalLahir">
                </div>
        </div>
        <div class="form-group">
                  <label >Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agama">
                </div>
                <div class="form-group">
                  <label >Kewarganegaraan/suku</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="kwn">
                </div>
                <div class="form-group">
                  <label >Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikan">
                </div>
                <div class="form-group">
                  <label >Anak ke dari jumlah saudara</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="ex: anak ke 1 dari 3 saudara" data-namaKolom="anakKe">
                </div>
                <div class="form-group">
                  <label >Nama sekolah</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="namaSekolah">
                </div>
                <div class="form-group">
                  <label >Kelas</label>
                  <input type="number_format" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan kelas" data-namaKolom="kelas">
                </div>
                <div class="form-group">
                  <label>Alamat lengkap</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3" placeholder="Masukkan ..." data-namaKolom="alamat"><?php echo "$a[namaPelangganPgl]" ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>B. Riwayat Kelahiran</h4></label><br>
                  <label for="exampleInputEmail1">1. Perkembangan Masa kehamilan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="perkHamil">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. Penyakit pada masa kehamilan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="penyakitHamil">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Usia kandungan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="usiaKandung">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. Riwayat proses kelahiran</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="riwayatLhr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. tempat kelahiran</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="tempatLahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">6. Penolong proses kelahiran</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="penolongLhr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">7. gangguan pada saat bayi lahir</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="gangguanLhr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">8. Berat bayi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="beratBy">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">9. panjang bayi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="panjangBy">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">10. tanda-tanda kelainan pada bayi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kelainanBy">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>C. Perkembangan masa balita</h4></label><br>
                  <label for="exampleInputEmail1">1. menetek hingga umur</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="netekUmr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. minum susu kaleng hingga umur</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="mnmKlgUmr">
                </div>
                 <div class="form-group">
        <label>3. Imunisasi </label><br>
                  <input type="radio" name="imunisasi" class="pelangganR" id="im1"  <?php if ("$a[namaPelangganPgl]"=="lengkap") {
                    echo "checked";};?> data-namaKolom="imunisasi">
        <label>Lengkap</label>
                  <input type="radio" name="imunisasi" class="pelangganR" id="im2" value="" <?php if ("$a[namaPelangganPgl]" =="tidak") {
                    echo "checked";};?> data-namaKolom="imunisasi">
                <label>tidak lengkap</label>
              </div>
              <div class="form-group">
        <label>4. Pemeriksaan </label><br>
                  <input type="radio" name="pemeriksaan" class="pelangganR" id="pm1" value="" <?php if ("$a[namaPelangganPgl]"=="rutin") {
                    echo "checked";};?> data-namaKolom="pemeriksaan">
        <label>Rutin</label>
                  <input type="radio" name="pemeriksaan" class="pelangganR" id="pm2" value="" <?php if ("$a[namaPelangganPgl]" =="tidak") {
                    echo "checked";};?> data-namaKolom="pemeriksaan">
                <label>tidak rutin</label>
              </div>
               
                <div class="form-group">
                  <label for="exampleInputEmail1">5. Kualitas makanan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kltsMkn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">6. kuantitas makanan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="knttsMkn">
                </div>
                <div class="form-group">
        <label>7. Kesulitan makan </label><br>
                  <input type="radio" name="kltsMkn" class="pelangganR" id="km1" value="<?php echo "$a[namaPelangganPgl]" ?>" <?php if ("$a[namaPelangganPgl]"=="ya") {
                    echo "checked";};?> data-namaKolom="ksltnMkn">
        <label>Ya</label>
                  <input type="radio" name="kltsMkn" class="pelangganR" id="km2" value="" <?php if ("$a[namaPelangganPgl]"=="tidak") {
                    echo "checked";};?> data-namaKolom="ksltnMkn">
                <label>tidak</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>D. Perkembangan fisik</h4></label><br>
                  <label for="exampleInputEmail1">1. Bisa berdiri di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="berdiriUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. bisa berjalan di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="jalanUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. naik sepeda roda 4 di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="spdrdUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. naik sepeda roda 2 di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="spdrdduaUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. bicara kalimat lengkap di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="mnmKlgUmr">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">6. kesulitan gerakan yang dialami</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sulitGerak">
                </div>
                <div class="form-group">
        <label>7. Status gizi balita </label><br>
                  <input type="radio" name="giziBalita" class="pelangganR" id="sg1" value="" <?php if ("$a[namaPelangganPgl]"=="baik") {
                    echo "checked";};?> data-namaKolom="giziBalita">
        <label>Baik</label>
                  <input type="radio" name="giziBalita" class="pelangganR" id="sg2" value="" <?php if ("$a[namaPelangganPgl]"=="kurang") {
                    echo "checked";};?> data-namaKolom="giziBalita">
                <label>Kurang</label>
              </div>
              <div class="form-group">
        <label>8. Riwayat kesehatan </label><br>
                  <input type="radio" name="giziBalita" class="pelangganR"  id="rk1" value="" <?php if ("$a[namaPelangganPgl]"=="baik") {
                    echo "checked";};?> data-namaKolom="rwytKshtn">
        <label>Baik</label>
                  <input type="radio" name="giziBalita" class="pelangganR" id="rk2" value="" <?php if ("$a[namaPelangganPgl]" =="kurang") {
                    echo "checked";};?> data-namaKolom="rwytKshtn">
                <label>Kurang</label>
              </div>
              <div class="form-group">
        <label>9. Penggunaan tangan dominan </label><br>
                  <input type="radio" name="tanganDominan" class="pelangganR" id="pt1" value="" <?php if ("$a[namaPelangganPgl]"=="Kanan") {
                    echo "checked";};?> data-namaKolom="tanganDominan">
        <label>Kanan</label>
                  <input type="radio" name="tanganDominan" class="pelangganR" id="pt2" value="" <?php if ("$a[namaPelangganPgl]"=="Kiri") {
                    echo "checked";};?> data-namaKolom="tanganDominan">
                <label>Kiri</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>E. Perkembangan Bahasa</h4></label><br>
                  <label for="exampleInputEmail1">1. Meraba atau berceloteh di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="rabaUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. Mengucapkan satu suku kata yang bermakna di usia(mis:pa, ma, kak)</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kataBrmkn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Berbicara dengan satu suku kata bermakna pada usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="kataBrmknUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. berbicara dengan kalimat lengkap sederhana di usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="klmtLngkp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>F. Perkembangan Sosial</h4></label><br>
                  <label for="exampleInputEmail1">1. Hubungan dengan saudara</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hubSaudara">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. Hubungan dengan teman seusia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hubTmn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Hubungan dengan orang tua</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hubOrtu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. Hobi</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="hobi">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. minat khusus</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="minat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>G. Perkembangan Akademik</h4></label><br>
                  <label for="exampleInputEmail1">1. Masuk TK usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="tkUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">2. lama pendidikan di TK</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="lamaTk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">3. Kesulitan belajar di TK</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sulitTk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">4. Masuk SD usia</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sdUsia">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">5. Kesulitan belajar di SD</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="sulitSd">
                </div>
                <div class="form-group">
        <label>6. Pernah tidak naik kelas </label><br>
                  <input type="radio" name="tdkNaikKls" class="pelangganR" id="nk1" value="" <?php if ("$a[namaPelangganPgl]"=="iya") {
                    echo "checked";};?> data-namaKolom="tdkNaikKls">
        <label>Iya</label>
                  <input type="radio" name="tdkNaikKls" class="pelangganR" id="nk2" value="" <?php if ("$a[namaPelangganPgl]"=="tidak") {
                    echo "checked";};?> data-namaKolom="tdkNaikKls">
                <label>Tidak</label>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">7. layanan pendidikan khusus yang pernah diterima anak</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="layananSblm">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">8. Prestasi belajar yang pernah dicapai</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="prestasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">9. Mata pelajaran yang dirasa paling sulit</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="matpelSulit">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">10. Mata pelajaran yang paling disukai</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="matpelSuka">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">11. Keterangan lain yang perlu dituliskan</label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="ex: mencari minat dan bakat anak" data-namaKolom="ketLain">
                </div>                      
        <div class="form-group">
                <label>Nomer Telpon:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control pelanggan" name = "noTelpon" value="<?php echo "$a[namaPelangganPgl]" ?>"
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
                  <input type="text" class="form-control pelanggan" name = "noHp" value="<?php echo "$a[namaPelangganPgl]" ?>"
                         data-inputmask="'mask': ['999-999-999-999', '+099 99 99 9999[9]']" data-mask data-namaKolom="noHp">
                </div>
                <!-- /.input group -->
              </div>
        <input type="hidden" class="form-control pelanggan" name = "email" value="" >
        <input type="hidden" class="form-control pelanggan" name = "password" value="" >
        
                <div class="form-group">
                  <label for="exampleInputFile">Upload Foto Anak</label>
          <p class="help-block"></p>
          <img src="<?php echo base_url(); ?>assets/images/foto/" width="200px" height: "300px">
                  <input type="file" name = "foto" id="foto" >
                  <p class="help-block">Foto 3X4 ukuran kurang dari 3 MB.</p>
                </div>
        
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="#orangtua" data-toggle="tab"><button type="submit" class="btn btn-primary">Submit</button></a>
              </div>
            </form>
              </div>
              <div class="tab-pane" id="orangtua">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
                 <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>A. Ayah</h4></label><br>
                  <label for="exampleInputEmail1">1. Nama </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="ayah">
                </div>
                <div class="form-group">
                  <label >2. Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usiaAyh">
                </div>
                <div class="form-group">
                  <label >3. Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agamaAyh">
                </div>
                <div class="form-group">
                  <label >4. Status Ayah</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="statusAyh">
                </div>
                <div class="form-group">
                  <label >5. Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikanAyh">
                </div>
                <div class="form-group">
                  <label >6. Pekerjaan</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pekerjaanAyh" >
                </div>
                <div class="form-group">
                  <label>7. Alamat Sekarang</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="almtAyh"><?php echo "$a[namaPelangganPgl]" ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>B. Ibu</h4></label><br>
                  <label for="exampleInputEmail1">1. Nama </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="ibu">
                </div>
                <div class="form-group">
                  <label >2. Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usiaIbu">
                </div>
                <div class="form-group">
                  <label >3. Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agamaIbu">
                </div>
                <div class="form-group">
                  <label >4. Status Ibu</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="statusIbu">
                </div>
                <div class="form-group">
                  <label >5. Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikanIbu">
                </div>
                <div class="form-group">
                  <label >6. Pekerjaan</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pekerjaanIbu">
                </div>
                <div class="form-group">
                  <label>7. Alamat Sekarang</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="almtIbu"><?php echo "$a[namaPelangganPgl]" ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>C. Wali</h4></label><br>
                  <label for="exampleInputEmail1">1. Nama </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="wali">
                </div>
                <div class="form-group">
                  <label >2. Usia</label>
                  <input type="number_format" class="form-control pelanggan" id="nim" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nim" placeholder="Masukkan Usia" data-namaKolom="usiaWl">
                </div>
                <div class="form-group">
                  <label >3. Agama</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan agama" data-namaKolom="agamaWl">
                </div>
                <div class="form-group">
                  <label >4. Status Ayah</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan indonesia/jawa" data-namaKolom="statusWl">
                </div>
                <div class="form-group">
                  <label >5. Pendidikan terakhir</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pendidikanWl">
                </div>
                <div class="form-group">
                  <label >6. Pekerjaan</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="pekerjaanWl">
                </div>
                <div class="form-group">
                  <label>7. Alamat Sekarang</label>
                  <textarea name="alamat" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="almtWl"><?php echo "$a[namaPelangganPgl]" ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>D. Hubungan orang tua-anak</h4></label><br>
                   <label>1. Kedua orang tua tinggal serumah</label><br>
                  <input type="radio" name="ortuSerumah" class="pelangganR" id="ot1" value="" <?php if ("$a[namaPelangganPgl]"=="iya") {
                    echo "checked";};?> data-namaKolom="ortuSerumah">
        <label>Iya</label>
                  <input type="radio" name="ortuSerumah" class="pelangganR" id="ot2" value="" <?php if ("$a[namaPelangganPgl]"=="tidak") {
                    echo "checked";};?> data-namaKolom="ortuSerumah">
                <label>Tidak</label>
                </div>
                <div class="form-group">
        <label>2. anak tinggal serumah bersama orang tua </label><br>
                  <input type="radio" name="anakOrtu" class="pelangganR" id="at1" value="" <?php if ("$a[namaPelangganPgl]"=="iya") {
                    echo "checked";};?> data-namaKolom="anakOrtu">
        <label>Iya</label>
                  <input type="radio" name="anakOrtu" class="pelangganR" id="at2" value="" <?php if ("$a[namaPelangganPgl]"=="tidak") {
                    echo "checked";};?> data-namaKolom="anakOrtu">
                <label>Tidak</label>
              </div>
              <div class="form-group">
        <label>3. anak diasuh oleh salah satu orang tua/single parent </label><br>
                  <input type="radio" name="anakSatuOrtu" class="pelangganR" id="as1" value="" <?php if ("$a[namaPelangganPgl]"=="iya") {
                    echo "checked";};?> data-namaKolom="anakSatuOrtu">
        <label>Iya</label>
                  <input type="radio" name="anakSatuOrtu" class="pelangganR" id="as2" value="" <?php if ("$a[namaPelangganPgl]"=="tidak") {
                    echo "checked";};?> data-namaKolom="anakSatuOrtu">
                <label>Tidak</label>
              </div>
              <div class="form-group">
        <label>4. Anak diasuh oleh wali/saudara</label><br>
                  <input type="radio" name="anakWali" class="pelangganR" id="wl1" value="" <?php if ("$a[namaPelangganPgl]"=="iya") {
                    echo "checked";};?> data-namaKolom="anakWali">
        <label>Iya</label>
                  <input type="radio" name="anakWali" class="pelangganR" id="wl2" value="" <?php if ("$a[namaPelangganPgl]"=="tidak") {
                    echo "checked";};?> data-namaKolom="anakWali">
                <label>Tidak</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"><h4>E. Sosial Ekonomi orang tua</h4></label><br>
                  <label for="exampleInputEmail1">1. jabatan formal ayah di tempat kerja(jika ada) </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="jabAyh">
                </div>
                <div class="form-group">
                  <label>2. jabatan formal ibu di tempat kerja(jika ada)</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="jabIbu">
                </div>
                <div class="form-group">
                  <label>3. jabatan informal ayah di luar tempat kerja(jika ada)</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir">
                </div>
                <div class="form-group">
                  <label>4. jabatan informal ibu di luar tempat kerja(jika ada)</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="jabiIbu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>F. Persepsi orang tua terhadap anak</h4></label><br>
                  <label for="exampleInputEmail1">1. Persepsi/tanggapan orang tua terhadap anak </label>
                  <input type="text" class="form-control pelanggan" id="nama" value="<?php echo "$a[namaPelangganPgl]" ?>" name="nama" placeholder="Masukkan nama" data-namaKolom="persepsiOrtu">
                </div>
                <div class="form-group">
                  <label>2. Kesulitan yang dihadapi orang tua selama ini dalam pengasuhan anak</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="kesulitanOrtu">
                </div>
                <div class="form-group">
                  <label>3. harapan orang tua terhadap perkembangan dan pendidikan anak</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="harapanOrtu">
                </div>
                <div class="form-group">
                  <label>4. bantuan yang diharapkan orang tua bagi anak</label>
                  <input type="text" class="form-control pelanggan" id="tempatLahir" value="<?php echo "$a[namaPelangganPgl]" ?>" name="tptLahir" placeholder="Masukkan pendidikan terakhir" data-namaKolom="bantuanOrtu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><h4>G. Penjelasan tambahan tentang anak</h4></label><br>
                  <textarea name="tambahan" class="form-control pelanggan" rows="3"  placeholder="Masukkan ..." data-namaKolom="tambahan"><?php echo "$a[namaPelangganPgl]" ?></textarea>
                </div>

            </div>
              <?php
          }
              ?>
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
                    if ($b['idGejala']==$a['idGejala'])
                      {if ($b['nilai']==1)
                        {echo "checked" ;}
                      }
                    };
                      ?> ></td>
                  <td><input type="radio" name="adhd<?php echo "$a[idGejala]"?>" class="adhd" data-idGejala="<?php echo "$a[idGejala]"?>" id="adhd2" value="" <?php foreach ($nilai_adhd as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
                  <td><input type="radio" name="tunalaras<?php echo "$a[idGejala]"?>" class="tunalaras" data-idGejala="<?php echo "$a[idGejala]"?>" id="tunalaras1" value="" <?php foreach ($nilai_tunalaras as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="tunalaras<?php echo "$a[idGejala]"?>" class="tunalaras" data-idGejala="<?php echo "$a[idGejala]"?>" id="tunalaras2" value="" <?php foreach ($nilai_tunalaras as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
                  <td><input type="radio" name="ds<?php echo "$a[idGejala]"?>" class="ds" data-idGejala="<?php echo "$a[idGejala]"?>" id="ds1" value="" <?php foreach ($nilai_ds as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="ds<?php echo "$a[idGejala]"?>" class="ds" data-idGejala="<?php echo "$a[idGejala]"?>" id="ds2" value="" <?php foreach ($nilai_ds as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
                  <td><input type="radio" name="sl<?php echo "$a[idGejala]"?>" class="sl" data-idGejala="<?php echo "$a[idGejala]"?>" id="sl1" value="" <?php foreach ($nilai_sl as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="sl<?php echo "$a[idGejala]"?>" class="sl" data-idGejala="<?php echo "$a[idGejala]"?>" id="sl2" value="" <?php foreach ($nilai_sl as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
                  <td><input type="radio" name="rm<?php echo "$a[idGejala]"?>" class="rm" data-idGejala="<?php echo "$a[idGejala]"?>" id="rm1" value="" <?php foreach ($nilai_rm as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="rm<?php echo "$a[idGejala]"?>" class="rm" data-idGejala="<?php echo "$a[idGejala]"?>" id="rm2" value="" <?php foreach ($nilai_rm as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==0){echo "checked";}}};?>></td>

                  
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
                  <td><input type="radio" name="autis<?php echo "$a[idGejala]"?>" class="autis" data-idGejala="<?php echo "$a[idGejala]"?>" id="autis1" value="" <?php foreach ($nilai_autis as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==1){echo "checked";}}};?>></td>
                  <td><input type="radio" name="autis<?php echo "$a[idGejala]"?>" class="autis" data-idGejala="<?php echo "$a[idGejala]"?>" id="autis2" value="" <?php foreach ($nilai_autis as $b) {if ($b['idGejala']==$a['idGejala']){if ($b['nilai']==0){echo "checked";}}};?>></td>
                  
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
              <div class="tab-pane" id="DataPsikomotor">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
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
          foreach ($psikomotor as $a) {
          if ($a['idData']!=18) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idData]"?></td>
                  <td><?php echo "$a[kemampuan]" ?></td>
                  <td><input type="radio" name="psikomotor<?php echo "$a[idData]"?>" class="psikomotor" data-idGejala="<?php echo "$a[idData]"?>" id="psikomotor1" value="" <?php foreach ($nilai_psikomotor as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==10){echo "checked";}}};?>></td>
                  <td><input type="radio" name="psikomotor<?php echo "$a[idData]"?>" class="psikomotor" data-idGejala="<?php echo "$a[idData]"?>" id="psikomotor2" value="" <?php foreach ($nilai_psikomotor as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==20){echo "checked";}}};?>></td>
                  <td><input type="radio" name="psikomotor<?php echo "$a[idData]"?>" class="psikomotor" data-idGejala="<?php echo "$a[idData]"?>" id="psikomotor3" value="" <?php foreach ($nilai_psikomotor as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==30){echo "checked";}}};?>></td>
                  <td><div class="form-group">
                  <input type="text" id="nama" class="dataPsikomotor" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_psikomotor as $b) {if ($b['idData']==$a['idData']){print_r($b['waktu']); }};?> " name="nama" placeholder="Masukkan waktu" data-namaKolom="waktu">
                </div></td>
                  <td><div class="form-group">
                  <input type="text" id="nama" class="dataPsikomotor" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_psikomotor as $b) {if ($b['idData']==$a['idData']){print_r($b['keterangan']); }};?>" name="nama" placeholder="Masukkan keterangan" data-namaKolom="keterangan">
                </div></td>
                  
                </tr>

        <?php
          }}
        ?>
                <tr>
                  <td>Hasil</td>
                  <td></td>
                  <td><?php foreach ($nilai_psikomotor as $b) {if ($b['idData']==18){print_r($b['nilai']); }};?> </td>
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
              
        </form>
              </div>
              <div class="tab-pane" id="DataKognisi">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
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
          foreach ($kognisi as $a) {
          if ($a['idData']!=15) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idData]"?></td>
                  <td><?php echo "$a[kemampuan]" ?></td>
                  <td><input type="radio" name="kognisi<?php echo "$a[idData]"?>" class="kognisi" data-idGejala="<?php echo "$a[idData]"?>" id="kognisi1" value="" <?php foreach ($nilai_kognisi as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==10){echo "checked";}}};?>></td>
                  <td><input type="radio" name="kognisi<?php echo "$a[idData]"?>" class="kognisi" data-idGejala="<?php echo "$a[idData]"?>" id="kognisi2" value="" <?php foreach ($nilai_kognisi as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==20){echo "checked";}}};?>></td>
                  <td><input type="radio" name="kognisi<?php echo "$a[idData]"?>" class="kognisi" data-idGejala="<?php echo "$a[idData]"?>" id="kognisi3" value="" <?php foreach ($nilai_kognisi as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==30){echo "checked";}}};?>></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataKognisi" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_kognisi as $b) {if ($b['idData']==$a['idData']){print_r($b['waktu']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="waktu">
                </div></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataKognisi" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_kognisi as $b) {if ($b['idData']==$a['idData']){print_r($b['keterangan']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="keterangan">
                </div></td>
                  
                </tr>
        <?php
          }}
        ?>
                <tr>
                  <td>Hasil</td>
                  <td></td>
                  <td><?php foreach ($nilai_kognisi as $b) {if ($b['idData']==15){print_r($b['nilai']); }};?> </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kemampuan</th>
                  <th>Nilai</th>
                  <th>Waktu</th>
                  <th>Keterangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
              
        </form>
              </div>
              <div class="tab-pane" id="DataAfeksi">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
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
                  <input type="text" id="waktu" class="dataAfeksi" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){print_r($b['waktu']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="waktu">
                </div></td>
                  <td><div class="form-group">
                  <input type="text" id="keterangan" class="dataAfeksi" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_afeksi as $b) {if ($b['idData']==$a['idData']){print_r($b['keterangan']); }};?>" name="keterangan" placeholder="" data-namaKolom="keterangan">
                </div></td>
                  
                </tr>
        <?php
          }}
        ?>
        <tr>
                  <td>Hasil</td>
                  <td></td>
                  <td><?php foreach ($nilai_afeksi as $b) {if ($b['idData']==15){print_r($b['nilai']); }};?> </td>
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
              
        </form>
              </div>
              <div class="tab-pane" id="DataAkademik">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
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
          foreach ($akademik as $a) {
          if ($a['idData']!=22) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idData]"?></td>
                  <td><?php echo "$a[kemampuan]" ?></td>
                  <td><input type="radio" name="akademik<?php echo "$a[idData]"?>" class="akademik" data-idGejala="<?php echo "$a[idData]"?>" id="akademik1" value="" <?php foreach ($nilai_akademik as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==10){echo "checked";}}};?>></td>
                  <td><input type="radio" name="akademik<?php echo "$a[idData]"?>" class="akademik" data-idGejala="<?php echo "$a[idData]"?>" id="akademik2" value="" <?php foreach ($nilai_akademik as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==20){echo "checked";}}};?>></td>
                  <td><input type="radio" name="akademik<?php echo "$a[idData]"?>" class="akademik" data-idGejala="<?php echo "$a[idData]"?>" id="akademik3" value="" <?php foreach ($nilai_akademik as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==30){echo "checked";}}};?>></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataAkademik" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_akademik as $b) {if ($b['idData']==$a['idData']){print_r($b['waktu']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="waktu">
                </div></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataAkademik" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_akademik as $b) {if ($b['idData']==$a['idData']){print_r($b['keterangan']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="keterangan">
                </div></td>
                  
                </tr>
        <?php
          }}
        ?>
                <tr>
                  <td>Hasil</td>
                  <td></td>
                  <td><?php foreach ($nilai_akademik as $b) {if ($b['idData']==22){print_r($b['nilai']); }};?> </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kemampuan</th>
                  <th>Nilai</th>
                  <th>Waktu</th>
                  <th>Keterangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
              
        </form>
              </div>
              <div class="tab-pane" id="DataSosial">
        <form role="form" action="<?php echo base_url(); ?>pengiriman/setPengirimanAmbil/" method="post" enctype="multipart/form-data">
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
          foreach ($sosial as $a) {
          if ($a['idData']!=12) {
        ?>
        <tr data-id="DataPsikomotor" >
                  <td><?php echo "$a[idData]"?></td>
                  <td><?php echo "$a[kemampuan]" ?></td>
                  <td><input type="radio" name="sosial<?php echo "$a[idData]"?>" class="sosial" data-idGejala="<?php echo "$a[idData]"?>" id="sosial1" value="" <?php foreach ($nilai_sosial as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==10){echo "checked";}}};?>></td>
                  <td><input type="radio" name="sosial<?php echo "$a[idData]"?>" class="sosial" data-idGejala="<?php echo "$a[idData]"?>" id="sosial2" value="" <?php foreach ($nilai_sosial as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==20){echo "checked";}}};?>></td>
                  <td><input type="radio" name="sosial<?php echo "$a[idData]"?>" class="sosial" data-idGejala="<?php echo "$a[idData]"?>" id="sosial3" value="" <?php foreach ($nilai_sosial as $b) {if ($b['idData']==$a['idData']){if ($b['nilai']==30){echo "checked";}}};?>></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataSosial" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_sosial as $b) {if ($b['idData']==$a['idData']){print_r($b['waktu']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="waktu">
                </div></td>
                  <td><div class="form-group">
                  <input type="text" id="waktu" class="dataSosial" data-idGejala="<?php echo "$a[idData]"?>" value="<?php foreach ($nilai_sosial as $b) {if ($b['idData']==$a['idData']){print_r($b['keterangan']); }};?> " name="waktu" placeholder="Masukkan waktu" data-namaKolom="keterangan">
                </div></td>
                  
                </tr>
        <?php
          }}
        ?>
                 <tr>
                  <td>Hasil</td>
                  <td></td>
                  <td><?php foreach ($nilai_sosial as $b) {if ($b['idData']==12){print_r($b['nilai']); }};?> </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kemampuan</th>
                  <th>Nilai</th>
                  <th>Waktu</th>
                  <th>Keterangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
              
        </form>
              </div>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
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
