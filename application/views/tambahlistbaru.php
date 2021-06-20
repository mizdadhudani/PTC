<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Data Diri-Panggung Tanggap Covid-19</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dash.css');?>"> <!-- CSS reset -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/new.css');?>"> <!-- CSS reset -->
    <!-- Bootstrap core CSS-->
    
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css" rel="stylesheet')?>">
    
    <!-- Custom styles for this template-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/tinymce/plugin/tinymce/tinymce.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/tinymce/plugin/tinymce/init-tinymce.js')?>"></script>

   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet"> -->



</head>



<body style="background-color: #dc3545">

    <header>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">

                <a class="navbar-brand mx-auto" href="#">

                    <img src="<?php echo base_url('assets/images/KL-PTC-19.png')?>"  width="575" height="100" class="img-fluid"" class="center">

                </a>

            </nav>



<div class="wrapper fadeInDown" style="
    margin: 5%;
    background-color: red;
">

        <div id="formContent4" style="
    background-color: white;
    border-radius: 10px;">

          <nav class="navbar navbar-expand-lg navbar-dark" >

                <a class="navbar-brand mx-auto" href="#" style="padding-left: 0;">

       <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="150" height="50" class="img-fluid">

      </a>

   </nav>

       <!-- Login Form -->

<div class="row" style="
    margin: 5%;
">

        <div class="col-lg-4">

<form >

    <input type="text" hidden class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="id" value="<?php echo $data->id?>">

 



           <h5 class="card-title">Data Pelapor</h5>

             <div class="form-group">

              <label for="Nama">Nama Pelapor</label>

                 <input type="text" readonly class="form-control" id="Nama" value="<?php echo $data->nama?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">NIK</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->nik?>">


              </div>

              <div class="form-group">

              <label for="staticEmail">Nomor HP</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->nomorhp?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Jenis Kelamin</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->jeniskelamin?>">

              </div>

              <div class="form-group">

              <label for="staticEmail">Alamat</label>

                 <textarea type="text" readonly class="form-control" id="staticEmail" required rows="3"><?php echo $data->alamat?></textarea>

              </div>

              <div class="form-group">

              <label for="staticEmail">Kependudukan</label>

                 <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $data->penduduk?>">

              </div>

      </form>

      </div>

      <div class="col-lg-8">

<form action="<?php echo base_url('page/submitlistbaru')?>"  method="post" enctype="multipart/form-data">

     <h5 class="card-title">Data yang dilaporkan</h5>

  <input type="number"  hidden class="form-control" id="Nama" placeholder="Masukkan Nama" required="" name="link" value="<?php echo $data->link?>">

  <div class="form-group">

    <label for="Nama">Nama</label>

    <input type="Nama" class="form-control" id="Nama" name="nama" placeholder="Masukkan Nama" required="">

  </div>

  <div class="form-group">

    <label for="NomorHP">NIK</label>

    <input type="NomorHP" minlength="16" name="nik" class="form-control" id="NomorHP" placeholder="Masukkan NIK" required=""onkeypress="return isNumber(event)">

         <script type="text/javascript">     

           function isNumber(evt) {

             evt = (evt) ? evt : window.event;

             var charCode = (evt.which) ? evt.which : evt.keyCode;

             if ( (charCode > 31 && charCode < 48) || charCode > 57) {

                   return false;

                   }

             return true;

          }

         </script>

  </div>

  <div class="form-group">

    <label for="NomorHP">Nomor HP</label>

    <input type="NomorHP" class="form-control" id="NomorHP" name="nomorhp" minlength="11" placeholder="Masukkan nomor HP" required=""onkeypress="return isNumber(event)">

         <script type="text/javascript">     

           function isNumber(evt) {

             evt = (evt) ? evt : window.event;

             var charCode = (evt.which) ? evt.which : evt.keyCode;

             if ( (charCode > 31 && charCode < 48) || charCode > 57) {

                   return false;

                   }

             return true;

          }

         </script>

  </div>



   <div class="form-group">

    <label for="JenisKelamin">Jenis Kelamin</label>

    <div class="form-check">

  <input class="form-check-input" type="radio" name="jeniskelamin" id="JenisKelamin" value="Laki-Laki" required="">

  <label class="form-check-label" for="exampleRadios1">

    Laki-laki

  </label>

</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="jeniskelamin" id="JenisKelamin" value="Perempuan"required="">

  <label class="form-check-label" for="exampleRadios2">

    Perempuan

  </label>

</div>

  </div>



  
 <div class="form-group">

    <label for="Alamat">Alamat (berdasarkan KTP)</label>

    <textarea type="text" class="form-control" id="Alamat" name="alamat" rows="3"placeholder="Masukkan alamat lengkap" >   </textarea> 

  </div>
    <div class="form-group">
      <label for="Alamat">Alamat Domisili</label>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Krapyak Wetan" required="">
              <label class="form-check-label">
                Dukuh Krapyak Wetan
              </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Krapyak Kulon" required="">
            <label class="form-check-label">
             Dukuh Krapyak Kulon
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Dongkelan" required="">
            <label class="form-check-label">
              Dukuh Dongkelan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Glugo" required="">
            <label class="form-check-label">
              Dukuh Glugo
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Kweni" required="">
            <label class="form-check-label">
              Dukuh Kweni
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Pelemsewu" required="">
            <label class="form-check-label">
              Dukuh Pelemsewu
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Sawit" required="">
            <label class="form-check-label">
              Dukuh Sawit
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Pandes" required="">
            <label class="form-check-label">
              Dukuh Pandes
            </label>
          </div>
        </div>


        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Glondong" required="">
            <label class="form-check-label">
              Dukuh Glondong
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Jaranan" required="">
            <label class="form-check-label">
              Dukuh Jaranan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Geneng" required="">
            <label class="form-check-label">
              Dukuh Geneng
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Ngireng-ngireng" required="">
            <label class="form-check-label">
              Dukuh Ngireng-ngireng
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Cabeyan" required="">
            <label class="form-check-label">
              Dukuh Cabeyan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Dukuh Garon" required="">
            <label class="form-check-label">
              Dukuh Garon
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penduduk"  value="Luar Panggungharjo" required="">
            <label class="form-check-label">
              Luar Panggungharjo
            </label>
          </div>
        </div>
      </div>
    </div>
 <input class="form-check-input" hidden type="text" name="score" id="Kependudukan" value="">


  <button type="submit" class="btn btn-primary" style="margin-bottom: 5%;">Kirim</button>







</form>

</div>





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