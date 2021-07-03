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
  </div>
  <div class="form-group">
      <label for="kecamatan">Pedukuhan</label><br>
   <select required id="pedukuhan" name="pedukuhan" class="form-control input-lg">
      <option selected>Pilih Pedukuhan</option>
  </select>
  </div>
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

    <input type="file" class="form-control" name="gambar[]" value="tidak ada KTP">

  </div>

  <div class="form-group">

    <label for="Nama">Upload Surat Test Swab</label>

    <input type="file" class="form-control" name="gambar[]" value="tidak ada surat">

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