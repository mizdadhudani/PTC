<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 
<form action="<?php echo base_url('kesehatan')?>"  method="post" enctype="multipart/form-data">
<!-- <?php var_dump($cek) ?> -->
    <div class="container">

        <div class="container">
  </div>

    <div class="form-group">
      <label for="Nama">Tanggal Pertama Kali Gejala</label>
      <input type="date" class="form-control"  required="" name="tgl_gejala">
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Apakah Anda memiliki Riwayat Penyakit/kondisi sebagai berikut?</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="hamil" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Hamil
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="diabetes" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Diabetes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="jantung" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Penyakit Jantung
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="hipertensi" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Hipertensi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="kanker" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Keganasan/ Kanker
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="imunologi" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Gangguan Imunologi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="ginjal" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Gagal Ginjal Kronis
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="hati" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Gagal Hati Kronis
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="paru" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Penyakit Paru Obstruksi Kronis (PPOK)
          </label>     
          <label for="Nama">Lainnya, jika ada, tuliskan dibawah ini</label>
          <input type="text" class="form-control"  placeholder="Penyakit lain" name="sakit_lain">
        </div>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Apakah Anda memiliki Riwayat alergi obat?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="alergi_obat" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="alergi_obat" value="1">
          <label class="form-check-label" for="exampleRadios1"></label>
          <label for="Nama">Jika "YA", Tuliskan Jenis Obatnya dibawah ini :</label>
          <input type="text" class="form-control"  placeholder="Jenis Obat" name="nama_obat">
        </div>
    </div>

     <div class="form-group">
      <label for="JenisKelamin">Apakah pernah berkunjung ke fasilitas pelayanan?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kondisi" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kondisi" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>
    <input type="text" name="nik" hidden="" placeholder="nik" value="<?php echo $cek->nik?>">

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
      var selectBox =document.getElementById('status_dlm_keluarga');
      var userInput =selectBox.options[selectBox.selectedIndex].value;
      if (userInput == 'Anggota Keluarga') {
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