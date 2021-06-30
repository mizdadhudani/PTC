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

<form action="<?php echo base_url('page/laporanharian')?>"  method="post" enctype="multipart/form-data">

<body>

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="575" height="100" class="img-fluid" class="center">

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

    <td>Apakah Anda sedang menderita batuk-batuk?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksatu" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksatu" value="0" checked=""></td>

  </tr>

  <tr>

    <td>2</td>

    <td>Apakah nafsu makan Anda berkurang?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdua" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdua" value="0" checked=""></td>

  </tr>

  <tr>

    <td>3</td>

    <td>Apakah Anda sedang menderita sakit atau nyeri kepala?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktiga" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktiga" value="0" checked=""></td>

  </tr>

  <tr>

    <td>4</td>

    <td>Apakah Anda sedang menderita sakit tenggorokan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempat" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempat" value="0" checked=""></td>

  </tr>

  <tr>

    <td>5</td>

    <td>Apakah badan Anda sekarang terasa lemas dan lesu?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="klima" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="klima" value="0" checked=""></td>

  </tr>

  <tr>

    <td>6</td>

    <td>Apakah mulut Anda terasa kering?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kenam" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kenam" value="0" checked=""></td>

  </tr>

  <tr>

    <td>7</td>

    <td>Apakah Anda sedang mengalami gejala seperti meriang?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktujuh" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktujuh" value="0" checked=""></td>

  </tr>

  <tr>

    <td>8</td>

    <td>Apakah Anda sedang menderita nyeri di seluruh bagian tubuh?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdelapan" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdelapan" value="0" checked=""></td>

  </tr>

  <tr>

    <td>9</td>

    <td>Apakah Anda sedang menderita diare?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksembilan" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksembilan" value="0" checked=""></td>

  </tr>

  <tr>

    <td>10</td>

    <td>Apakah Anda sedang mengalami kesulitan dalam bernafas atau sesak nafas?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="0" checked=""></td>

  </tr>

  <tr>

    <td>11</td>

    <td>Apakah Anda mengalami mual/muntah?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>12</td>

    <td>Apakah Anda tidak bisa mencium bau atau merasakan makanan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>13</td>

    <td>Apakah kulit Anda pucat dan berkeringat dingin?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktigabelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktigabelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>14</td>

    <td>Apakah bibir, kulit dan wajah Anda tampak kebiruan?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempatbelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempatbelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>15</td>

    <td>Apakah dada Anda terasa nyeri dan berdebar-debar?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kelimabelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kelimabelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>16</td>

    <td>Apakah pernah merasa linglung secara tiba-tiba?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="keenambelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="keenambelas" value="0" checked=""></td>

  </tr>

  <tr>

    <td>17</td>

    <td>Apakah mengalami demam tinggi selama lebih dari 7 hari?</td>

    <td style="text-align: right;">  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ketujuhbelas" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ketujuhbelas" value="0" checked=""></td>

  </tr>

  <tr>

        <td>18</td>

        <td>Gejala Lainnya?</td>

        <td colspan="2">  <div class="form-check">

             <textarea type="text" class="form-control" id="keduaempat" name="keduaempat" value=""></textarea> 

        </td>

      </tr>


    <tr>

      <td><b>B</b></td>

      <td><b>Tekanan Darah</b></td>

      <td></td>

      <td></td>

    </tr>

      <tr>

        <td>19</td>

        <td>Berapakah Tekanan Darah Anda?<br> *jika tidak menggunakan alat, maka diisi 0</td>
        <td >  <div class="form-check">

             <input type="number" class="form-control" id="kedelapanbelas" name="kedelapanbelas" value="">
             <!-- <input type="number" class="form-control" id="kedelapanbelas" required="" name="kedelapanbelas" value=""></div> -->


        </td>
        <td >  <div class="form-check">

             <input type="number" class="form-control" id="kedualima"  name="kedualima" value=""></div>

        </td>

      </tr>

    <tr>

      <td><b>C</b></td>

      <td><b>Nadi</b></td>

      <td></td>

      <td></td>

    </tr>

      <tr>

        <td>20</td>

        <td>Berapakah Denyut Nadi Anda?<br> *jika tidak menggunakan alat, maka diisi 0</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="kesembilanbelas" name="kesembilanbelas" value=""></div>

        </td>

      </tr>

    <tr>

      <td><b>D</b></td>

      <td><b>Suhu</b></td>

      <td></td>

      <td></td>

    </tr>

      <tr>

        <td>21</td>

        <td>Berapakah Suhu Tubuh Anda?<br> *jika tidak menggunakan alat, maka diisi 0</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="keduapuluh" name="keduapuluh" value="36"></div>

        </td>

      </tr>



    <tr>

      <td><b>E</b></td>

      <td><b>Saturasi</b></td>

      <td></td>

      <td></td>

    </tr>

     <tr>

        <td>22</td>

        <td>Berapakah Saturasi Oksigen  Anda?</td>
        <td colspan="2">  <div class="form-check">

             <input type="number" class="form-control" id="keduasatu" name="keduasatu" value="100"></div>

        </td>

      </tr>
    



  </tbody>

