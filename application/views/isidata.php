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

<form action="<?php echo base_url('page/laporanharian')?>"  method="post" enctype="multipart/form-data">

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

    <td>Apakah anda sedang menderita batuk-batuk?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksatu" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksatu" value="0" checked=""></td>

  </tr>

  <tr>

    <td>2</td>

    <td>Apakah anda sedang mengalami gejala seperti meriang?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdua" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdua" value="0" checked=""></td>

  </tr>

  <tr>

    <td>3</td>

    <td>Apakah anda sedang menderita diare?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktiga" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktiga" value="0" checked=""></td>

  </tr>

  <tr>

    <td>4</td>

    <td>Apakah anda sedang menderita sakit tenggorokan?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempat" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kempat" value="0" checked=""></td>

  </tr>

  <tr>

    <td>5</td>

    <td>Apakah anda sedang menderita nyeri di seluruh bagian tubuh?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="klima" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="klima" value="0" checked=""></td>

  </tr>

  <tr>

    <td>6</td>

    <td>Apakah anda sedang menderita sakit atau nyeri kepala?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kenam" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kenam" value="0" checked=""></td>

  </tr>

  <tr>

    <td>7</td>

    <td>Apakah anda sedang mengalami demam atau suhu tubuh di atas 38 C?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktujuh" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ktujuh" value="0" checked=""></td>

  </tr>

  <tr>

    <td>8</td>

    <td>Apakah anda sedang mengalami kesulitan dalam bernafas atau sesak nafas?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdelapan" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kdelapan" value="0" checked=""></td>

  </tr>

  <tr>

    <td>9</td>

    <td>Apakah badan anda sekarang terasa lemas dan lesu?</td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksembilan" value="1"></div>

      </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksembilan" value="0" checked=""></td>

  </tr>

  

  </tr>

    <tr>

    <td>B</td>

    <td>Riwayat Perjalanan</td>

    <td></td>

    <td></td>

  </tr>

  <?php if (!empty($datas)) {?>

  <tr>

    <td>10</td>
    <?php if($datap->harisatu==0 || $datas->ksepuluh==0 || ($datap->harisatu>0 && $datas->ksepuluh==0)) { ?>

    <td>
    	Apakah dalam 14 hari terakhir anda pernah berkunjung ke daerah di mana Corona tersebar? (contoh: Jakarta)
	 	<select id="select" name="harisatu">
		    <option value="0">Pilih</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		    <option value="13">13</option>
		    <option value="14">14</option>
  		</select> Hari yang lalu.

    </td>
<?php } else {?>
	<td>
	Apakah dalam 14 hari terakhir anda pernah berkunjung ke daerah di mana Corona tersebar? (contoh: Jakarta)
	<input type="text" hidden name="harisatu" value="<?php echo $datap->harisatu ?>">
	</td>
<?php }?>






<?php if ($datas->ksepuluh==0 ) { ?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="1" ></div>

    </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="0" checked>

    </td>

  <?php } else {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="1" checked></div>

    </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="0" disabled="">

    </td>

  <?php } ?>

  </tr>

  <tr>



    <td>11</td>
    <?php if($datap->haridua==0 || $datas->ksebelas==0 || ($datap->haridua>0 && $datas->ksebelas==0)) { ?>
    <td>
    Apakah dalam 14 hari terakhir anda pernah melakukan kontak langsung dengan pasien positif Corona?
		<select id="select" name="haridua">
		    <option value="0">Pilih</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		    <option value="13">13</option>
		    <option value="14">14</option>
  		</select> Hari yang lalu.
	</td>
<?php } else {?>
	<td>
		Apakah dalam 14 hari terakhir anda pernah melakukan kontak langsung dengan pasien positif Corona?
	<input type="text" hidden name="haridua" value="<?php echo $datap->haridua ?>">
	</td>
<?php }?>


    <?php if ($datas->ksebelas==0 ) {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="1"></div>

    </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="0" checked="">

    </td>

  <?php } else {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="1" checked></div>

    </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="0" disabled >

    </td>

  <?php } ?>

  </tr>



    <tr>

    <td>C</td>

    <td>Riwayat Penyakit</td>

    <td></td>

    <td></td>

  </tr>

  

  <tr>

    <td>12</td>

    <td>Apakah anda memiliki riwayat penyakit jantung/diabetes/ISTA atau penyakit kronis lainnya?</td>

    <?php if ($datas->kduabelas==0) {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="1"></div>

    </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="0" checked="">

    </td>

  <?php } else {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="1" checked ></div>

    </td>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="0" disabled>

    </td>

  <?php } ?>

  </tr>

  </tbody>

</table>

</div>

</div>

</div>

</div>

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
      <input type="text" hidden name="nikpenduduk" value="<?php echo $datap->nik?>">
      <input type="text" hidden name="jeniskelaminpenduduk" value="<?php echo $datap->jeniskelamin?>">
      <input type="text" hidden name="nomorhppenduduk" value="<?php echo $datap->nomorhp?>">
      <input type="text" hidden name="alamatpenduduk" value="<?php echo $datap->alamat?>">
      <input type="text" hidden name="pendudukpenduduk" value="<?php echo $datap->penduduk?>">
 <button type="submit" class="btn btn-primary" style="margin-right: 5%">Kirim</button>

</div>

         <!-- Remind Passowrd -->

        </div>

      </div>
<?php } else {?>
<tr>
    <td>10</td>
    <?php if($datap->harisatu==0 || $dataku->ksepuluh==0 || ($datap->harisatu>0 && $dataku->ksepuluh==0)) { ?>

    <td>
    	Apakah dalam 14 hari terakhir anda pernah berkunjung ke daerah di mana Corona tersebar? (contoh: Jakarta)
	 	<select id="select" name="harisatu">
		    <option value="0">Pilih</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		    <option value="13">13</option>
		    <option value="14">14</option>
  		</select> Hari yang lalu.

    </td>
<?php } else {?>
	<td>
	Apakah dalam 14 hari terakhir anda pernah berkunjung ke daerah di mana Corona tersebar? (contoh: Jakarta)
	<input type="text" hidden name="harisatu" value="<?php echo $datap->harisatu ?>">
	</td>
<?php }?>

    <?php if ($dataku->ksepuluh==0 ) { ?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="1" ></div>

    </td>

    <td>	<div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="0" checked>

  	</td>

  <?php } else {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="1" checked></div>

    </td>

    <td>	<div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksepuluh" value="0" disabled="">

  	</td>

  <?php } ?>

  </tr>

  <tr>



     <td>11</td>
    <?php if($datap->haridua==0 || $dataku->ksebelas==0 || ($datap->haridua>0 && $dataku->ksebelas==0)) { ?>
    <td>
    Apakah dalam 14 hari terakhir anda pernah melakukan kontak langsung dengan pasien positif Corona?
		<select id="select" name="haridua">
			<option value="0">Pilih</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		    <option value="13">13</option>
		    <option value="14">14</option>
  		</select> Hari yang lalu.
	</td>
<?php } else {?>
	<td>
		Apakah dalam 14 hari terakhir anda pernah melakukan kontak langsung dengan pasien positif Corona?
	<input type="text" hidden name="haridua" value="<?php echo $datap->haridua ?>">
	</td>
<?php }?>

    <?php if ($dataku->ksebelas==0 ) {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="1"></div>

    </td>

    <td>	<div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="0" checked="">

  	</td>

  <?php } else {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="1" checked></div>

    </td>

    <td>	<div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="ksebelas" value="0" disabled >

  	</td>

  <?php } ?>

  </tr>



    <tr>

    <td>C</td>

    <td>Riwayat Penyakit</td>

    <td></td>

    <td></td>

  </tr>

  

  <tr>

    <td>12</td>

    <td>Apakah anda memiliki riwayat penyakit jantung/diabetes/ISTA atau penyakit kronis lainnya?</td>

    <?php if ($dataku->kduabelas==0 ) {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="1"></div>

    </td>

    <td>	<div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="0" checked="">

  	</td>

  <?php } else {?>

    <td>  <div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="1" checked ></div>

    </td>

    <td>	<div class="form-check">

          <input class="form-check-input" type="radio" id="oke" name="kduabelas" value="0" disabled>

  	</td>

  <?php } ?>

  </tr>

  </tbody>

</table>

</div>

</div>

</div>

</div>

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
      <input type="text" hidden name="nikpenduduk" value="<?php echo $datap->nik?>">
      <input type="text" hidden name="jeniskelaminpenduduk" value="<?php echo $datap->jeniskelamin?>">
      <input type="text" hidden name="nomorhppenduduk" value="<?php echo $datap->nomorhp?>">
      <input type="text" hidden name="alamatpenduduk" value="<?php echo $datap->alamat?>">
      <input type="text" hidden name="pendudukpenduduk" value="<?php echo $datap->penduduk?>">
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