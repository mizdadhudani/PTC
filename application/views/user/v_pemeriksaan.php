<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 
<form action="<?php echo base_url('pemeriksaan')?>"  method="post" enctype="multipart/form-data">
<!-- <?php var_dump($cek) ?> -->
    <div class="container">

        <div class="container">
    </div>

<h2>Rapid Test Swab Antigen</h2>
     <div class="form-group">
      <label for="JenisKelamin">Pemeriksaan Rapid Test Swab Antigen?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_ag" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_ag" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Tanggal Pemeriksaan Rapid Test Swab Antigen</label>
      <input type="date" class="form-control"  name="tgl_ag">
    </div>

    <div class="form-group">
      <label for="Nama">Tempat Pemeriksaan Rapid Test Swab Antigen</label>
      <textarea type="text" class="form-control" name="tmpt_ag"></textarea>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Pemeriksaan Rapid Test Swab Antigen?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hasil_ag" value="Positif">
          <label class="form-check-label" for="exampleRadios1">
            Positif
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hasil_ag" value="Negatif">
          <label class="form-check-label" for="exampleRadios1">
            Negatif
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="exampleRadios1">
            Lainnya
          </label>       
          <input type="text" class="form-control"  placeholder="Lainnya" name="hasil_ag">
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Upload Surat Rapid Test Swab Antigen</label>
      <input type="file" class="form-control" name="surat_ag" value="">
    </div>

    <h2>Test Swab PCR</h2>
    <div class="form-group">
      <label for="JenisKelamin">Pemeriksaan Swab PCR</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_pcr" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_pcr" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Tanggal Pemeriksaan Swab PCR</label>
      <input type="date" class="form-control"  name="tgl_pcr">
    </div>

    <div class="form-group">
      <label for="Nama">Tempat Pemeriksaan Swab PCR</label>
      <textarea type="text" class="form-control" name="tmpt_pcr"></textarea>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Hasil Pemeriksaan Swab PCR</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hasil_pcr" value="Positif Covid-19">
          <label class="form-check-label" for="exampleRadios1">
            Positif Covid-19
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hasil_pcr" value="Negatif Covid-19">
          <label class="form-check-label" for="exampleRadios1">
            Negatif Covid-19
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Upload Surat Swab PCR</label>
      <input type="file" class="form-control" name="surat_pcr" value="">
    </div>

    <h2>Test Lainnya</h2>
    <div class="form-group">
      <label for="JenisKelamin">Pemeriksaan Penunjang lainnya yang dilakukan</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_lain">
          <label class="form-check-label" for="exampleRadios1">
            Ada
          </label>
          <input type="text" class="form-control"  placeholder="Sebutkan" name="tes_lain">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_lain" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak Ada
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Tanggal Pemeriksaan Test lain</label>
      <input type="date" class="form-control"  name="tgl_lain">
    </div>

    <div class="form-group">
      <label for="Nama">Tempat Pemeriksaan Test lain</label>
      <textarea type="text" class="form-control" name="tmpt_lain"></textarea>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Hasil Pemeriksaan Test lain</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hasil_lain" value="Positif Covid-19">
          <label class="form-check-label" for="exampleRadios1">
            Positif Covid-19
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hasil_lain" value="Negatif Covid-19">
          <label class="form-check-label" for="exampleRadios1">
            Negatif Covid-19
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Upload Surat Test lainnya</label>
      <input type="file" class="form-control" name="surat_lain" value="">
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