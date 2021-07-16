<input type="text" hidden name="path" id="path" value="<?php echo base_url()?>">
<?php echo validation_errors('<div class="alert alert-danger">','</div>');   ?> 
<?php if($this->session->flashdata('input_member')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('input_member').'</div>'; }
if($this->session->flashdata('error')){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; }
?> 
<form action="<?php echo base_url('kontak')?>"  method="post" enctype="multipart/form-data">
<!-- <?php var_dump($cek) ?> -->
    <div class="container">

        <div class="container">
    </div>


    <div class="form-group">
      <label for="JenisKelamin">Dalam 1 bulan terakhir, apakah memiliki riwayat perjalanan?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="riwayat_perjalanan" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="riwayat_perjalanan" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Negara/kota</label>
      <input type="text" class="form-control"  name="tempat_rp">
    </div>

    <div class="form-group">
      <label for="Nama">Tanggal Perjalanan</label>
      <input type="date" class="form-control"  name="tgl_rp">
    </div>

    <div class="form-group">
      <label for="Nama">Tanggal Tiba</label>
      <input type="date" class="form-control"  name="tiba_rp">
    </div>

   <div class="form-group">
      <label for="JenisKelamin">Apakah Anda memiliki hewan peliharaan?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hewan" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
          <input type="text" class="form-control"  placeholder="Sebutkan" name="nama_hewan">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hewan" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="JenisKelamin">Dalam 1 bulan terakhir, apakah memiliki kontak erat dengan kasus suspect (terduga) Covid-19?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="ke_suspect" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="ke_suspect" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Tuliskan nama orang kasus konfirmasi Covid-19</label>
      <input type="text" class="form-control"  name="nama_ke">
    </div>

    <div class="form-group">
      <label for="Nama">Tuliskan tanggal terakhir kontak</label>
      <input type="date" class="form-control"  name="tgl_ke">
    </div>

    <div class="form-group">
      <label for="Nama">Bentuk kontak dengan terduga/positif Covid-19 (misal : pergi bersama, ngobrol, tinggal serumah, makan bersama dll) mohon dijelaskan secara rinci.</label>
      <textarea type="text" class="form-control"  name="bentuk_ke"></textarea>
    </div>

    <h2>Daftar Kontak Erat</h2>
    <p>Mohon Diisi sering kontak dengan siapa saja dengan Selengkap-lengkapnya demi terjaganya kesehatan anda dan orang di sekitar Anda. Keseharian tinggal serumah/ sering bertemu/bersalaman dengan siapa saja?</p>

    <div class="form-group">
      <label for="Nama">Orang 1</label>
      <textarea type="text" class="form-control"  placeholder="Nama, Tanggal lahir, Jenis kelamin, Hubungan dalam keluarga, Alamat, Nomor HP, Pekerjaan, Aktivitas yang dilakukan" name="ke1"></textarea>
    </div>

    <div class="form-group">
      <label for="Nama">Orang 2</label>
      <textarea type="text" class="form-control"  placeholder="Nama, Tanggal lahir, Jenis kelamin, Hubungan dalam keluarga, Alamat, Nomor HP, Pekerjaan, Aktivitas yang dilakukan" name="ke2"></textarea>
    </div>

    <div class="form-group">
      <label for="Nama">Orang 3</label>
      <textarea type="text" class="form-control"  placeholder="Nama, Tanggal lahir, Jenis kelamin, Hubungan dalam keluarga, Alamat, Nomor HP, Pekerjaan, Aktivitas yang dilakukan" name="ke3"></textarea>
    </div>

    <div class="form-group">
      <label for="Nama">Orang 4</label>
      <textarea type="text" class="form-control"  placeholder="Nama, Tanggal lahir, Jenis kelamin, Hubungan dalam keluarga, Alamat, Nomor HP, Pekerjaan, Aktivitas yang dilakukan" name="ke4"></textarea>
    </div>

    <div class="form-group">
      <label for="Nama">Orang 5</label>
      <textarea type="text" class="form-control"  placeholder="Nama, Tanggal lahir, Jenis kelamin, Hubungan dalam keluarga, Alamat, Nomor HP, Pekerjaan, Aktivitas yang dilakukan" name="ke5"></textarea>
    </div>

    <h2>Kegiatan melibatkan banyak orang</h2>
    <div class="form-group">
      <label for="JenisKelamin">Dalam 1 bulan terakhir, apakah mengunjungi tempat keramaian / pusat perbelanjaan/acara yang melibatkan banyak orang?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="keramaian" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="keramaian" value="0">
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
    </div>

    <div class="form-group">
      <label for="Nama">Nama daerah/tempat yang dikunjungi</label>
      <input type="text" class="form-control"  name="tempat_kunjungan">
    </div>

    <h3>Tanggal Kunjungan</h3>
     <div class="form-group">
      <label for="Nama">Mulai Kunjungan</label>
      <input type="date" class="form-control"  name="mulai_kunjungan">
    </div>

    <div class="form-group">
      <label for="Nama">Selesai Kunjungan</label>
      <input type="date" class="form-control"  name="selesai_kunjungan">
    </div>

    <div class="form-group">
      <label for="Nama">Kegiatan atau acara yang dihadiri</label>
      <input type="text" class="form-control"  name="kegiatan_dihadiri">
    </div>


    <h2>Aktivitas Selama 1 bulan terakhir</h2>
    <div class="form-group">
      <label for="Nama">Mohon ceritakan aktivitas sehari-hari Anda sebelum sakit (tanggal, tempat, info) *</label>
      <textarea type="text" class="form-control"  name="aktivitas"></textarea>
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