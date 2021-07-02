</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Data Semua Penduduk <?php echo count($datasemua);?></a>.</p>

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
              <?php foreach ($datao as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['nomorhp']?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td>
                        <?php if ($datatku['penduduk']==1) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==2) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==3) {?>
                              Dukuh Dongkelan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==4) {?>
                              Dukuh Glugo <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==5) {?>
                              Dukuh Kweni <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==6) {?>
                              Dukuh Pelemsewu <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==7) {?>
                              Dukuh Sawit <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==8) {?>
                              Dukuh Pandes <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==9) {?>
                              Dukuh Glondong <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==10) {?>
                              Dukuh Jaranan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==11) {?>
                              Dukuh Geneng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==12) {?>
                              Dukuh Ngireng-ngireng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==13) {?>
                              Dukuh Cabeyan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==14) {?>
                              Dukuh Garon <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==15) {?>
                              Dukuh Dadapan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==16) {?>
                              Dukuh Tembi <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==17) {?>
                              Dukuh Gatak <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==18) {?>
                              Dukuh Balong <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==19) {?>
                              Dukuh Gabusan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==20) {?>
                              Dukuh Dagan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==21) {?>
                              Dukuh Sewon <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==22) {?>
                              Dukuh Mriyan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==23) {?>
                              Dukuh Kowen I <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==24) {?>
                              Dukuh Kowen II <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==25) {?>
                              Dukuh Dobalan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>
                      </td>
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
              <?php foreach ($dataj as $datatku) { ?>
                   <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['nomorhp']?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td>
                        <?php if ($datatku['penduduk']==1) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==2) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==3) {?>
                              Dukuh Dongkelan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==4) {?>
                              Dukuh Glugo <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==5) {?>
                              Dukuh Kweni <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==6) {?>
                              Dukuh Pelemsewu <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==7) {?>
                              Dukuh Sawit <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==8) {?>
                              Dukuh Pandes <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==9) {?>
                              Dukuh Glondong <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==10) {?>
                              Dukuh Jaranan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==11) {?>
                              Dukuh Geneng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==12) {?>
                              Dukuh Ngireng-ngireng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==13) {?>
                              Dukuh Cabeyan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==14) {?>
                              Dukuh Garon <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==15) {?>
                              Dukuh Dadapan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==16) {?>
                              Dukuh Tembi <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==17) {?>
                              Dukuh Gatak <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==18) {?>
                              Dukuh Balong <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==19) {?>
                              Dukuh Gabusan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==20) {?>
                              Dukuh Dagan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==21) {?>
                              Dukuh Sewon <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==22) {?>
                              Dukuh Mriyan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==23) {?>
                              Dukuh Kowen I <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==24) {?>
                              Dukuh Kowen II <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==25) {?>
                              Dukuh Dobalan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>
                      </td>
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
              <?php foreach ($datat as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['nomorhp']?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td>
                        <?php if ($datatku['penduduk']==1) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==2) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==3) {?>
                              Dukuh Dongkelan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==4) {?>
                              Dukuh Glugo <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==5) {?>
                              Dukuh Kweni <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==6) {?>
                              Dukuh Pelemsewu <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==7) {?>
                              Dukuh Sawit <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==8) {?>
                              Dukuh Pandes <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==9) {?>
                              Dukuh Glondong <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==10) {?>
                              Dukuh Jaranan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==11) {?>
                              Dukuh Geneng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==12) {?>
                              Dukuh Ngireng-ngireng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==13) {?>
                              Dukuh Cabeyan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==14) {?>
                              Dukuh Garon <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==15) {?>
                              Dukuh Dadapan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==16) {?>
                              Dukuh Tembi <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==17) {?>
                              Dukuh Gatak <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==18) {?>
                              Dukuh Balong <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==19) {?>
                              Dukuh Gabusan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==20) {?>
                              Dukuh Dagan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==21) {?>
                              Dukuh Sewon <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==22) {?>
                              Dukuh Mriyan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==23) {?>
                              Dukuh Kowen I <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==24) {?>
                              Dukuh Kowen II <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==25) {?>
                              Dukuh Dobalan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>
                      </td>
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
              <?php foreach ($datar as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['nomorhp']?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td>
                        <?php if ($datatku['penduduk']==1) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==2) {?>
                              Dukuh Krapyak Wetan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==3) {?>
                              Dukuh Dongkelan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==4) {?>
                              Dukuh Glugo <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==5) {?>
                              Dukuh Kweni <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==6) {?>
                              Dukuh Pelemsewu <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==7) {?>
                              Dukuh Sawit <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==8) {?>
                              Dukuh Pandes <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==9) {?>
                              Dukuh Glondong <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==10) {?>
                              Dukuh Jaranan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==11) {?>
                              Dukuh Geneng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==12) {?>
                              Dukuh Ngireng-ngireng <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==13) {?>
                              Dukuh Cabeyan <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==14) {?>
                              Dukuh Garon <?php echo $datatku['alamat'] ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==15) {?>
                              Dukuh Dadapan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==16) {?>
                              Dukuh Tembi <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==17) {?>
                              Dukuh Gatak <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==18) {?>
                              Dukuh Balong <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==19) {?>
                              Dukuh Gabusan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==20) {?>
                              Dukuh Dagan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==21) {?>
                              Dukuh Sewon <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==22) {?>
                              Dukuh Mriyan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==23) {?>
                              Dukuh Kowen I <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==24) {?>
                              Dukuh Kowen II <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datatku['penduduk']==25) {?>
                              Dukuh Dobalan <?php echo $datatku['alamat'] ?>, Timbulharjo, Sewon.
                            <?php } ?>
                      </td>
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