<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 
<form action="<?php echo base_url('data/baru')?>"  method="post" enctype="multipart/form-data">

    <div class="container">

        <div class="container">
  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>
    <?php if (!empty($penduduk)) {?>
      <input type="number" minlength=16 class="form-control"  placeholder="Masukkan NIK" required="" name="nik" value="<?php echo $penduduk->nik?>">
    <?php  }else {?>
      <input type="number" minlength=16 class="form-control"  placeholder="Masukkan NIK" required="" name="nik" value="">
    <?php  }?>
  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" class="form-control"  placeholder="Masukkan Nama" required="" name="nama" value="<?php echo $penduduk->nama?>">

  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" class="form-control"  placeholder="Masukkan Usia" required="" name="usia" value="<?php echo $penduduk->usia?>">

  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control"  required="" name="mulai_isolasi" value="<?php echo $penduduk->mulai_isolasi?>">
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
   <select required id="provinsi" name="provinsi" class="form-control input-lg">
      <option selected>Pilih Provinsi</option>
    <?php foreach ($wilayah as $provinsi) {                                                                 ?>
    <option value="<?php echo $provinsi->id ?>" <?php if ($provinsi->id=='34'){echo "selected";}?>><?php echo $provinsi->name ?></option>
    <?php }?>
  </select>
  </div>
<div class="form-group">
      <label for="kecamatan">Kota</label><br>
   <select required id="kota" name="kota" class="form-control input-lg">
      <option selected>Pilih Provinsi</option>
  </select>
  </div>
  <div class="form-group">
      <label for="kecamatan">Kecamatan</label><br>
   <select required id="kecamatan" name="kecamatan" class="form-control input-lg">
      <option selected>Pilih Provinsi</option>
  </select>
  </div>

<!--   <div class="form-group">
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
  </div> -->

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





         <!-- Remind Passowrd -->

        </div>

      </div>

    </header>





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
<script src="<?php echo base_url('assets/js/wilayah.js')?>"></script>


</body>



</html>