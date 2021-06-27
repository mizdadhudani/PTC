</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Data Semua Penduduk <?php echo count($datasemua);?></a>.</p>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Bergejala berat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datao as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td><?php if ($datatku['keduadua'] == 1) { ?>
                        90-95
                      <?php } else if ($datatku['keduatiga'] == 1) { ?>
                        <90
                      <?php } else { ?>
                        normal
                      <?php } ?>
                        </td>
                      <td><?php echo $datatku['kedelapanbelas'], '/', $datatku['kedualima'] ?></td>
                      <td><?php echo $datatku['kesembilanbelas'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Bergejala Sedang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTablej" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($dataj as $datatku) { ?>
                   <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td><?php if ($datatku['keduadua'] == 1) { ?>
                        90-95
                      <?php } else if ($datatku['keduatiga'] == 1) { ?>
                        <90
                      <?php } else { ?>
                        normal
                      <?php } ?>
                        </td>
                      <td><?php echo $datatku['kedelapanbelas'], '/', $datatku['kedualima'] ?></td>
                      <td><?php echo $datatku['kesembilanbelas'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Bergejala Ringan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTablet" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datat as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td><?php if ($datatku['keduadua'] == 1) { ?>
                        90-95
                      <?php } else if($datatku['keduatiga'] == 1) { ?>
                        <90
                      <?php } else { ?>
                        normal
                      <?php } ?>
                        </td>
                      <td><?php echo $datatku['kedelapanbelas'], '/', $datatku['kedualima'] ?></td>
                      <td><?php echo $datatku['kesembilanbelas'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Tidak Bergejala</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTabler" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                      <th>NO</th>
                        <th>NAMA</th>
                        <th>LOKASI</th>
                        <th>SATURASI</th>
                        <th>TEKANAN DARAH</th>
                        <th>NADI</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datar as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td><?php if ($datatku['keduadua'] == 1) { ?>
                        90-95
                      <?php } else if ($datatku['keduatiga'] == 1) { ?>
                        <90
                      <?php } else { ?>
                        normal
                      <?php } ?>
                        </td>
                      <td><?php echo $datatku['kedelapanbelas'], '/', $datatku['kedualima'] ?></td>
                      <td><?php echo $datatku['kesembilanbelas'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
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