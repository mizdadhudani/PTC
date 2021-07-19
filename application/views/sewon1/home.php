</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
           <button type="submit" class="btn btn-success" onclick="location.href='<?php echo base_url('sewon1/printdata')?>'"><i class="fas fa-print"></i> Print Data</button><br><br>


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
                        <th>TGL DAFTAR</th>
                        <th>TERAKHIR LAPORAN</th>
                        <th>STATUS</th>
                        <th>DOMISILI</th>
                        <th></th>
                        </tr>
                  </thead>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($berat as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku->nama ?></td>
                      <td><?php echo $datatku->nomorhp ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->created_at)) ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->tanggal)) ?></td>
                      <td>
                        <?php if ($datatku->tindak_lanjut==null) {?>
                              Belum ter-TL
                            <?php } else {?>
                              Lihat TL
                            <?php } ?>
                        </td>
                      <td>
                        <?php echo $datatku->pedukuhan ?>, RT <?php echo $datatku->RT ?>, <?php echo $datatku->kelurahan ?>, <?php echo $datatku->kecamatan ?>.
                      </td>
                      <td>
                          <?php $hp = '+62'.substr(trim($datatku->nomorhp), 1); ?>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone='<?php echo $hp ?>'&text=Salam tangguh...%0a%0aSalam semangat sehat, bagaimana kondisinya hari ini Saudara/i <?php echo $datatku->nama ?> ? Semoga semakin bugar dan tetap jaga stamina dengan konsumsi makanan/minuman untuk menambah energi.%0a%0aApabila dalam kondisi darurat, hubungi kami di nomor Hotline dan terus update kondisi harian di BantulTangguh.com%0a%0a*pastisembuh%0a*pastisehat
                          " class="float" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku->nik ?>">Detail</a>
                          <a class="btn btn-warning" href="<?php echo base_url("admin/isidata"),'/',$datatku->nik?>">laporan harian</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
                        <th>TGL DAFTAR</th>
                        <th>TERAKHIR LAPORAN</th>
                        <th>STATUS</th>
                        <th>DOMISILI</th>
                        <th></th>
                        </tr>
                  </thead>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($sedang as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku->nama ?></td>
                      <td><?php echo $datatku->nomorhp ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->created_at)) ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->tanggal)) ?></td>
                      <td>
                        <?php if ($datatku->tindak_lanjut==null) {?>
                              Belum ter-TL
                            <?php } else {?>
                              Lihat TL
                            <?php } ?>
                        </td>
                      <td>
                        <?php echo $datatku->pedukuhan ?>, RT <?php echo $datatku->RT ?>, <?php echo $datatku->kelurahan ?>, <?php echo $datatku->kecamatan ?>.
                      </td>
                      <td>
                          <?php $hp = '+62'.substr(trim($datatku->nomorhp), 1); ?>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone='<?php echo $hp ?>'&text=Salam tangguh...%0a%0aSalam semangat sehat, bagaimana kondisinya hari ini Saudara/i <?php echo $datatku->nama ?> ? Semoga semakin bugar dan tetap jaga stamina dengan konsumsi makanan/minuman untuk menambah energi.%0a%0aApabila dalam kondisi darurat, hubungi kami di nomor Hotline dan terus update kondisi harian di BantulTangguh.com%0a%0a*pastisembuh%0a*pastisehat
                          " class="float" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku->nik ?>">Detail</a>
                          <a class="btn btn-warning" href="<?php echo base_url("admin/isidata"),'/',$datatku->nik?>">laporan harian</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
        <!-- /.container-fluid -->
      </div>
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
                        <th>TGL DAFTAR</th>
                        <th>TERAKHIR LAPORAN</th>
                        <th>STATUS</th>
                        <th>DOMISILI</th>
                        <th></th>
                        </tr>
                  </thead>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($ringan as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku->nama ?></td>
                      <td><?php echo $datatku->nomorhp ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->created_at)) ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->tanggal)) ?></td>
                      <td>
                        <?php if ($datatku->tindak_lanjut==null) {?>
                              Belum ter-TL
                            <?php } else {?>
                              Lihat TL
                            <?php } ?>
                        </td>
                      <td>
                        <?php echo $datatku->pedukuhan ?>, RT <?php echo $datatku->RT ?>, <?php echo $datatku->kelurahan ?>, <?php echo $datatku->kecamatan ?>.
                      </td>
                      <td>
                          <?php $hp = '+62'.substr(trim($datatku->nomorhp), 1); ?>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone='<?php echo $hp ?>'&text=Salam tangguh...%0a%0aSalam semangat sehat, bagaimana kondisinya hari ini Saudara/i <?php echo $datatku->nama ?> ? Semoga semakin bugar dan tetap jaga stamina dengan konsumsi makanan/minuman untuk menambah energi.%0a%0aApabila dalam kondisi darurat, hubungi kami di nomor Hotline dan terus update kondisi harian di BantulTangguh.com%0a%0a*pastisembuh%0a*pastisehat
                          " class="float" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku->nik ?>">Detail</a>
                          <a class="btn btn-warning" href="<?php echo base_url("admin/isidata"),'/',$datatku->nik?>">laporan harian</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>
            </div>
        <!-- /.container-fluid -->
      </div>

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
                        <th>TGL DAFTAR</th>
                        <th>TERAKHIR LAPORAN</th>
                        <th>STATUS</th>
                        <th>DOMISILI</th>
                        <th></th>
                        </tr>
                  </thead>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($sehat as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku->nama ?></td>
                      <td><?php echo $datatku->nomorhp ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->created_at)) ?></td>
                      <td><?php echo date("d-m-Y", strtotime($datatku->tanggal)) ?></td>
                      <td>
                        <?php if ($datatku->tindak_lanjut==null) {?>
                              Belum ter-TL
                            <?php } else {?>
                              Lihat TL
                            <?php } ?>
                        </td>
                      <td>
                        <?php echo $datatku->pedukuhan ?>, RT <?php echo $datatku->RT ?>, <?php echo $datatku->kelurahan ?>, <?php echo $datatku->kecamatan ?>.
                      </td>
                      <td>
                          <?php $hp = '+62'.substr(trim($datatku->nomorhp), 1); ?>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone='<?php echo $hp ?>'&text=Salam tangguh...%0a%0aSalam semangat sehat, bagaimana kondisinya hari ini Saudara/i <?php echo $datatku->nama ?> ? Semoga semakin bugar dan tetap jaga stamina dengan konsumsi makanan/minuman untuk menambah energi.%0a%0aApabila dalam kondisi darurat, hubungi kami di nomor Hotline dan terus update kondisi harian di BantulTangguh.com%0a%0a*pastisembuh%0a*pastisehat
                          " class="float" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku->nik ?>">Detail</a>
                          <a class="btn btn-warning" href="<?php echo base_url("admin/isidata"),'/',$datatku->nik?>">laporan harian</a>
                      </td>
                    </tr>
              <?php }?> 
                  </tbody>
                </table>
              </div>



        </div>
        <!-- /.container-fluid -->
      </div>

</div>


      </div>
      <!-- End of Main Content -->