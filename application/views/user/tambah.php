<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Data Diri - Bantul Tangguh</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dash.css');?>"> <!-- CSS reset -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/new.css');?>"> <!-- CSS reset -->
    <!-- Bootstrap core CSS-->
    
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css" rel="stylesheet')?>">
    
    <!-- Custom styles for this template-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/tinymce/plugin/tinymce/tinymce.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/tinymce/plugin/tinymce/init-tinymce.js')?>"></script>

   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet"> -->



</head>



<body style="background-color: #dc3545">

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="575" height="100" class="img-fluid" class="center">

                </a>

            </nav>



<div class="wrapper fadeInDown" style="
    margin: 5%;
    background-color: red;
">

        <div id="formContent4" style="
    background-color: white;
    border-radius: 10px;">

          <nav class="navbar navbar-expand-lg navbar-dark" >

                <a class="navbar-brand mx-auto" href="#" style="padding-left: 0;">

       <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="150" height="50" class="img-fluid">

      </a>

   </nav>

       <!-- Login Form -->

<div class="row" style="
    margin: 5%;
">

        <div class="col-lg-4">

<form >

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="id" value="<?php echo $pelapor->id?>">

 



           <h5 class="card-title">Data Pelapor</h5>

             <div class="form-group">

              <label for="Nama">Nama Pelapor</label>

                 <input type="text" readonly class="form-control" id="Nama" value="<?php echo $pelapor->nama?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">NIK</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->nik?>">


              </div>

              <div class="form-group">

              <label for="staticEmail">Nomor HP</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->nomorhp?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Usia</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->usia?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Mulai Isolasi</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->mulai_isolasi?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Status dalam Keluarga</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->status_dlm_keluarga?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Jenis Kelamin</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->jeniskelamin?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">RT</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $pelapor->alamat?>">

              </div>
                <?php if ($pelapor->penduduk==1) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Krapyak Wetan <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==2) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Krapyak Kulon <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==3) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Dongkelan <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==4) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Glugo <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==5) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Kweni <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==6) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Pelemsewu <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==7) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Sawit <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==8) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Pandes <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==9) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Glondong <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==10) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Jaranan <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==11) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Geneng <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==12) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Ngireng-ngireng <?php echo $pelapor->alamat ?>, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==13) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Cabeyan, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==14) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Garon, Panggungharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==15) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Dadapan <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==16) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Tembi <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==17) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Gatak <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==18) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Balong <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==19) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Gabusan <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==20) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Dagan <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==21) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Sewon <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==22) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Mriyan <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==23) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Kowen I <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==24) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Kowen II <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

                <?php if ($pelapor->penduduk==25) {?>
              <div class="form-group">
                <label for="staticEmail">Domisili</label>
                <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Dobalan <?php echo $pelapor->alamat ?>, Timbulharjo, Sewon.">
              </div>
                <?php } ?>

      </form>

      </div>

      <div class="col-lg-8">
<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 
<form action="<?php echo base_url('data/tambah')?>"  method="post" enctype="multipart/form-data">

    <div class="container">

        <div class="container">
  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>

      <input type="number" minlength=16 class="form-control"  placeholder="Masukkan NIK" required="" name="nik" value="">

  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" class="form-control"  placeholder="Masukkan Nama" required="" name="nama" value="">

  </div>
  <div class="form-group">

    <label for="Nomorhp">NomorHp</label>

    <input type="text" class="form-control"  placeholder="Masukkan Nama" required="" name="nomorhp" value="">

  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" class="form-control"  placeholder="Masukkan Usia" required="" name="usia" value="">

  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control"  required="" name="mulai_isolasi" value="">
  </div>

  <div class="form-group">

    <label for="JenisKelamin">Status dalam Keluarga</label>

    <div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga"  value="Kepala Keluarga" required="">

  <label class="form-check-label" for="exampleRadios1">

    Kepala Keluarga

  </label>

</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga"  value="Anggota Keluarga" required="">

  <label class="form-check-label" for="exampleRadios2">

    Anggota Keluarga

  </label>

