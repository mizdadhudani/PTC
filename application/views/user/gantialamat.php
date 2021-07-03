<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Data Diri - Bantul Tangguh</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

    <!-- Menyisipkan Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!-- CSS Files -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">



</head>



<body>

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="100%" class="img-fluid" class="center">

                </a>

            </nav>



        <div class="wrapper fadeInDown">

        <div id="formContent2">

          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFFAFA">

                <a class="navbar-brand mx-auto" href="#">

       <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="150" height="50" class="img-fluid">

      </a>

   </nav>

       <!-- Login Form -->

<form action="<?php echo base_url('page/submitalamatbaru')?>"  method="post" enctype="multipart/form-data">

    <div class="container">

        <div class="container">

  <input type="number" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="link" value="<?php echo $data->link?>">

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="id" value="<?php echo $data->id?>">

        <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="idk" value="<?php echo $datak->id?>">
<!--         <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="harisatu" value="<?php echo $data->harisatu?>">
        <input type="text"  hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="haridua" value="<?php echo $data->haridua?>"> -->
  </div>

  <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 readonly="" class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="nik" value="<?php echo $data->nik?>">

  </div>

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="nama" value="<?php echo $data->nama?>">

  </div>

  <div class="form-group">

    <label for="Nama">Usia</label>

    <input type="number" class="form-control" id="Nama" placeholder="Masukkan Usia" required="" name="usia" value="<?php echo $data->usia?>">

  </div>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $data->mulai_isolasi?>">
  </div>

  <div class="form-group">

    <label for="JenisKelamin">Status dalam Keluarga</label>

    <div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga" id="status_dlm_keluarga" value="Kepala Keluarga" required="" <?php if($data->status_dlm_keluarga == 'Kepala Keluarga') echo 'checked';?>>

  <label class="form-check-label" for="exampleRadios1">

    Kepala Keluarga

  </label>

</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="status_dlm_keluarga" id="status_dlm_keluarga" value="Anggota Keluarga" required="" <?php if($data->status_dlm_keluarga == 'Anggota Keluarga') echo 'checked';?>>

  <label class="form-check-label" for="exampleRadios2">

    Anggota Keluarga

  </label>

</div>

</div>

    <input type="number" hidden class="form-control" id="NomorHP" placeholder="Masukkan nomor HP" required="" name="nomorhp" value="<?php echo $data->nomorhp?>" disable>



  <div class="form-group">

    <label for="JenisKelamin">Jenis Kelamin</label>

    <div class="form-check">

  <input class="form-check-input" type="radio" name="jeniskelamin" id="JenisKelamin" value="Laki-Laki" required="" 
  <?php if($data->jeniskelamin == 'Laki-Laki') echo 'checked';?>>

  <label class="form-check-label" for="exampleRadios1" >

    Laki-laki

  </label>

</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="jeniskelamin" id="JenisKelamin" value="Perempuan"required="" 
  <?php if($data->jeniskelamin == 'Perempuan') echo 'checked';?> >

  <label class="form-check-label" for="exampleRadios2" >

    Perempuan

  </label>

</div>

  </div>

  <div class="form-group">
    <label for="Alamat">Pilih RT</label><br>
        <select id="Alamat" class="form-control" name="alamat" class="select" >
          <option name="alamat" value="RT 01" <?php if($data->alamat == 'RT 01') echo 'selected';?>>RT 01</option>
          <option name="alamat" value="RT 02" <?php if($data->alamat == 'RT 02') echo 'selected';?>>RT 02</option>
          <option name="alamat" value="RT 03" <?php if($data->alamat == 'RT 03') echo 'selected';?>>RT 03</option>
          <option name="alamat" value="RT 04" <?php if($data->alamat == 'RT 04') echo 'selected';?>>RT 04</option>
          <option name="alamat" value="RT 05" <?php if($data->alamat == 'RT 05') echo 'selected';?>>RT 05</option>
          <option name="alamat" value="RT 06" <?php if($data->alamat == 'RT 06') echo 'selected';?>>RT 06</option>
          <option name="alamat" value="RT 07" <?php if($data->alamat == 'RT 07') echo 'selected';?>>RT 07</option>
          <option name="alamat" value="RT 08" <?php if($data->alamat == 'RT 08') echo 'selected';?>>RT 08</option>
          <option name="alamat" value="RT 09" <?php if($data->alamat == 'RT 09') echo 'selected';?>>RT 09</option>
          <option name="alamat" value="RT 10" <?php if($data->alamat == 'RT 10') echo 'selected';?>>RT 10</option>
          <option name="alamat" value="RT 11" <?php if($data->alamat == 'RT 11') echo 'selected';?>>RT 11</option>
          <option name="alamat" value="RT 12" <?php if($data->alamat == 'RT 12') echo 'selected';?>>RT 12</option>
        </select>
  </div>

    <div class="form-group">
      <label for="Alamat">Alamat Domisili</label>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Krapyak Wetan" required="" <?php if($data->penduduk == 'Dukuh Krapyak Wetan') echo 'checked';?>>
              <label class="form-check-label">
                Dukuh Krapyak Wetan
              </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Krapyak Kulon" required="" <?php if($data->penduduk == 'Dukuh Krapyak Kulon') echo 'checked';?>>
            <label class="form-check-label">
             Dukuh Krapyak Kulon
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Dongkelan" required="" <?php if($data->penduduk == 'Dukuh Dongkelan') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Dongkelan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Glugo" required="" <?php if($data->penduduk == 'Dukuh Glugo') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Glugo
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Kweni" required="" <?php if($data->penduduk == 'Dukuh Kweni') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Kweni
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Pelemsewu" required="" <?php if($data->penduduk == 'Dukuh Pelemsewu') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Pelemsewu
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Sawit" required="" <?php if($data->penduduk == 'Dukuh Sawit') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Sawit
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Pandes" required="" <?php if($data->penduduk == 'Dukuh Pandes') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Pandes
            </label>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Glondong" required="" <?php if($data->penduduk == 'Dukuh Glondong') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Glondong
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Jaranan" required="" <?php if($data->penduduk == 'Dukuh Jaranan') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Jaranan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Geneng" required="" <?php if($data->penduduk == 'Dukuh Geneng') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Geneng
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Ngireng-ngireng" required="" <?php if($data->penduduk == 'Dukuh Ngireng-ngireng') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Ngireng-ngireng
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Cabeyan" required="" <?php if($data->penduduk == 'Dukuh Cabeyan') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Cabeyan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Garon" required="" <?php if($data->penduduk == 'Dukuh Garon') echo 'checked';?>>
            <label class="form-check-label">
              Dukuh Garon
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="status">Status</label><br>
          <select id="status" class="form-control" name="status" class="select" >
            <option name="status" value="KE" <?php if($data->status == 'KE') echo 'selected' ?>>Kontak Erat</option>
            <option name="status" value="positif" <?php if($data->status =='posotif') echo 'selected' ?>>Positif</option>
          </select>
    </div>
    <div class="form-group">
      <label for="status">Tempat Isolasi</label><br>
          <select id="status" class="form-control" name="tempat_isolasi" class="select" >
            <option name="tempat_isolasi" value="Rumah" <?php if($data->tempat_isolasi == 'Rumah') echo 'selected' ?>>Rumah</option>
            <option name="tempat_isolasi" value="Shelter" <?php if($data->tempat_isolasi == 'Shelter') echo 'selected' ?>>Shelter</option>
          </select>
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

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>