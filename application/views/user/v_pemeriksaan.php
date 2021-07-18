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

<h2 style="margin-left: 0px;">Informasi Test Swab Antigen</h2>
     <div class="form-group">
      <label for="JenisKelamin">Apakah Anda melakukan pemeriksaan Rapid Test Swab Antigen?</label>
        <div class="form-check">
          <input required class="form-check-input" type="radio" name="tes_ag" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input required  class="form-check-input" type="radio" name="tes_ag" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div id="tes_ag">
    <div class="form-group">
      <label for="Nama">Tanggal Pemeriksaan Rapid Test Swab Antigen</label>
      <input  type="date" class="form-control"  name="tgl_ag">
    </div>

    <div class="form-group">
      <label for="Nama">Tempat Pemeriksaan Rapid Test Swab Antigen</label>
      <textarea   type="text" class="form-control" name="tmpt_ag"></textarea>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Pemeriksaan Rapid Test Swab Antigen?</label>
        <div class="form-check">
          <input   class="form-check-input" type="radio" name="hasil_ag" value="Positif">
          <label class="form-check-label" for="exampleRadios1">
            Positif
          </label>
        </div>
        <div class="form-check">
          <input  class="form-check-input" type="radio" name="hasil_ag" value="Negatif">
          <label class="form-check-label" for="exampleRadios1">
            Negatif
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="exampleRadios1">
            Lainnya
          </label>       
          <input  type="text" class="form-control"  placeholder="Lainnya" name="hasil_ag">
        </div>
    </div>

    <div class="form-group">
      <label  for="Nama">Upload Surat Rapid Test Swab Antigen</label>
      <input type="file" class="form-control" name="gambar[]" value="">
    </div>
    </div>

<h2 style="margin-left: 0px;">Informasi Test Swab PCR</h2>
    <div class="form-group">
      <label for="JenisKelamin">Apakah Anda melakukan pemeriksaan Swab PCR?</label>
        <div class="form-check">
          <input required class="form-check-input" type="radio" name="tes_pcr" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input required class="form-check-input" type="radio" name="tes_pcr" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div id="tes_pcr">
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
      <input type="file" class="form-control" name="gambar[]" value="">
    </div>
   </div>

<h2 style="margin-left: 0px;">Informasi Test Lainnya</h2>
    <div class="form-group">
      <label for="JenisKelamin">Apakah Anda melkukan pemeriksaan Penunjang lainnya?</label>
        <div class="form-check">
          <input required  class="form-check-input" type="radio" name="tes_lain">
          <label class="form-check-label" for="exampleRadios1">
            Ada
          </label>
          <input type="text" class="form-control"  placeholder="Sebutkan" name="tes_lain">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tes_lain" value="0">
          <label required  class="form-check-label" for="exampleRadios1">
            Tidak Ada
          </label>
        </div>
    </div>

    <div id="tes_lain">
    <div class="form-group">
      <label for="Nama">Tanggal Pemeriksaan Test</label>
      <input type="date" class="form-control"  name="tgl_lain">
    </div>

    <div class="form-group">
      <label for="Nama">Tempat Pemeriksaan Test</label>
      <textarea type="text" class="form-control" name="tmpt_lain"></textarea>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Hasil Pemeriksaan Test</label>
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
      <label for="Nama">Upload Surat Test</label>
      <input type="file" class="form-control" name="gambar[]" value="">
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

  
<!-- JQuery Tes Antigen -->
   <script>
    $(document).ready(function() {
      $("#tes_ag").hide();
      $("#tes_pcr").hide();
      $("#tes_lain").hide();
      $("input[name='tes_ag']").click(function(){
        console.log($(this).val())
        if ($(this).val() == "1"){
          $("#tes_ag").show();
        }else{
          $("#tes_ag").hide();
        }
      });
      $("input[name='tes_pcr']").click(function(){
        console.log($(this).val())
        if ($(this).val() == "1"){
          $("#tes_pcr").show();
        }else{
          $("#tes_pcr").hide();
        }
      });
      $("input[name='tes_lain']").click(function(){
        console.log($(this).val())
        if ($(this).val() != "0"){
          $("#tes_lain").show();
        }else{
          $("#tes_lain").hide();
        }
      });
    });
   </script>


</body>



</html>