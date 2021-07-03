<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="favicon.ico">

    <title>Form Kesehatan - Bantul Tangguh</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- CSS Files -->

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css" rel="stylesheet')?>">





</head>

<form action="<?php echo base_url('page/submitlaporanlanjutan')?>"  method="post" enctype="multipart/form-data">

<body>

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="100%" class="img-fluid" class="center">

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

  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">Pertanyaan</th>

      <th scope="col">Ya</th>

      <th scope="col">Tidak</th>

    </tr>

  </thead>

  <tbody>

<tr>

    <td>1</td>

    <td>Apakah terdapat anggota keluarga lain yang mengalami gejala demam dan/atau sesak nafas?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktigabelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktigabelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>2</td>

    <td>Apakah ada orang yang mempunyai riwayat kontak dengan anda dalam 14 hari terakhir?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempatbelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempatbelas" value="0" checked=""></td>

  </tr>

  </tbody>

</table>



</div>

</div>

</div>

</div>

</div>

<div id="submit1">

  <input type="text" name="nik" placeholder="nik" hidden="" value="<?php echo $dataku->nik?>">

  <input type="number" name="id" placeholder="id"  hidden="" value="<?php echo $dataku->id?>">

  <input type="number" name="link" placeholder="id"  hidden="" value="<?php echo $dataku->link?>">
  <input type="number" name="score" placeholder="id"  hidden="" value="<?php echo $dataku->score?>">
  <input type="text" name="tanggal"  hidden="" value="<?php echo date("Y-m-d") ?>">

  <input type="text" name="time"  hidden="" value="<?php echo date("h:i");?>">

  <input class="form-check-input" hidden type="text" id="oke" name="ksatu" value="<?php echo $dataku->ksatu?>">

<input class="form-check-input" hidden type="text" id="oke" name="kdua" value="<?php echo $dataku->kdua?>">

<input class="form-check-input" hidden type="text" id="oke" name="ktiga" value="<?php echo $dataku->ktiga?>">

<input class="form-check-input" hidden type="text" id="oke" name="kempat" value="<?php echo $dataku->kempat?>">

<input class="form-check-input" hidden type="text" id="oke" name="klima" value="<?php echo $dataku->klima?>">

<input class="form-check-input" hidden type="text" id="oke" name="kenam" value="<?php echo $dataku->kenam?>">

<input class="form-check-input" hidden type="text" id="oke" name="ktujuh" value="<?php echo $dataku->ktujuh?>">

<input class="form-check-input" hidden type="text" id="oke" name="kdelapan" value="<?php echo $dataku->kdelapan?>">

<input class="form-check-input" hidden type="text" id="oke" name="ksembilan" value="<?php echo  $dataku->ksembilan?>">

<input class="form-check-input" hidden type="text" id="oke" name="ksepuluh" value="<?php echo $dataku->ksepuluh?>">

<input class="form-check-input" hidden type="text" id="oke" name="ksebelas" value="<?php echo $dataku->ksebelas?>">

<input class="form-check-input" hidden type="" id="oke" name="kduabelas" value="<?php echo $dataku->kduabelas?>">



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