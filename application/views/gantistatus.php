<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Data Diri-Panggung Tanggap Covid-19</title>

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

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="575" height="100" class="img-fluid" class="center">

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
        <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="harisatu" value="<?php echo $data->harisatu?>">
        <input type="text"  hidden class="form-control" id="Nama" placeholder="Masukkan Nama"  name="haridua" value="<?php echo $data->haridua?>">
        <input type="number" minlength=16 hidden class="form-control" id="Nama" placeholder="Masukkan NIK"  name="nik" value="<?php echo $data->nik?>">
         <input type="text" class="form-control" hidden id="Nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $data->nama?>">
         <input type="number" class="form-control" hidden id="Nama" placeholder="Masukkan Usia" name="usia" value="<?php echo $data->usia?>">
         <input class="form-check-input" type="text" hidden name="status_dlm_keluarga" id="status_dlm_keluarga" value="<?php echo $data->status_dlm_keluarga?>">
         <input class="form-check-input" type="text" hidden name="jeniskelamin" id="JenisKelamin" value="<?php echo $data->jeniskelamin?>">
        <input type="text" class="form-control" hidden id="alamat" placeholder="Masukkan Usia" name="alamat" value="<?php echo $data->alamat?>">
        <input type="text" class="form-control" hidden id="penduduk" placeholder="Masukkan Usia" name="penduduk" value="<?php echo $data->penduduk?>">
        <input type="number" class="form-control" hidden id="nomorhp" placeholder="Masukkan Usia" name="nomorhp" value="<?php echo $data->nomorhp?>">
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

    <dt class="col-sm-5">RT</dt>
    <dd class="col-sm-5">: <?php echo $data->alamat?></dd>

    <dt class="col-sm-5">Alamat</dt>
    <dd class="col-sm-5">: <?php echo $data->penduduk?></dd>

  </dl>

  <div class="form-group">

    <label for="Nama">Mulai Isolasi</label>

    <input type="date" class="form-control" id="Nama" required="" name="mulai_isolasi" value="<?php echo $data->mulai_isolasi?>">
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