</table>

</div>

</div>

</div>

</div>

<?php if (!empty($datas)) {?>

<div id="submit1">

  <input type="text" name="nik" placeholder="nik" hidden="" value="<?php echo $datas->nik?>">
   <input type="text" name="score" placeholder="score" hidden="" value="<?php echo $datas->score?>">

  <input type="number" name="id" placeholder="id"  hidden="" value="<?php echo $datas->id?>">

    <input type="number" name="link" placeholder="id"  hidden="" value="<?php echo $datas->link?>">

  <input type="text" name="tanggal"  hidden="" value="<?php echo date("Y-m-d") ?>">

  <input type="text" name="time"  hidden="" value="<?php echo date("h:i");?>">
       <input type="text" hidden name="idpenduduk" value="<?php echo $datap->id?>">
      <input type="text" hidden name="linkpenduduk" value="<?php echo $datap->link?>">
      <input type="text" hidden name="namapenduduk" value="<?php echo $datap->nama?>">
      <input type="text" hidden name="mulai_isolasipenduduk" value="<?php echo $datap->mulai_isolasi?>">
      <input type="text" hidden name="statuspenduduk" value="<?php echo $datap->status?>">
      <input type="text" hidden name="nikpenduduk" value="<?php echo $datap->nik?>">
      <input type="text" hidden name="jeniskelaminpenduduk" value="<?php echo $datap->jeniskelamin?>">
      <input type="text" hidden name="nomorhppenduduk" value="<?php echo $datap->nomorhp?>">
      <input type="text" hidden name="alamatpenduduk" value="<?php echo $datap->alamat?>">
      <input type="text" hidden name="pendudukpenduduk" value="<?php echo $datap->penduduk?>">
      <input type="text" hidden name="desapenduduk" value="<?php echo $datap->desa?>">
      <input type="text" hidden name="kecamatanpenduduk" value="<?php echo $datap->kecamatan?>">
      <input type="text" hidden name="usiapenduduk" value="<?php echo $datap->usia?>">
      <input type="text" hidden name="hamilpenduduk" value="<?php echo $datap->hamil?>">
      <input type="text" hidden name="status_dlm_keluargapenduduk" value="<?php echo $datap->status_dlm_keluarga?>">
      <input type="text" hidden name="tempat_isolasipenduduk" value="<?php echo $datap->tempat_isolasi?>">
      
 <button type="submit" class="btn btn-primary" style="margin-right: 5%">Kirim</button>

</div>



         <!-- Remind Passowrd -->

        </div>

      </div>

<?php } else {?>

<div id="submit1">

  <input type="text" name="nik" placeholder="nik" hidden="" value="<?php echo $dataku->nik?>">
   <input type="text" name="score" placeholder="score" hidden="" value="<?php echo $dataku->score?>">

  <input type="number" name="id" placeholder="id"  hidden="" value="<?php echo $dataku->id?>">

    <input type="number" name="link" placeholder="id"  hidden="" value="<?php echo $dataku->link?>">

  <input type="text" name="tanggal"  hidden="" value="<?php echo date("Y-m-d") ?>">

  <input type="text" name="time"  hidden="" value="<?php echo date("h:i");?>">
       <input type="text" hidden name="idpenduduk" value="<?php echo $datap->id?>">
      <input type="text" hidden name="linkpenduduk" value="<?php echo $datap->link?>">
      <input type="text" hidden name="namapenduduk" value="<?php echo $datap->nama?>">
      <input type="text" hidden name="mulai_isolasipenduduk" value="<?php echo $datap->mulai_isolasi?>">
      <input type="text" hidden name="statuspenduduk" value="<?php echo $datap->status?>">
      <input type="text" hidden name="nikpenduduk" value="<?php echo $datap->nik?>">
      <input type="text" hidden name="jeniskelaminpenduduk" value="<?php echo $datap->jeniskelamin?>">
      <input type="text" hidden name="nomorhppenduduk" value="<?php echo $datap->nomorhp?>">
      <input type="text" hidden name="alamatpenduduk" value="<?php echo $datap->alamat?>">
      <input type="text" hidden name="pendudukpenduduk" value="<?php echo $datap->penduduk?>">
      <input type="text" hidden name="desapenduduk" value="<?php echo $datap->desa?>">
      <input type="text" hidden name="kecamatanpenduduk" value="<?php echo $datap->kecamatan?>">
      <input type="text" hidden name="usiapenduduk" value="<?php echo $datap->usia?>">
      <input type="text" hidden name="hamilpenduduk" value="<?php echo $datap->hamil?>">
      <input type="text" hidden name="status_dlm_keluargapenduduk" value="<?php echo $datap->status_dlm_keluarga?>">
      <input type="text" hidden name="tempat_isolasipenduduk" value="<?php echo $datap->tempat_isolasi?>">
      
 <button type="submit" class="btn btn-primary" style="margin-right: 5%">Kirim</button>

</div>



         <!-- Remind Passowrd -->

        </div>

      </div>

      <?php }?>

    </form>

    </header>





    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>