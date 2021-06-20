<title>Detail Data Penduduk</title>
</head>
      <div class="content">
        <div class="container-fluid">
         <canvas id="examChart"></canvas>
         
          <div class="bootstrap-iso">
           <div class="container-fluid">
            <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-12">
              <form class="form-horizontal" method="post">
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
                  <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text"/>
                 </div>
                </div>
               </div>
               <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                 <button class="btn btn-primary " name="submit" type="submit">
                  Submit
                 </button>
                </div>
               </div>
              </form>
             </div>
            </div>
           </div>
          </div>

        </div>
      </div>

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
<script type="text/javascript">
  //line
var ctx = document.getElementById("examChart").getContext("2d");

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
    // new Date("<?php echo '2020-03-25 13:3' ?>").toLocaleString(), new Date("2020-03-25 13:3").toLocaleString(), new Date("2020-03-25 13:3").toLocaleString()
              <?php foreach ($datascore as $datas) { ?>
                new Date("<?php echo $datas['tanggal']?><?php echo ' '?><?php echo $datas['time'];?>").toLocaleString(),
              <?php }?>
    ],
 


   
    datasets: [{
      label: 'Data Harian',
      data: [
                    <?php foreach ($datascore as $datas) { ?>
                      {
                          t: new Date("<?php echo $datas['tanggal']?><?php echo ' '?><?php echo $datas['time'];?>"),
                          y: <?php echo $datas['score']?>
                      },
              <?php }?> 
      // {
      //     t: new Date("2020-03-25 13:3"),
      //     y: 12
      //   },
      //   {
      //     t: new Date("2020-03-26 13:3"),
      //     y: 21
      //   },
      //   {
      //     t: new Date("2015-03-27 13:3"),
      //     y: 32
      //   }
      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time'
      }]
    }
  }
});
</script>