</div>

  </div>

  <div class="form-group">
      <label for="status">Jenis Kelamin</label><br>
          <select required id="jeniskelamin" class="form-control" name="jeniskelamin" class="select" onchange="return showHamil() ;">
            <option selected value="">Pilih salah satu...</option>
            <option name="jeniskelamin" value="Laki-laki">Laki-laki</option>
            <option name="jeniskelamin" value="Perempuan">Perempuan</option>
          </select>
  </div>

  <div id="nlHamil" style="visibility: hidden;" class="form-group">
      <label for="status">Apakah Hamil?</label><br>
          <select id="hamil" class="form-control" name="hamil" class="select" >
            <option selected value="">Pilih salah satu...</option>
            <option name="hamil" value="0">Tidak</option>
            <option name="hamil" value="hamil">Hamil</option>
          </select>
  </div>
  <div class="form-group">
      <label for="kecamatan">Provinsi</label><br>
   <select required id="provinsi" name="provinsi" class="form-control input-lg" hidden>
      <option selected>Pilih Provinsi</option>
    <?php foreach ($wilayah as $provinsi) {                                                                 ?>
    <option value="<?php echo $provinsi->id ?>" <?php if ($provinsi->id=='34'){echo "selected";}?>><?php echo $provinsi->name ?></option>
    <?php }?>
  </select>
  </div>
<div class="form-group">
      <label for="kecamatan">Kota</label><br>
   <select required id="kota" name="kota" class="form-control input-lg">
      <option selected>Pilih Kota</option>
  </select>
  </div>
  <div class="form-group">
      <label for="kecamatan">Kecamatan</label><br>
   <select required id="kecamatan" name="kecamatan" class="form-control input-lg">
      <option selected>Pilih Kecamatan</option>
  </select>
  </div>
<div class="form-group">
      <label for="kecamatan">Kelurahan</label><br>
   <select required id="kelurahan" name="kelurahan" class="form-control input-lg">
      <option selected>Pilih kelurahan</option>
  </select>


  <div class="form-group">
    <label for="Alamat">Pilih RT</label><br>
        <select required id="Alamat" class="form-control" name="alamat" class="select">
          <option selected value="">Pilih salah satu...</option>
          <option name="alamat" value="RT 01">RT 01</option>
          <option name="alamat" value="RT 02">RT 02</option>
          <option name="alamat" value="RT 03">RT 03</option>
          <option name="alamat" value="RT 04">RT 04</option>
          <option name="alamat" value="RT 05">RT 05</option>
          <option name="alamat" value="RT 06">RT 06</option>
          <option name="alamat" value="RT 07">RT 07</option>
          <option name="alamat" value="RT 08">RT 08</option>
          <option name="alamat" value="RT 09">RT 09</option>
          <option name="alamat" value="RT 10">RT 10</option>
          <option name="alamat" value="RT 11">RT 11</option>
          <option name="alamat" value="RT 12">RT 12</option>
        </select>
  </div>
  
  <div class="form-group">
    <label for="status">Status</label><br>
        <select required  class="form-control" name="status" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="status" value="KE">Kontak Erat</option>
          <option name="status" value="positif">Positif</option>
          <option name="status" value="Suspect">Suspect</option>
        </select>
  </div>
  <div class="form-group">
    <label for="status">Tempat Isolasi</label><br>
        <select required  class="form-control" name="tempat_isolasi" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="tempat_isolasi" value="Rumah">Rumah</option>
          <option name="tempat_isolasi" value="Shelter">Shelter</option>
        </select>
  </div>
</div>
<div class="form-group">

    <label for="Nama">Upload KTP</label>

    <input type="file" class="form-control" name="gambar[]" value="" required="">

  </div>

  <div class="form-group">

    <label for="Nama">Upload Surat Test Swab</label>

    <input type="file" class="form-control" name="gambar[]" value="" required="">

  </div>


  <button type="submit" class="btn btn-primary">Kirim</button>

</div>

</div>





</form>

</div>





         <!-- Remind Passowrd -->

        </div>

      </div>

    </header>


<script src="<?php echo base_url('assets/js/wilayah.js')?>"></script>


    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->


    <script>
     function showHamil() {
      var selectBox =document.getElementById('jeniskelamin');
      var userInput =selectBox.options[selectBox.selectedIndex].value;
      if (userInput == 'Perempuan') {
        document.getElementById('nlHamil').style.visibility ='visible';
      } else {
        document.getElementById('nlHamil').style.visibility = 'hidden';
      }
      return false;
     }

   </script>



</body>



</html>