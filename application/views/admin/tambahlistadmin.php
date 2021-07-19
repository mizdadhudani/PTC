<form style="margin: 10px 10%;">

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="id" value="<?php echo $data->id?>">

 



           <h5 class="card-title">Data Pelapor</h5>

             <div class="form-group">

              <label for="Nama">Nama Pelapor</label>

                 <input type="text" readonly class="form-control" id="Nama" value="<?php echo $data->nama?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">NIK</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->nik?>">


              </div>

              <div class="form-group">

              <label for="staticEmail">Nomor HP</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->nomorhp?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Usia</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->usia?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Mulai Isolasi</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->mulai_isolasi?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Status dalam Keluarga</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->status_dlm_keluarga?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Jenis Kelamin</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->jeniskelamin?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">RT</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->alamat?>">

              </div>
                <div class="form-group">
                  <label for="staticEmail">Domisili</label>
                  <input type="text" readonly class="form-control" id="staticEmail" value="Dukuh Krapyak Wetan <?php echo $data->alamat ?>, Panggungharjo, Sewon.">
                </div>
                

      </form>

      </div>


<form action="<?php echo base_url('admin/submitlistbaru')?>"  method="post" enctype="multipart/form-data" style="margin: 10px 10%;">

     <h5 class="card-title">Data yang dilaporkan</h5>

  <input type="number"  hidden class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="link" value="<?php echo $data->link?>">

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="Nama" class="form-control" id="Nama" name="nama" placeholder="Masukkan Nama" required="">

  </div>

  <div class="form-group">

    <label for="NomorHP">NIK</label>

    <input type="NomorHP" minlength="16" name="nik" class="form-control" id="NomorHP" placeholder="Masukkan NIK" required=""onkeypress="return isNumber(event)">

         <script type="text/javascript">     

           function isNumber(evt) {

             evt = (evt) ? evt : window.event;

             var charCode = (evt.which) ? evt.which : evt.keyCode;

             if ( (charCode > 31 && charCode < 48) || charCode > 57) {

                   return false;

                   }

             return true;

          }

         </script>

  </div>

  <div class="form-group">

    <label for="NomorHP">Nomor HP</label>

    <input type="NomorHP" class="form-control" id="NomorHP" name="nomorhp" minlength="11" placeholder="Masukkan nomor HP" required=""onkeypress="return isNumber(event)">

         <script type="text/javascript">     

           function isNumber(evt) {

             evt = (evt) ? evt : window.event;

             var charCode = (evt.which) ? evt.which : evt.keyCode;

             if ( (charCode > 31 && charCode < 48) || charCode > 57) {

                   return false;

                   }

             return true;

          }

         </script>

  </div>

  <div class="form-group">

     <label for="Nama">Usia</label>

    <input type="number" class="form-control" id="Nama" placeholder="Masukkan Usia" required="" name="usia" >

  </div>

  <div class="form-group">

    <label for="Nama">Tanggal Swab</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi">
  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi di Shelter</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_dishelter">
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



   <div class="form-group">
      <label for="status">Jenis Kelamin</label><br>
          <select required id="jeniskelamin" class="form-control" name="jeniskelamin" class="select" onchange="return showHamil() ;">
            <option selected value="">Pilih salah satu...</option>
            <option name="tempat_isolasi" value="Laki-laki">Laki-laki</option>
            <option name="tempat_isolasi" value="Perempuan">Perempuan</option>
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
   <select name="kecamatan" id="kecamatan" class="form-control input-lg">
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
   <select name="desa" id="desa" class="form-control input-lg">
    <option value="">Pilih Desa</option>
   </select>
  </div>


  <div class="form-group">
    <label for="dukuh">Dukuh</label><br>
   <select name="penduduk" id="dukuh" class="form-control input-lg">
    <option value="">Pilih Padukuhan</option>
   </select>
  </div>

<!--   <div class="form-group">
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
  </div>
 -->
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
          <option name="status" value="Suspect">Suspect</option>
        </select>
  </div>
  <div class="form-group">
    <label for="status">Tempat Isolasi</label><br>
        <select required id="status" class="form-control" name="tempat_isolasi" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="tempat_isolasi" value="Rumah">Rumah</option>
          <option name="tempat_isolasi" value="Shelter SMKN 2 Sewon">Shelter SMKN 2 Sewon</option>
          <option name="tempat_isolasi" value="Lainnya">Lainnya</option>
        </select>
  </div>
<div class="form-group">

    <label for="Nama">Upload KTP</label>

    <input type="file" class="form-control" name="gambar_ktp" value="<?php echo $data->gambar_ktp?>" >

  </div>

  <div class="form-group">

    <label for="Nama">Upload Surat Test Swab</label>

    <input type="file" class="form-control" name="gambar_surat" value="<?php echo $data->gambar_surat?>" >

  </div>


  <button type="submit" class="btn btn-primary" style="margin-bottom: 5%;">Kirim</button>







</form>

</div>





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

