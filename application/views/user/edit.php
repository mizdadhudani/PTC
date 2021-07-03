<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 

       <!-- Login Form -->

<form action="<?php echo base_url('ganti/data/').$penduduk->nik?>"  method="post" enctype="multipart/form-data">

    <div class="container">

        <div class="container">

  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="nik" value="<?php echo $penduduk->nik?>">

  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="nama" value="<?php echo $penduduk->nama?>">

  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" class="form-control" id="Nama" placeholder="Masukkan Usia" required="" name="usia" value="<?php echo $penduduk->usia?>">

  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $penduduk->mulai_isolasi?>">
  </div>

  <div class="form-group">

    <label for="JenisKelamin">Status dalam Keluarga</label>

    <div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga" id="status_dlm_keluarga" value="Kepala Keluarga" required="" <?php echo($penduduk->status_dlm_keluarga=="Kepala Keluarga" ? 'checked' : '' ) ?>>


  <label class="form-check-label" for="exampleRadios1">

    Kepala Keluarga

  </label>

</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga" id="status_dlm_keluarga" value="Anggota Keluarga" required="" <?php echo($penduduk->status_dlm_keluarga=="Anggota Keluarga" ? 'checked' : '' ) ?>>


  <label class="form-check-label" for="exampleRadios2">

    Anggota Keluarga

  </label>

</div>

  </div>




    <input type="number" hidden class="form-control" id="NomorHP" placeholder="Masukkan nomor HP" required="" name="nomorhp" value="<?php echo $penduduk->link?>" disable>



  <div class="form-group">
      <label for="status">Jenis Kelamin</label><br>
          <select required id="jeniskelamin" class="form-control" name="jeniskelamin" class="select" onchange="return showHamil() ;">

            <!-- <option  value="">Pilih salah satu...</option> -->
            <option name="jeniskelamin" value="Laki-laki" <?php echo($penduduk->jeniskelamin == "Laki-laki" ? 'selected' : '' ) ?>>Laki-laki</option>
            <option name="jeniskelamin" value="Perempuan"  <?php echo($penduduk->jeniskelamin == "Perempuan" ? 'selected' : '' ) ?>>Perempuan</option>

<!--             <option selected value="">Pilih salah satu...</option>
            <option name="jeniskelamin" value="Laki-laki">Laki-laki</option>
            <option name="jeniskelamin" value="Perempuan">Perempuan</option>
 -->
          </select>
  </div>

  <div id="nlHamil" style="visibility: hidden;" class="form-group">
      <label for="status">Apakah Hamil?</label><br>
          <select  id="hamil" class="form-control" name="hamil" class="select" >
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
          <?php for ($x=0; $x<=12; $x++) {?>
          <option name="alamat" value="RT <?php echo $x; ?>" <?php if ($penduduk->alamat==$x){ echo "selected";}?>>RT <?php echo $x; ?></option>
        <?php } ?>
        </select>
  </div>
  
  <div class="form-group">
    <label for="status">Status</label><br>
        <select required id="status" class="form-control" name="status" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="status" value="KE" <?php if ($penduduk->status=='KE'){ echo "selected"; }?>>Kontak Erat</option>
          <option name="status" value="positif" <?php if ($penduduk->status=='positif'){ echo "selected";} ?>>Positif</option>
          <option name="status" value="Suspect" <?php if ($penduduk->status=='Suspect'){ echo "selected";} ?>>Suspect</option>
        </select>
  </div>
  <div class="form-group">
    <label for="status">Tempat Isolasi</label><br>
        <select required id="status" class="form-control" name="tempat_isolasi" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="tempat_isolasi" value="Rumah" <?php if ($penduduk->tempat_isolasi=='Rumah'){ echo "selected"; }?>>Rumah</option>
          <option name="tempat_isolasi" value="Shelter" <?php if ($penduduk->tempat_isolasi=='Shelter'){ echo "selected"; }?>>Shelter</option>
        </select>
  </div>
</div>
    <div class="form-group">

      <label for="Nama">Upload KTP</label>
      <?php if($penduduk->gambar_ktp != null) { ?>
        <img src="<?php echo base_url('assets/upload/image/'.$penduduk->gambar_ktp) ?>" width="100" alt="" name="gambar">
      <?php } ?>
      <input type="file" class="form-control" name="gambar[]" value="<?php echo $penduduk->gambar_ktp?>">

    </div>

    <div class="form-group">

      <label for="Nama">Upload Surat Test Swab</label>
      <?php if($penduduk->gambar_surat != null) { ?>
        <img src="<?php echo base_url('assets/upload/image/'.$penduduk->gambar_surat) ?>" width="100" alt="" name="gambar">
      <?php } ?> 

      <input type="file" class="form-control" name="gambar[]" value="<?php echo $penduduk->gambar_surat?>">

    </div>



  <button type="submit" class="btn btn-primary">Kirim</button>

</div>


</div>





</form>





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


