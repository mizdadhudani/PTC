  <title>



    Material Dashboard by Creative Tim



  </title>



</head>



<input type="nik" name="nik" placeholder="nik" hidden="" value="<?php echo $data->nik?>">


      <div class="content">



        <div class="container-fluid">



          <div>



      <CENTER>



            <?php if ($data->score==0){ ?>



            <div class="col-lg-9 col-md-9 col-sm-6">



              <div class="alert alert-light" role="alert">



               Halo <a class="font-weight-bold"><?php echo $datapenduduk->nama?></a>, Anda termasuk <a class="font-weight-bold">TIDAK BERGEJALA!</a> Tetap semangat untuk menjalankan protokol kesehatan, istirahatlah yang cukup, konsumsi makanan bergizi, tambahkan madu dan vitamin jika perlu. Laporkan kondisi anda secara rutin 2x sehari. Agar kami mengetahui kondisi anda. <a class="font-weight-bold">SALAM TANGGUH</a>

              </div>



            </div>



        <?php } if ($data->score==3) 



      { ?>



             <div class="col-lg-12 col-md-9 col-sm-6">



              <div class="alert alert-danger" role="alert">

               
               Halo <a class="font-weight-bold"><?php echo $datapenduduk->nama?></a> Anda termasuk <a class="font-weight-bold">BERGEJALA BERAT!</a>. Tetap tenang dan <a class="font-weight-bold">SEGERA HUBUNGI PETUGAS.</a>

              </div>

            </div>

<!--         <?php } if ($data->score==4){ ?>

             <div class="col-lg-9 col-md-9 col-sm-6">

              <div class="alert alert-dark" role="alert">

                Halo <a class="font-weight-bold"><?php echo $datapenduduk->nama?></a> Anda dalam kondisi <a class="font-weight-bold">BAGUS!</a> Tetaplah tinggal di dalam rumah, lakukan <a class="font-weight-bold">KARANTINA MANDIRI</a>, makan makanan yang bergizi dan seimbang, minumlah air putih yang banyak dan selalu tetap <a class="font-weight-bold">WASPADA! HUBUNGI NOMOR  0821-3719-7770</a> jika timbul gejala panas > 370 C atau gejala sesak nafas ringan


               




              </div>



            </div> -->



        <?php } if ($data->score==2)



{ ?>

             <div class="col-lg-9 col-md-9 col-sm-6">

              <div class="alert alert-warning" role="alert">

               Halo <a class="font-weight-bold"><?php echo $datapenduduk->nama?></a> Anda termasuk <a class="font-weight-bold">BERGEJALA SEDANG.</a>Tetap tenang dan <a class="font-weight-bold">SEGERA HUBUNGI PETUGAS.</a>

              </div>

            </div>

        <?php } if ($data->score==1)

{?>

            <div class="col-lg-9 col-md-9 col-sm-6">

              <div class="alert alert-success" role="alert">


                Halo <a class="font-weight-bold"><?php echo $datapenduduk->nama?></a> Anda termasuk <a class="font-weight-bold">BERGEJALA RINGAN!.</a> TETAPLAH TENANG. Perbanyaklah istirahat, konsumsi makanan bergizi, tambahkan vitamin dan madu, perbanyaklah minum air putih. <a class="font-weight-bold">SEGERA HUBUNGI PETUGAS</a> jika tiba-tiba merasakan <a class="font-weight-bold">SESAK NAFAS dan LEMAS.</a>

              </div>

            </div>


<!--         <?php } if ($data->score==6)



{?>

            <div class="col-lg-9 col-md-9 col-sm-6">

              <div class="alert alert-danger" role="alert">

                Halo <a class="font-weight-bold"><?php echo $datapenduduk->nama?></a> Anda dalam kondisi yang <a class="font-weight-bold">KURANG BAGUS</a>, lakukan pengecekan suhu badan secara berkala, tetap tenang dan fokus untuk <a class="font-weight-bold">ISTIRAHAT</a>, Minumlah air putih yang banyak, makan makanan yang bergizi, jika diperlukan konsumsi vitamin C dan E serta Madu, <a class="font-weight-bold">TETAP TINGGAL DIRUMAH DAN LAKUKAN ISOLASI MANDIRI</a> dan selalu tetap <a class="font-weight-bold">WASPADA</a>, Jangan Panik. <a class="font-weight-bold">HUBUNGI PETUGAS KAMI DI NOMOR 0838-9231-2479</a> jika suhu tubuh > 380 C atau gejala sesak nafas ringan

              </div>
            </div>

 -->
        <?php }?>



    </CENTER>



          </div>



                   <div class="card-header card-header-primary">



                  <h4 class="card-title ">Report Harian</h4>



                 <!--  <p class="card-category"> Diagram report Harian</p> -->



                </div>



         <canvas id="lineChart"></canvas>



        </div>



      </div>



 <script>



  $(document).ready(function(){



    var date_input=$('input[name="date"]'); //our date input has the name "date"



    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";



    date_input.datepicker({



      format: 'yyyy-mm-dd',



      container: container,



      todayHighlight: true,



      autoclose: true,



    })



  })

</script>

<script type="text/javascript">

//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: [
 <?php foreach (array_reverse($datascore) as $datas) { ?>
"<?php echo date("F j Y", strtotime($datas['tanggal']))?>",

<?php }?>
],
datasets: [{

label: "Data Harian",
data: [
 <?php foreach (array_reverse($datascore) as $datas) { ?>
<?php echo $datas['score']?>,
<?php }?>
],
backgroundColor: [
'rgba(105, 0, 132, .2)',
],
borderColor: [
'rgba(200, 99, 132, .7)',
],
borderWidth: 2
},
]
},
options: {
responsive: true
}
});

</script>