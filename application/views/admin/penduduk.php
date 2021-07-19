</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Data Semua Penduduk <?php echo count($datasemua);?></a>.</p>

       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Semua Penduduk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMOR HP</th>
                        <th>LOKASI ISOLASI</th>
                        <th>DOMISILI</th>
                        <th></th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMOR HP</th>
                        <th>LOKASI ISOLASI</th>
                        <th>DOMISILI</th>
                        <th></th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datasemua as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['nomorhp']?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td>
                        <?php echo $datatku['pedukuhan'] ?>, RT <?php echo $datatku['RT'] ?>, <?php echo $datatku['kelurahan'] ?>, <?php echo $datatku['kecamatan'] ?>.
                      </td>
                      <td>
                          <?php $hp = '+62'.substr(trim($datatku['nomorhp']), 1); ?>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone='<?php echo $hp ?>'&text=Salam tangguh...%0a%0aSalam semangat sehat, bagaimana kondisinya hari ini Saudara/i <?php echo $datatku['nama'] ?> ? Semoga semakin bugar dan tetap jaga stamina dengan konsumsi makanan/minuman untuk menambah energi.%0a%0aApabila dalam kondisi darurat, hubungi kami di nomor Hotline dan terus update kondisi harian di BantulTangguh.com%0a%0a*pastisembuh%0a*pastisehat
                          " class="float" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/isianpenduduk"),'/',$datatku['nik']?>">Detail</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>




