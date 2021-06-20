<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'yyyy/mm/dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>
</head>

<title>Detail Data Penduduk</title>

</head>

      <div class="content">

        <div class="container-fluid">

             <div class="card-body">

                  <div class="table-responsive">

                    <table class="table">

                      <thead class=" text-primary">

                        <th>

                          NIK

                        </th>

                        <th>

                          NAMA

                        </th>

                        <th>

                          Jenis Kelamin

                        </th>

                        <th>

                          NOMOR HP

                        </th>

                        <th>

                          Kependudukan

                        </th>

                      </thead>

                      <tbody>

                        <tr>

                          <td class="text-primary">

                            <?php echo $datapenduduk->nik?>

                          </td>

                          <td>

                            <?php echo $datapenduduk->nama?>

                          </td>

                          <td>

                            <?php echo $datapenduduk->jeniskelamin?>

                          </td>

                          <td>

                            <?php echo $datapenduduk->nomorhp?>

                          </td>

                          <td >

                            <?php echo $datapenduduk->penduduk?>

                          </td>

                        </tr>



                      </tbody>

                    </table>

                     Alamat : <?php echo$datapenduduk->alamat?>

                  </div>

                </div>

         <canvas id="lineChart"></canvas>

         <form   method="post" enctype="multipart/form-data">

          <div class="bootstrap-iso">

           <div class="container-fluid">

            <div class="row">

             <div class="col-md-6 col-sm-6 col-xs-12">
             </div>

            </div>

           </div>

          </div>

        </form>
 <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form class="form-horizontal" method="post" action="<?php echo base_url("admin/cekdatatanggal"),'/',$datapenduduk->nik?>">
     <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Date
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="tanggal" placeholder="YYYY/MM/DD" type="text"/>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <button class="btn btn-primary " name="submit" type="submit">
        Detail
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>        
            <div class="card-body">
              <div class="table-responsive">
                    
                <?php $no=1;?>
              <?php foreach ($datascore as $datatku) { ?>
                <?php $initanggal=date("Ymd", strtotime($datatku['tanggal']))?>
                
                <form action="<?php echo base_url("admin/cekdatatanggal"),'/',$datapenduduk->nik?>" method="post" enctype="multipart/form-data">
                <input type="text" name="tanggal" hidden="" value="<?php echo $datatku['tanggal']?>">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>TANGGAL</th>
                        <th>Score</th>
                        <th>Detail</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>TANGGAL</th>
                        <th>Score</th>
                        <th>Detail</th>
                        </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['tanggal'] ?></td>
                      <td><?php echo $datatku['score'] ?></td>
                      <td>
              
                         <button type="submit" class="btn btn-primary" >Detail</button>
                      </td>
                    </tr>
                    </form>
            
                  </tbody>
                </table>
                  <?php }?> 
              </div>
            </div>

        </div>

      </div>



<script>

  $(document).ready(function(){

    var date_input=$('input[name="tanggal"]'); //our date input has the name "date"

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
"<?php echo date("D M Y", strtotime($datas['tanggal']))?>",

<?php }?>
],
datasets: [{

label: "My First dataset",
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
<?php foreach ($datascore as $datas) { ?>
<tr>
  <td><?php echo  date("D M Y", strtotime($datas['tanggal'])) ?></td>
</tr>
<?php }?>