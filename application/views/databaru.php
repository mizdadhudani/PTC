<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Data Diri - Bantul Tangguh</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

    <!-- Menyisipkan Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->



      <!-- CSS Files -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">



</head>



<body>

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="575" height="100" class="img-fluid" class="center">

                </a>

            </nav>



        <div class="wrapper fadeInDown">

        <div id="formContent2">

          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFFAFA">

                <a class="navbar-brand mx-auto" href="#">

       <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="150" height="50" class="img-fluid">

      </a>

   </nav>

       <!-- Login Form -->

<form action="<?php echo base_url('page/submitdatabaru')?>"  method="post" enctype="multipart/form-data">

    <div class="container">

        <div class="container">

  <input type="number" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="link" value="<?php echo $data->link?>">

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="id" value="<?php echo $data->id?>">

        <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="idk" value="<?php echo $datak->id?>">
        <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="harisatu" value="<?php echo $data->harisatu?>">
        <input type="text"  hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="haridua" value="<?php echo $data->haridua?>">
  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="nik" value="<?php echo $data->nik?>">

  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="nama" value="<?php echo $data->nama?>">

  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" class="form-control" id="Nama" placeholder="Masukkan Usia" required="" name="usia" value="<?php echo $data->usia?>">

  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $data->mulai_isolasi?>">
  </div>

  <div class="form-group">

    <label for="JenisKelamin">Status dalam Keluarga</label>

    <div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga" id="status_dlm_keluarga" value="Kepala Keluarga" required="">

  <label class="form-check-label" for="exampleRadios1">

    Kepala Keluarga

  </label>

</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga" id="status_dlm_keluarga" value="Anggota Keluarga" required="">

  <label class="form-check-label" for="exampleRadios2">

    Anggota Keluarga

  </label>

</div>

  </div>




    <input type="number" hidden class="form-control" id="NomorHP" placeholder="Masukkan nomor HP" required="" name="nomorhp" value="<?php echo $data->link?>" disable>



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
      <label for="kecamatan">Kecamatan</label><br>
   <select required name="kecamatan" id="kecamatan" class="form-control input-lg">
    <option value="">Pilih Kecamatan</option>
    <?php
    foreach($kecamatan as $row)
    {
     echo '<option value="'.$row->id_kecamatan.'">'.$row->nama_kecamatan.'</option>';
    }
    ?>
   </select>
  </div>


  <div class="form-group">
    <label for="desa">Desa</label><br>
   <select required="" name="desa" id="desa" class="form-control input-lg">
    <option value="">Pilih Desa</option>
   </select>
  </div>


  <div class="form-group">
    <label for="dukuh">Padukuhan</label><br>
   <select required="" name="penduduk" id="dukuh" class="form-control input-lg">
    <option value="">Pilih Padukuhan</option>
   </select>
  </div>

  <!-- <div class="form-group">
    <label for="status">Desa</label><br>
        <select id="desa" class="form-control" name="desa" class="select" onchange="return showDesa() ;">
          <option name="desa" value="Panggungharjo">Panggungharjo</option>
          <option name="desa" value="Timbulharjo">Timbulharjo</option>
        </select>
  </div> -->

<!--   <div class="form-group">
<<<<<<< HEAD
=======
    <label for="penduduk">Alamat Domisili</label><br>
        <select required id="penduduk" class="form-control" name="penduduk" class="select">
          <option selected value="">Pilih salah satu...</option>
          <option name="penduduk" value="Dukuh Krapyak Wetan">Dukuh Krapyak Wetan</option>
          <option name="penduduk" value="Dukuh Krapyak Kulon">Dukuh Krapyak Kulon</option>
          <option name="penduduk" value="Dukuh Dongkelan">Dukuh Dongkelan</option>
          <option name="penduduk" value="Dukuh Glugo">Dukuh Glugo</option>
          <option name="penduduk" value="Dukuh Kweni">Dukuh Kweni</option>
          <option name="penduduk" value="Dukuh Pelemsewu">Dukuh Pelemsewu</option>
          <option name="penduduk" value="Dukuh Sawit">Dukuh Sawit</option>
          <option name="penduduk" value="Dukuh Pandes">Dukuh Pandes</option>
          <option name="penduduk" value="Dukuh Glondong">Dukuh Glondong</option>
          <option name="penduduk" value="Dukuh Jaranan">Dukuh Jaranan</option>
          <option name="penduduk" value="Dukuh Geneng">Dukuh Geneng</option>
          <option name="penduduk" value="Dukuh Ngireng-ngireng">Dukuh Ngireng-ngireng</option>
          <option name="penduduk" value="Dukuh Cabeyan">Dukuh Cabeyan</option>
          <option name="penduduk" value="Dukuh Geneng">Dukuh Garon</option>
        </select>
  </div> -->

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
        <select required id="status" class="form-control" name="status" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="status" value="KE">Kontak Erat</option>
          <option name="status" value="positif">Positif</option>
        </select>
  </div>
  <div class="form-group">
    <label for="status">Tempat Isolasi</label><br>
        <select required id="status" class="form-control" name="tempat_isolasi" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="tempat_isolasi" value="Rumah">Rumah</option>
          <option name="tempat_isolasi" value="Shelter">Shelter</option>
        </select>
  </div>
</div>


  <button type="submit" class="btn btn-primary">Kirim</button>

</div>

</div>





</form>





         <!-- Remind Passowrd -->

        </div>

      </div>

    </header>





    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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

   <script>
$(document).ready(function(){
 $('#kecamatan').change(function(){
  var id_kecamatan = $('#kecamatan').val();
  if(id_kecamatan != '')
  {
   $.ajax({
    url:"<?php echo base_url('page/fetch_desa'); ?>",
    method:"POST",
    data:{id_kecamatan:id_kecamatan},
    success:function(data)
    {
     $('#desa').html(data);
     $('#dukuh').html('<option value="">Pilih Padukuhan</option>');
    }
   });
  }
  else
  {
   $('#desa').html('<option value="">Pilih Desa</option>');
   $('#dukuh').html('<option value="">Pilih Padukuhan</option>');
  }
 });

 $('#desa').change(function(){
  var id_desa = $('#desa').val();
  if(id_desa != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>page/fetch_dukuh",
    method:"POST",
    data:{id_desa:id_desa},
    success:function(data)
    {
     $('#dukuh').html(data);
    }
   });
  }
  else
  {
   $('#dukuh').html('<option value="">Pilih Padukuhan</option>');
  }
 });
 
});

</script>


</body>



</html>