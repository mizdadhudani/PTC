
          <!-- Data ODP -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-danger" href="<?php echo base_url("admin/penduduk") ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                <a class="btn btn-warning" href="<?php echo base_url("admin/statuspendudukshelter"),'/',$datapenduduk->nik ?>">Ubah Status</a><br><br>
              <h6 class="m-0 font-weight-bold text-primary">Detail Data Penduduk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                  
                      <tr>
                          <td>NIK</td>
                          <td class="text-primary"><?php echo $datapenduduk->nik?></td>
                      </tr>
                      <tr>
                          <td>Nama</td>
                          <td><?php echo $datapenduduk->nama?></td>
                      </tr>
                      <tr>
                          <td>Nomor HP</td>
                          <td><?php echo $datapenduduk->nomorhp?></td>
                      </tr>
                      <tr>
                          <td>Jenis Kelamin</td>
                          <td class="text-primary"><?php echo $datapenduduk->jeniskelamin?></td>
                      </tr>
                      <tr>
                          <td>Alamat</td>
                          <td class="text-primary">
                            <?php echo $datapenduduk->pedukuhan ?>, RT <?php echo $datapenduduk->RT ?>, <?php echo $datapenduduk->kelurahan ?>, <?php echo $datapenduduk->kecamatan ?>.
                          </td>
                      </tr>
                      <tr>
                          <td>Usia</td>
                          <td class="text-primary"><?php echo $datapenduduk->usia?></td>
                      </tr>
                      <tr>
                          <td>Status dalam Keluarga</td>
                          <td class="text-primary"><?php echo $datapenduduk->status_dlm_keluarga?></td>
                      </tr>
                      <tr>
                          <td>Status</td>
                          <td class="text-primary">
                          <?php if($datapenduduk->status=='KE') { ?>
                            Kontak Erat
                          <?php } ?>
                          <?php if($datapenduduk->status=='positif') { ?>
                            Positif
                          <?php } ?>
                          <?php if($datapenduduk->status=='Suspect') { ?>
                            Suspect
                          <?php } ?>
                          <?php if($datapenduduk->status=='sehat') { ?>
                            Sehat
                          <?php } ?>
                          <?php if($datapenduduk->status=='Meningal Dunia') { ?>
                            Meningal Dunia
                          <?php } ?>
                          </td>
                      </tr>
                      <tr>
                          <td>Tempat Isolasi</td>
                          <td class="text-primary"><?php echo $datapenduduk->jeniskelamin?></td>
                      </tr>
                      <tr>
                          <td>KTP</td>
                          <td>
                              <?php if ($datapenduduk->gambar_ktp = 'default.jpg'){ ?>
                              KTP tidak ada
                              <?php } else {?>
                              <img src="<?php echo base_url('assets/surat/'.$datapenduduk->gambar_ktp) ?>" width="64"/><br><a href="<?php echo base_url('assets/surat/'.$datapenduduk->gambar_ktp) ?>" download>Download</a>
                            <?php } ?>
                          </td>
                      </tr>
              
                    </table>
</div>
            </div></div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->