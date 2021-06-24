    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

    <!-- Menyisipkan Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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



        <div style="    margin-top: 10%;
    padding-left: 10%;
    padding-right: 10%;">

        <div style="
    background-color: white;
    height: : 50%;
">

          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFFAFA">

                <a class="navbar-brand mx-auto" href="#">

       <img src="<?php echo base_url('assets/images/Logo-PTC.png')?>"  width="150" height="50" class="img-fluid">

      </a>

   </nav>



                    <div class="row">

                      <div class="col-lg-8">

                      </div>

                      <div class="col-lg-3">

                     <button type="submit" class="btn btn-warning" onclick="location.href='<?php echo base_url('page/tambahlistbaru'),'/',$datalist->link?>'" style="
    float: right;
    margin-right: 7%;
"><i class="fas fa-user-plus"></i> Tambah Data </button>

                     </div>

                   </div>



                 <div class="card">

                     <div class="card-header card-header-primary">

                     <h4 class="card-title ">List Data yang Dilaporkan</h4>

                     

                </div>

                <div class="card-body">

                  <div class="table-responsive">

                    <table class="table">

                      <thead class=" text-primary">

                        <th>

                          NO

                        </th>

                        <th>

                          NIK

                        </th>

                        <th>

                          Nama

                        </th>

                        <th>

                          

                        </th>

                      </thead>

                      <tbody>

                           <?php $no=1;?>

              <?php foreach ($data as $datatku) { ?>

                    <tr>

                      <td><?php echo $no++; ?></td>

                      <td><?php echo $datatku['nik'] ?></td>

                      <td><?php echo $datatku['nama'] ?></td>

                      <td>

                        <button  class="btn btn-primary" onclick="location.href='<?php echo base_url("page/isidata"),'/',$datatku['nik']?>'" >Isi Laporan Harian</button>
                        <!-- <button  class="btn btn-primary" onclick="location.href='<?php echo base_url("page/gantialamat"),'/',$datatku['link']?>'" >Ubah Data Diri</button> -->



        </div>

                      </td>

                    </tr>

              <?php }?> 

<tr>    

                      </tbody>

                    </table>

                  </div>

                </div>

              </div>





    </header>





    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>