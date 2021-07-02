<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Login - Bantul Tangguh</title>

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

        <div id="formContent">
                      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000">
       <a class="font-weight-bold mx-auto text-warning" style="font-size: 20px">MITIGASI DAMPAK KLINIS</a>
                <a class="navbar-brand mx-auto" href="#">
       <!-- <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="150" height="50" class="img-fluid"> -->
      </a>
   </nav>
  <br>

       <!-- Login Form -->

        <form name="myForm" onsubmit="return validateForm()" action="<?php echo base_url('page/submitdata')?>"  method="post" enctype="multipart/form-data">

         <div class="form-group">
          <?php echo validation_errors(); ?>
         <label for="login"><a class="font-weight-bold"><p class="text-danger">MASUKKAN NOMOR HP ANDA</p></a></label>
<center>
         <input type="number" minlength="11" id="login" required="" minlength="11" autofocus class="form-control" name="nomorhp"placeholder="(08XXXXXXXXXX) minimal 10 digit"onkeypress="return isNumber(event)" style="width: 80%;">
         </center>

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

         <input type="submit" style="margin-top: 5%" class="fadeIn fourth" value="Masuk">

        </div>

       </form>



         <!-- Remind Passowrd -->

        </div>

      </div>
      <nav class="navbar navbar-expand-lg navbar-dark" >
          <a class="navbar-brand mx-auto" href="https://wa.me/+6281225712580/?text=Hallo%20Bantul%20Tangguh" target="_blank">
       <img src="<?php echo base_url('assets/images/hotlineptc.png')?>"  width="350" height="50" class="img-fluid" style="padding: 1em 1em;">
      </a>
   </nav>
    </header>





    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
  function validateForm() {
  var x = document.forms["myForm"]["nomorhp"].value;
  if (x == "") {
    alert("Nomor HP Harus Disi");
    return false;
  } else if (<=9) {
    alert("Nomor HP Harus lebih dari 10 digit");
  }
}
</script>
</body>



</html>