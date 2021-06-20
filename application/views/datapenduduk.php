</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Data Semua Penduduk <?php echo count($datasemua);?></a>.</p>
          <button type="submit" class="btn btn-primary" onclick="location.href='<?php echo base_url('admin/printdata')?>'">Print Data</button>
          <button type="submit" class="btn btn-primary" onclick="location.href='<?php echo base_url('admin/printdataharian')?>'">Print Data Harian</button>
          <button type="submit" class="btn btn-primary" onclick="location.href='<?php echo base_url('admin/customsearch')?>'">Pencarian manual</button>
          <!-- <button type="submit" class="btn btn-primary" onclick="location.href='<?php echo base_url('admin/cekdatadouble')?>'">Cek data double</button> -->
              <div class="row justify-content-md-center" style="margin-top: 5%;">
                <div class="col-lg-2 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Penduduk yang ODP 2 <a class="font-weight-bold"><?php echo count($datao);?></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Penduduk yang ODP 1 <a class="font-weight-bold"><?php echo count($dataj)?></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Penduduk yang OTG <a class="font-weight-bold"><?php echo count($datat);?></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Penduduk Yang Pelaku Perjalanan <a class="font-weight-bold"><?php echo count($datar);?></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Penduduk Yang Sehat dengan Resiko <a class="font-weight-bold"><?php echo count($datag);?></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Penduduk Yang Sehat <a class="font-weight-bold"><?php echo count($datas);?></a>
                    </div>
                  </div>
                </div>
              </div>
          <!-- Data ODP -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk ODP 2</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datao as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['alamat'] ?></td>
                      <td><?php echo $datatku['score'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
                       </td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/deletedata"),'/',$datatku['nik']?>">Hapus</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk ODP 1</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTablej" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($dataj as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['alamat'] ?></td>
                      <td><?php echo $datatku['score'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
                       </td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/deletedata"),'/',$datatku['nik']?>">Hapus</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk OTG</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTablet" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datat as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['alamat'] ?></td>
                      <td><?php echo $datatku['score'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
                       </td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/deletedata"),'/',$datatku['nik']?>">Hapus</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Pelaku Perjalanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTabler" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>Alamat</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datar as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['alamat'] ?></td>
                      <td><?php echo $datatku['score'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
                       </td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/deletedata"),'/',$datatku['nik']?>">Hapus</a>
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


          <!-- Data Gejala -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Sehat yang Resiko</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTableg" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>Score</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        </tr>
                  </tfoot>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datag as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['alamat'] ?></td>
                      <td><?php echo $datatku['score'] ?></td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/detailpenduduk"),'/',$datatku['nik']?>">Detail</a>
                       </td>
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/deletedata"),'/',$datatku['nik']?>">Hapus</a>
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

          <!-- Data Sehat -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Sehat</h6>
            </div>
            <form action="<?php echo base_url('admin/datasehat') ?>"  method="POST">
            	<button class="btn btn-primary">Tampilkan Data Sehat</button>
            </form>
          </div>


        </div>
        <!-- /.container-fluid -->
      </div>
        <!-- /.container-fluid -->
</div>


      </div>
      <!-- End of Main Content -->