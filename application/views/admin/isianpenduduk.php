
          <!-- Data ODP -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
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
                            <?php if ($datapenduduk->penduduk==1) {?>
                              Dukuh Krapyak Wetan <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==2) {?>
                              Dukuh Krapyak Wetan <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==3) {?>
                              Dukuh Dongkelan <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==4) {?>
                              Dukuh Glugo <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==5) {?>
                              Dukuh Kweni <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==6) {?>
                              Dukuh Pelemsewu <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==7) {?>
                              Dukuh Sawit <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==8) {?>
                              Dukuh Pandes <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==9) {?>
                              Dukuh Glondong <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==10) {?>
                              Dukuh Jaranan <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==11) {?>
                              Dukuh Geneng <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==12) {?>
                              Dukuh Ngireng-ngireng <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==13) {?>
                              Dukuh Cabeyan <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==14) {?>
                              Dukuh Garon <?php echo $datapenduduk->alamat ?>, Panggungharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==15) {?>
                              Dukuh Dadapan <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==16) {?>
                              Dukuh Tembi <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==17) {?>
                              Dukuh Gatak <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==18) {?>
                              Dukuh Balong <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==19) {?>
                              Dukuh Gabusan <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==20) {?>
                              Dukuh Dagan <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==21) {?>
                              Dukuh Sewon <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==22) {?>
                              Dukuh Mriyan <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==23) {?>
                              Dukuh Kowen I <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==24) {?>
                              Dukuh Kowen II <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>

                            <?php if ($datapenduduk->penduduk==25) {?>
                              Dukuh Dobalan <?php echo $datapenduduk->alamat ?>, Timbulharjo, Sewon.
                            <?php } ?>
                          </td>
                      </tr>
                      <tr>
                          <td>Usia</td>
                          <td class="text-primary"><?php echo $datapenduduk->usia?></td>
                      </tr>
                      <tr>
                          <td>Mulai Isolasi</td>
                          <td class="text-primary"><?php echo $datapenduduk->mulai_isolasi?></td>
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
                          </td>
                      </tr>
                      <tr>
                          <td>Tempat Isolasi</td>
                          <td class="text-primary"><?php echo $datapenduduk->jeniskelamin?></td>
                      </tr>
                      <tr>
                          <td>KTP</td>
                          <td>
                              <img src="<?php echo base_url('assets/surat/'.$datapenduduk->gambar_ktp) ?>" width="64"/><br><a href="<?php echo base_url('assets/surat/'.$datapenduduk->gambar_ktp) ?>" download>Download</a>
                          </td>
                      </tr>
                      <tr>
                          <td>Surat Tes Swab</td>
                          <td>
                              <img src="<?php echo base_url('assets/surat/'.$datapenduduk->gambar_surat) ?>" width="64"/><br><a href="<?php echo base_url('assets/surat/'.$datapenduduk->gambar_surat) ?>" download>Download</a>
                          </td>
                      </tr>
              
                    </table>
</div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->