</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Data Semua Penduduk <?php echo $semua;?></a>.</p>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Paparan Bergejala berat</h6>
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
                        <th>Tanggal Update</th>
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
                         <th>Tanggal Update</th>
                        <th></th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($berat as $berat) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $berat->nama ?></td>
                      <td><?php echo $berat->nomorhp?></td>
                      <td><?php echo $berat->tempat_isolasi ?></td>
                      <td><?php echo $berat->kelurahan.', '.$berat->kecamatan.', '.$berat->kota.', '.$berat->provinsi?></td>
                      <td><?php echo date("F j Y", strtotime($berat->tanggal));?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk/").$berat->nik?>">Detail</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Data OTG -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Paparan Bergejala Sedang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTablej" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMOR HP</th>
                        <th>LOKASI ISOLASI</th>
                        <th>DOMISILI</th>
                        <th>Tanggal Update</th>
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
                        <th>Tanggal Update</th>
                        <th></th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($sedang as $sedang) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $sedang->nama ?></td>
                      <td><?php echo $sedang->nomorhp?></td>
                      <td><?php echo $sedang->tempat_isolasi ?></td>
                      <td><?php echo $sedang->kelurahan.', '.$sedang->kecamatan.', '.$sedang->kota.', '.$sedang->provinsi?></td>
                      <td><?php echo date("F j Y", strtotime($sedang->tanggal));?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk/").$sedang->nik?>">Detail</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Data OTG -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Paparan Bergejala Ringan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTablet" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMOR HP</th>
                        <th>LOKASI ISOLASI</th>
                        <th>DOMISILI</th>
                        <th>Tanggal Update</th>
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
                        <th>Tanggal Update</th>
                        <th></th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($ringan as $ringan) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $ringan->nama ?></td>
                      <td><?php echo $ringan->nomorhp?></td>
                      <td><?php echo $ringan->tempat_isolasi ?></td>
                      <td><?php echo $ringan->kelurahan.', '.$ringan->kecamatan.', '.$ringan->kota.', '.$ringan->provinsi?></td>
                      <td><?php echo date("F j Y", strtotime($ringan->tanggal));?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk/").$ringan->nik?>">Detail</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Data KEER -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Paparan Tidak Bergejala</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTabler" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMOR HP</th>
                        <th>LOKASI ISOLASI</th>
                        <th>DOMISILI</th>
                        <th>Tanggal Update</th>
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
                        <th>Tanggal Update</th>
                        <th></th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
             <?php foreach ($sehat as $sehat) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $sehat->nama ?></td>
                      <td><?php echo $sehat->nomorhp?></td>
                      <td><?php echo $sehat->tempat_isolasi ?></td>
                      <td><?php echo $sehat->kelurahan.', '.$sehat->kecamatan.', '.$sehat->kota.', '.$sehat->provinsi?></td>
                      <td><?php echo date("F j Y", strtotime($sehat->tanggal));?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk/").$sehat->nik?>">Detail</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->
      </div>

</div>


      </div>
      <!-- End of Main Content -->