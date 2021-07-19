</head>

      <div class="content">

        <div class="container-fluid">

             <div class="card-body">
               
                <br>
                <a class="btn btn-danger" href="<?php echo base_url("admin/detailpenduduk"),'/',$datap->nik ?>"><i class="fas fa-arrow-left"></i> Kembali</a>

             <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="datapTable" width="100%" cellspacing="0">                  
                     <form action="<?php echo base_url('admin/editdatabaru')?>"  method="post" enctype="multipart/form-datap">

    <div class="container">

        <div class="container">

  <input type="number" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="link" value="<?php echo $datap->link?>">

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="id" value="<?php echo $datap->id?>">

        <!--<input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="idk" value="<?php echo $datapk->id?>">-->
<!--         <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="harisatu" value="<?php echo $datap->harisatu?>">
        <input type="text"  hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="haridua" value="<?php echo $datap->haridua?>"> -->
  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="nik" value="<?php echo $datap->nik?>">

  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="nama" value="<?php echo $datap->nama?>">

  </div>

  <div class="form-group">

    <label for="Nama">Tanggal Lahir</label>

    <input type="date" class="form-control"  required="" name="tgl_lahir" value="<?php echo $datap->tgl_lahir?>">
  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" class="form-control" id="Nama" placeholder="Masukkan Usia" required="" name="usia" value="<?php echo $datap->usia?>">

  </div>

  <div class="form-group">
      <label for="status">Jenis Kelamin</label><br>
          <select required id="jeniskelamin" class="form-control" name="jeniskelamin" class="select" onchange="return showHamil() ;">

            <!-- <option  value="">Pilih salah satu...</option> -->
            <option name="jeniskelamin" value="Laki-laki" <?php echo($datap->jeniskelamin == "Laki-laki" ? 'selected' : '' ) ?>>Laki-laki</option>
            <option name="jeniskelamin" value="Perempuan"  <?php echo($datap->jeniskelamin == "Perempuan" ? 'selected' : '' ) ?>>Perempuan</option>

<!--             <option selected value="">Pilih salah satu...</option>
            <option name="jeniskelamin" value="Laki-laki">Laki-laki</option>
            <option name="jeniskelamin" value="Perempuan">Perempuan</option>
 -->
          </select>
  </div>

  <div class="form-group">
    <label for="pekerjaan">Pekerjaan</label><br>
        <select required id="pekerjaan" class="form-control" name="pekerjaan" class="select" >
          <option selected value="">Pilih salah satu...</option>
          <option name="pekerjaan" value="Dirumah" <?php echo($datap->pekerjaan == "Dirumah" ? 'selected' : '' ) ?>>Dirumah (ibu/bpk rumah tangga, orang yg tidak bekerja, pensiunan)
          </option>
          <option name="pekerjaan" value="PNS/ASN" <?php echo($datap->pekerjaan == "PNS/ASN" ? 'selected' : '' ) ?>>PNS/ASN (pegawai negeri, bekerja di instansi pemerintahan)
          </option>
          <option name="pekerjaan" value="Karyawan" <?php echo($datap->pekerjaan == "Karyawan" ? 'selected' : '' ) ?>>KARYAWAN (swasta, karyawan swasta, karyawan pabrik, buruh pabrik, ART)
          </option>
          <option name="pekerjaan" value="Wiraswasta" <?php echo($datap->pekerjaan == "Wiraswasta" ? 'selected' : '' ) ?>>WIRASWASTA (penjual pasar, membantu jualan di pasar, pedagang, penjual jasa)
          </option>
          <option name="pekerjaan" value="Pelajar" <?php echo($datap->pekerjaan == "Pelajar" ? 'selected' : '' ) ?>>PELAJAR (pelajar TK, SD, SMP, SMA, mahasiswa)
          </option>
          <option name="pekerjaan" value="Nakes" <?php echo($datap->pekerjaan == "Nakes" ? 'selected' : '' ) ?>>NAKES (perawat, dokter, apoteker, cleaning servis, RM, bekerja di instansi kesehatan)
          </option>
          <option name="pekerjaan" value="Polisi/TNI" <?php echo($datap->pekerjaan == "Polisi/TNI" ? 'selected' : '' ) ?>>POLISI/ TNI (polisi, brimob, pendidikan kepolisian, TNI)
          </option>
        </select>
  </div>

  <div class="form-group">
      <label for="status">Status dalam Keluarga</label><br>
          <select required id="status_dlm_keluarga" class="form-control" name="status_dlm_keluarga" class="select" onchange="return showHamil() ;">
            <option name="status_dlm_keluarga" value="Kepala Keluarga" <?php echo($datap->status_dlm_keluarga =="Kepala Keluarga" ? 'selected' : '' ) ?>>Kepala Keluarga</option>
            <option name="status_dlm_keluarga" value="Anggota Keluarga"  <?php echo($datap->status_dlm_keluarga =="Anggota Keluarga" ? 'selected' : '' ) ?>>Anggota Keluarga</option>
          </select>
  </div>

  <!-- <div class="form-group" id="nlHamil" style="visibility: hidden;">

    <label for="Nama">Nama Kepala Keluarga</label>

    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Kepala Keluarga" name="nama_kepala_kk" value="<?php echo $datap->nama_kepala_kk?>">

  </div> -->


    <input type="number" hidden class="form-control" id="NomorHP" placeholder="Masukkan nomor HP" required="" name="nomorhp" value="<?php echo $datap->link?>" disable>

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

    <label for="Nama">RT</label>

    <input type="number" class="form-control"  placeholder="Masukkan RT" required="" name="RT" value="<?php echo $datap->RT?>">

  </div>

  <div class="form-group">

    <label for="Nama">Alamat berdasarkan KTP</label>

    <textarea type="text" class="form-control"  placeholder="Masukkan Alamat berdasarkan KTP" name="alamat_ktp" value="<?php echo $datap->alamat_ktp?>"></textarea>

  </div>

  <div class="form-group">
    <label for="status">Tempat Isolasi</label><br>
        <select required  class="form-control" name="tempat_isolasi" class="select" >
          <option name="tempat_isolasi" value="Rumah" <?php echo($datap->tempat_isolasi =="Rumah" ? 'selected' : '' ) ?>>Rumah</option>
          <option name="tempat_isolasi" value="Shelter" <?php echo($datap->tempat_isolasi =="Shelter" ? 'selected' : '' ) ?>>Shelter</option>
        </select>
  </div>
  
  <div class="form-group">

    <label for="Nama">Upload KTP</label>

    <input type="file" class="form-control" name="gambar[]" value="<?php echo $datap->gambar_ktp?>">

  </div>


</div>

  <button type="submit" class="btn btn-primary">Kirim</button>

</div>


</div>





</form>
              
                    </table>
                    <script src="<?php echo base_url('assets/js/wilayah.js')?>"></script>