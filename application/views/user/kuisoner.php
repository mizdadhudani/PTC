<!DOCTYPE html>

<html>

<!-- <?php var_dump($datas) ?> -->

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

<form action="<?php echo base_url('data/kuisoner/').$nik?>"  method="post" enctype="multipart/form-data">

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

<div class="table-responsive">

<div class="container">

    <div class="container" style="overflow-x: auto;">

  <table class="table table-hover">

  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">Pertanyaan</th>

      <th scope="col-4" style="text-align-last: right;">Ya</th>

      <th scope="col">Tidak</th>

    </tr>

  </thead>

  <tbody>

  </tr>
  
    <tr>

    <td><b>A</b></td>

    <td><b>Gejala</b></td>

    <td></td>

    <td></td>

  </tr>

<tr>

    <td>1</td>

    <td>Apakah Anda merasa demam?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksatu" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksatu" value="0" checked=""></td>

  </tr>

  <tr>

    <td>2</td>

    <td>Apakah Anda mengalami sakit kepala/pusing?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kdua" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kdua" value="0" checked=""></td>

  </tr>

  <tr>

    <td>3</td>

    <td>Apakah Anda batuk, pilek, dan nyeri tenggorokan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ktiga" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ktiga" value="0" checked=""></td>

  </tr>

  <tr>

    <td>4</td>

    <td>Apakah Anda tidak bisa mencium bau atau merasakan makanan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kempat" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kempat" value="0" checked=""></td>

  </tr>

  <tr>

    <td>5</td>

    <td>Apakah Anda merasa nyeri tulang atau kelelahan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="klima" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="klima" value="0" checked=""></td>

  </tr>

  <tr>

    <td>6</td>

    <td>Apakah nafsu makan Anda berkurang atau hilang?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kenam" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kenam" value="0" checked=""></td>

  </tr>

  <tr>

    <td>7</td>

    <td>Apakah Anda mual, muntah, dan nyeri perut?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ktujuh" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ktujuh" value="0" checked=""></td>

  </tr>

  <tr>

    <td>8</td>

    <td>Apakah Anda diare?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kdelapan" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kdelapan" value="0" checked=""></td>

  </tr>

  <tr>

    <td>9</td>

    <td>Apakah kulit dan mata Anda kemerahan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksembilan" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksembilan" value="0" checked=""></td>

  </tr>

  <tr>

    <td>10</td>

    <td>Apakah terdapat perubahan warna pada jari-jari kaki Anda?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksepuluh" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksepuluh" value="0" checked=""></td>

  </tr>

  <tr>

    <td>11</td>

    <td>Apakah Anda merasa sesak nafas dan nyeri dada?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksebelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="ksebelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>12</td>

    <td>Apakah Anda pernah kehilangan kesadaran (linglung) secara tiba-tiba?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kduabelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio"  name="kduabelas" value="0" checked=""></td>

  </tr>
  <tr>
    <td colspan="2">Kapan tanggal Pertama Kali Anda bergejala?<br>*abaikan jika sudah pernah mengisi</td>
    <td colspan="2">  <input type="date" class="form-control"  value="<?php echo $kesehatan->tgl_gejala?>" required="" name="tgl_gejala">
    </td> 


    <tr>

      <td><b>B</b></td>

      <td><b>Tekanan Darah</b></td>

      <td></td>

      <td></td>

    </tr>

      <tr>

        <td>13</td>

        <td>Berapakah Tekanan Darah Anda?<br> *jika tidak dilakukan pengukuran, isikan dengan 0</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="ktigabelas" name="ktigabelas" value="0">
             <!-- <input type="number" class="form-control" id="kedelapanbelas" required="" name="kedelapanbelas" value=""></div> -->


          <div class="form-check">

             <input type="number" class="form-control" id="kempatbelas"  name="kempatbelas" value="0"></div>

        </td>

      </tr>

    <tr>

      <td><b>C</b></td>

      <td><b>Nadi</b></td>

      <td></td>

      <td></td>

    </tr>

      <tr>

        <td>14</td>

        <td>Berapakah Denyut Nadi Anda?<br> *jika tidak dilakukan pengukuran, isikan dengan 0</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="klimabelas" name="klimabelas" value="0"max="200"></div>

        </td>

      </tr>

    <tr>

      <td><b>D</b></td>

      <td><b>Suhu</b></td>

      <td></td>

      <td></td>

    </tr>

      <tr>

        <td>15</td>

        <td>Berapakah Suhu Tubuh Anda?<br> *jika tidak dilakukan pengukuran, isikan dengan 0</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="kenambelas" name="kenambelas"  pattern="[0-9]+([\.,][0-9]+)?" step="0.1" value="00.0" max="100"></div>

        </td>

      </tr>



    <tr>

      <td><b>E</b></td>

      <td><b>Saturasi</b></td>

      <td></td>

      <td></td>

    </tr>

     <tr>

        <td>16</td>

        <td>Berapakah Saturasi Oksigen  Anda?<br> *jika tidak dilakukan pengukuran, isikan dengan 0</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="ktujuhbelas" name="ktujuhbelas" value="0" max="100"></div>

        </td>

      </tr>
    



  </tbody>

</table>

</div>

</div>

</div>

</div>

<button type="submit" class="btn btn-primary" style="margin-right: 5%">Kirim</button>
    </form>

    </header>





    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>