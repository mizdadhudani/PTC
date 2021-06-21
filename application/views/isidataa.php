<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="favicon.ico">

    <title>Form Kesehatan-Panggung Tanggap Covid-19</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- CSS Files -->

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css" rel="stylesheet')?>">





</head>

<form action="<?php echo base_url('lapor/laporanhariann')?>"  method="post" enctype="multipart/form-data">

<body>

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="575" height="100" class="img-fluid"" class="center">

                </a>

            </nav>



        <div class="wrapper fadeInDown">

        <div id="formContent3">

          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFFAFA">

                <a class="navbar-brand mx-auto" href="#">

       <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="250" height="100" class="img-fluid">

      </a>

   </nav>

       <!-- Login Form -->



       <div id="tabel">

<div class="table-responsive-sm">

<div class="container">

    <div class="container">

  <table class="table table-hover">

 

  <tbody>

<tr>

   <div class="form-group">

    <label for="keluhan">NIK</label>

    <input type="text" class="form-control" id="keluhan" placeholder="Masukkan keluhan" required="" name="keluhan" >

    </div>

    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="suhu" >

    </div>


    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="spo2" >

    </div>


    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="status_pasien" >

    </div>


    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="suhu" >

    </div>


    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="status_test" >

    </div>


    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="tgl_isolasi" >

    </div>


    <div class="form-group">

    <label for="Nama">NIK</label>

    <input type="number" minlength=16 class="form-control" id="Nama" placeholder="Masukkan NIK" required="" name="lokasi" >

    </div>


  </tr>
 
  </tbody>

</table>

</div>

</div>

</div>

</div>
 

<div id="submit1">

  <input type="text" name="nik" placeholder="nik" hidden="" value="<?php echo $datakuu->nik?>">

  <input type="number" name="id" placeholder="id"  hidden="" value="<?php echo $datakuu->id?>">

    <input type="number" name="link" placeholder="id"  hidden="" value="<?php echo $datakuu->link?>">

  <input type="text" name="tanggal"  hidden="" value="<?php echo date("Y-m-d") ?>">

  <input type="text" name="time"  hidden="" value="<?php echo date("h:i");?>">
       <input type="text" hidden name="idpenduduk" value="<?php echo $datapp->id?>">
      <input type="text" hidden name="linkpenduduk" value="<?php echo $datapp->link?>">
      <input type="text" hidden name="namapenduduk" value="<?php echo $datapp->nama?>">
      <input type="text" hidden name="nikpenduduk" value="<?php echo $datapp->nik?>">
      <input type="text" hidden name="jeniskelaminpenduduk" value="<?php echo $datapp->jeniskelamin?>">
      <input type="text" hidden name="nomorhppenduduk" value="<?php echo $datapp->nomorhp?>">
      <input type="text" hidden name="alamatpenduduk" value="<?php echo $datapp->alamat?>">
      <input type="text" hidden name="pendudukpenduduk" value="<?php echo $datapp->penduduk?>">
 <button type="submit" class="btn btn-primary" style="margin-right: 5%">Kirim</button>


</div>

         <!-- Remind Passowrd -->

        </div>

      </div>








    </form>

    </header>






    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>