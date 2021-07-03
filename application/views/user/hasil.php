  <title>



   <?php echo $title;?>



  </title>



</head>



<input type="nik" name="nik" placeholder="nik" hidden="" value="<?php echo $kuisoner->nik?>">


      <div class="content">



        <div class="container-fluid">



          <div>



      <CENTER>



            <?php if ($kuisoner->score==0){ ?>



            <div class="col-lg-9 col-md-9 col-sm-6">



              <div class="alert alert-light" role="alert">



               Halo <a class="font-weight-bold"><?php echo $penduduk->nama?></a>, Anda termasuk <a class="font-weight-bold">TIDAK BERGEJALA!</a> Tetap semangat untuk menjalankan protokol kesehatan, istirahatlah yang cukup, konsumsi makanan bergizi, tambahkan madu dan vitamin jika perlu. Laporkan kondisi anda secara rutin 2x sehari. Agar kami mengetahui kondisi anda. <a class="font-weight-bold">SALAM TANGGUH</a>

              </div>



            </div>



        <?php } if ($kuisoner->score==3) 



      { ?>



             <div class="col-lg-12 col-md-9 col-sm-6">



              <div class="alert alert-danger" role="alert">

               
               Halo <a class="font-weight-bold"><?php echo $penduduk->nama?></a> Anda termasuk <a class="font-weight-bold">BERGEJALA BERAT!</a>. Tetap tenang dan <a class="font-weight-bold">SEGERA HUBUNGI PETUGAS.</a>

              </div>

            </div>


        <?php } if ($kuisoner->score==2)



{ ?>

             <div class="col-lg-9 col-md-9 col-sm-6">

              <div class="alert alert-warning" role="alert">

               Halo <a class="font-weight-bold"><?php echo $penduduk->nama?></a> Anda termasuk <a class="font-weight-bold">BERGEJALA SEDANG.</a>Tetap tenang dan <a class="font-weight-bold">SEGERA HUBUNGI PETUGAS.</a>

              </div>

            </div>

        <?php } if ($kuisoner->score==1)

{?>

            <div class="col-lg-9 col-md-9 col-sm-6">

              <div class="alert alert-success" role="alert">


                Halo <a class="font-weight-bold"><?php echo $penduduk->nama?></a> Anda termasuk <a class="font-weight-bold">BERGEJALA RINGAN!.</a> TETAPLAH TENANG. Perbanyaklah istirahat, konsumsi makanan bergizi, tambahkan vitamin dan madu, perbanyaklah minum air putih. <a class="font-weight-bold">SEGERA HUBUNGI PETUGAS</a> jika tiba-tiba merasakan <a class="font-weight-bold">SESAK NAFAS dan LEMAS.</a>

              </div>

            </div>



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
kuisoner: {
labels: [
 <?php foreach (array_reverse($tanggal) as $tanggal) { ?>
"<?php echo date("F j Y", strtotime($tanggal['tanggal']))?>",

<?php }?>
],
kuisonersets: [{

label: "kuisoner Harian",
kuisoner: [
 <?php foreach (array_reverse($score) as $score) { ?>
<?php echo $score['score']?>,
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