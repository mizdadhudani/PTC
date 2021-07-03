                  <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Data Sehat -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk Sehat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
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
              <?php foreach ($datas as $datatku) { ?>
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
        </div>