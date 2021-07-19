</head>

      <div class="content">

        <div class="container-fluid">

             <div class="card-body">
               
                <br>
                <a class="btn btn-danger" href="<?php echo base_url("admin/detailpenduduk"),'/',$data->nik ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                
              

             <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="datapTable" width="100%" cellspacing="0">                  
                     <form action="<?php echo base_url('admin/editdatabaru')?>"  method="post" enctype="multipart/form-datap">

    <div class="container">

        <div class="container">

  <input type="number" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="link" value="<?php echo $data->link?>">

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="id" value="<?php echo $data->id?>">

        <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="idk" value="<?php echo $datak->id?>">
        <input type="number" minlength=16 hidden class="form-control" id="Nama" placeholder="Masukkan NIK"  name="nik" value="<?php echo $data->nik?>">
         <input type="text" class="form-control" hidden id="Nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $data->nama?>">
         <input type="number" class="form-control" hidden id="usia" placeholder="Masukkan Usia" name="usia" value="<?php echo $data->usia?>">
         <input class="form-check-input" type="text" hidden name="status_dlm_keluarga" id="status_dlm_keluarga" value="<?php echo $data->status_dlm_keluarga?>">
         <input class="form-check-input" type="text" hidden name="status" id="status" value="<?php echo $data->status?>">
         <input class="form-check-input" type="text" hidden name="jeniskelamin" id="jenisKelamin" value="<?php echo $data->jeniskelamin?>">
        <input type="text" class="form-control" hidden id="alamat" placeholder="Masukkan Usia" name="alamat_ktp" value="<?php echo $data->alamat_ktp?>">
        <input type="number" class="form-control" hidden id="nomorhp" placeholder="Masukkan Usia" name="nomorhp" value="<?php echo $data->nomorhp?>">
        <input type="number" class="form-control" hidden id="kecamatan" placeholder="Masukkan Usia" name="kecamatan" value="<?php echo $data->kecamatan?>">
        <input class="form-check-input" type="text" hidden name="kelurahan" id="kelurahan" value="<?php echo $data->kelurahan?>">
        <input class="form-check-input" type="text" hidden name="pedukuhan" id="pedukuhan" value="<?php echo $data->pedukuhan?>">
        <input class="form-check-input" type="text" hidden name="pekerjaan" id="pekerjaan" value="<?php echo $data->pekerjaan?>">
        <input class="form-check-input" type="text" hidden name="nama_kepala_kk" id="nama_kepala_kk" value="<?php echo $data->nama_kepala_kk?>">
        <input class="form-check-input" type="text" hidden name="provinsi" id="provinsi" value="<?php echo $data->provinsi?>">
        <input class="form-check-input" type="text" hidden name="kota" id="kota" value="<?php echo $data->kota?>">
        <input class="form-check-input" type="text" hidden name="RT" id="RT" value="<?php echo $data->RT?>">
        <input class="form-check-input" type="text" hidden name="tgl_lahir" id="tgl_lahir" value="<?php echo $data->tgl_lahir?>">
        <input class="form-check-input" type="text" hidden name="gambar_ktp" id="gambar_ktp" value="<?php echo $data->gambar_ktp?>">
        <input class="form-check-input" type="text" hidden name="tempat_isolasi" id="tempat_isolasi" value="<?php echo $data->tempat_isolasi?>">

  </div><br>
  <h3>Data diri</h3>

  <dl class="row">
    <dt class="col-sm-5">Nama</dt>
    <dd class="col-sm-5">: <?php echo $data->nama?></dd>

    <dt class="col-sm-5">Usia</dt>
    <dd class="col-sm-5">: <?php echo $data->usia?> Tahun</dd>

    <dt class="col-sm-5">Status dalam Keluarga</dt>
    <dd class="col-sm-5">: <?php echo $data->status_dlm_keluarga?></dd>

    <dt class="col-sm-5">Jenis Kelamin</dt>
    <dd class="col-sm-5">: <?php echo $data->jeniskelamin?></dd>

    <dt class="col-sm-5">Alamat</dt>
    <dd class="col-sm-5">: <?php echo $data->pedukuhan ?>, RT <?php echo $data->RT ?>, <?php echo $data->kelurahan ?>, <?php echo $data->kecamatan ?>.</dd>

  </dl>

  <!-- <div class="form-group">

    <label for="Nama">Tanggal Swab</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $data->mulai_isolasi?>">
  </div>
    <div class="form-group">

    <label for="Nama">Tanggal Masuk Shelter</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $data->mulai_dishelter?>">
  </div> -->
    <div class="form-group">
      <label for="status">Status</label><br>
          <select id="status" class="form-control" name="status" class="select" >
            <option name="status" value="KE" <?php if($data->status == 'KE') echo 'selected' ?>>Kontak Erat</option>
            <option name="status" value="positif" <?php if($data->status =='posotif') echo 'selected' ?>>Positif</option>
            <option name="status" value="Suspect" <?php if($data->status =='Suspect') echo 'selected' ?>>Suspect</option>
            <option name="status" value="Suspect" <?php if($data->status =='Sehat') echo 'selected' ?>>Sehat</option>
            <option name="status" value="Meninggal Dunia" <?php if($data->status =='Meninggal Dunia') echo 'selected' ?>>Meninggal Dunia</option>
          </select>
    </div>
    <div class="form-group">
      <label for="status">Tempat Isolasi</label><br>
          <select id="status" class="form-control" name="tempat_isolasi" class="select" >
            <option name="tempat_isolasi" value="Rumah" <?php if($data->tempat_isolasi == 'Rumah') echo 'selected' ?>>Rumah</option>
            <option name="tempat_isolasi" value="Shelter SMKN 2 Sewon" <?php if($data->tempat_isolasi == 'Shelter SMKN 2 Sewon') echo 'selected' ?>>Shelter SMKN 2 Sewon</option>
            <option name="tempat_isolasi" value="Lainnya" <?php if($data->tempat_isolasi == 'Lainnya') echo 'selected' ?>>Lainnya</option>
          </select>
    </div>



  <button type="submit" class="btn btn-primary">Kirim</button>

</div>

</div>





</form>
              
                    </table>
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