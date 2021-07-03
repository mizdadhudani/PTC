<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 

       <!-- Login Form -->

<form action="<?php echo base_url('ganti/status/').$penduduk->nik?>"  method="post" enctype="multipart/form-data">

    <div class="container">

        <div class="container">

  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="nik" value="<?php echo $penduduk->nik?>">

  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" readonly class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="nama" value="<?php echo $penduduk->nama?>">

  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" readonly class="form-control" id="Nama" placeholder="Masukkan Usia" required="" name="usia" value="<?php echo $penduduk->usia?>">

  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $penduduk->mulai_isolasi?>">
  </div>

 
  <input type="text" hidden class="form-control" name="status_dlm_keluarga" id="status_dlm_keluarga" value="<?php echo $penduduk->status_dlm_keluarga?>">


  <input type="number" hidden class="form-control" id="NomorHP" placeholder="Masukkan nomor HP" required="" name="nomorhp" value="<?php echo $penduduk->link?>" disable>

  <input type="text" hidden class="form-control" name="jeniskelamin" id="jeniskelamin" value="<?php echo $penduduk->jeniskelamin?>">

  <input type="text" hidden class="form-control" name="hamil" id="hamil" value="<?php echo $penduduk->hamil?>">

  <input type="text" hidden class="form-control" name="provinsi" id="provinsi" value="<?php echo $penduduk->provinsi?>">

  <input type="text" hidden class="form-control" name="kota" id="kota" value="<?php echo $penduduk->kota?>">

  <input type="text" hidden class="form-control" name="kota" id="kota" value="<?php echo $penduduk->kota?>">

  <input type="text" hidden class="form-control" name="kecamatan" id="kecamatan" value="<?php echo $penduduk->kecamatan?>">

  <input type="text" hidden class="form-control" name="kelurahan" id="kelurahan" value="<?php echo $penduduk->kelurahan?>">

  <input type="text" hidden class="form-control" name="pedukuhan" id="pedukuhan" value="<?php echo $penduduk->pedukuhan?>">

  <input type="text" hidden class="form-control" name="alamat" id="alamat" value="<?php echo $penduduk->alamat?>">

  
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


