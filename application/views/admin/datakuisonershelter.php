</head>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <form target="_blank" action="<?php echo base_url("admin/printdetailshelter"),'/',$cekdata->nik?>" method="post" enctype="multipart/form-data">
                <input type="text" name="tanggal" hidden="" value="<?php echo $cekdata->tanggal?>">
                <br>
                <a class="btn btn-danger" href="<?php echo base_url("admin/detailpendudukshelter"),'/',$datapenduduk->nik ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            
            <button type="submit" class="btn btn-primary" ><i class="fas fa-print"></i> Print Data</button></form>
            <br>
                     <table class="table">

                      <thead class=" text-primary">

                        <th>NIK</th>

                        <th>Nama</th>

                        <th>Jenis Kelamin</th>

                        <th>Nomor HP</th>

                        <th>Domisili</th>

                      </thead>

                      <tbody>

                        <tr>

                          <td class="text-primary">

                            <?php echo $datapenduduk->nik?>

                          </td>

                          <td>

                            <?php echo $datapenduduk->nama?>

                          </td>

                          <td>

                            <?php echo $datapenduduk->jeniskelamin?>

                          </td>

                          <td>

                            <?php echo $datapenduduk->nomorhp?>

                          </td>

                          <td >
                            <?php echo $datapenduduk->pedukuhan ?>, RT <?php echo $datapenduduk->RT ?>, <?php echo $datapenduduk->kelurahan ?>, <?php echo $datapenduduk->kecamatan ?>.

                          </td>

                        </tr>



                      </tbody>

                    </table>
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                       <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Ya atau Tidak</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Ya atau Tidak</th>
                        </tr>
                  </tfoot>
                  <tbody>
                  <!-- 1 -->
                     
                    <tr>
                      <td><?php echo $no=1; ?></td>
                      <td>Apakah Anda merasa demam?</td>
                      <td><?php echo $cekdata->ksatu == 1 ? "Ya" : "Tidak" ?></td>

                  <!-- 2 -->
                    </tr>
                     
                    <tr>
                      <td><?php echo $no=2; ?></td>
                      <td>Apakah Anda mengalami sakit kepala/pusing?</td>
                      <td><?php echo $cekdata->kdua == 1 ? "Ya" : "Tidak" ?></td>

                    </tr>
                     

                  <!-- 3 -->
                     
                    <tr>
                      <td><?php echo $no=3;  ?></td>
                       <td>Apakah Anda batuk, pilek, dan nyeri tenggorokan?</td>
                       <td><?php echo $cekdata->ktiga == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     


                     
                    <tr>
                      <td><?php echo $no=4;  ?></td>                      
                      <td>Apakah Anda tidak bisa mencium bau atau merasakan makanan?</td>
                      <td><?php echo $cekdata->kempat == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     
                    <tr>
                      <td><?php echo $no=5;  ?></td>
                      <td>Apakah Anda merasa nyeri tulang atau kelelahan?</td>
                      <td><?php echo $cekdata->klima == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=6;  ?></td>
                      <td>Apakah nafsu makan Anda berkurang atau hilang?</td>
                      <td><?php echo $cekdata->kenam == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=7;  ?></td>
                      <td>Apakah Anda mual, muntah, dan nyeri perut?</td>
                      <td><?php echo $cekdata->ktujuh == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=8; ?></td>
                      <td>Apakah Anda diare?</td>
                      <td><?php echo $cekdata->kdelapan == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=9; ?></td>
                      <td>Apakah kulit dan mata Anda kemerahan?</td>
                      <td><?php echo $cekdata->ksembilan == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=10;  ?></td>
                      <td>Apakah terdapat perubahan warna pada jari-jari kaki Anda?</td>
                      <td><?php echo $cekdata->ksepuluh == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=11;  ?></td>
                      <td>Apakah Anda merasa sesak nafas dan nyeri dada?</td>
                      <td><?php echo $cekdata->ksebelas == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=12;  ?></td>
                      <td>Apakah Anda pernah kehilangan kesadaran (linglung) secara tiba-tiba?</td>
                      <td><?php echo $cekdata->kduabelas == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=13;  ?></td>
                      <td>Berapakah Tekanan Darah Anda?</td>
                      <td><?php echo $cekdata->ktigabelas?><?php echo "/"?><?php echo $cekdata->kempatbelas?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=14;  ?></td>
                      <td>Berapakah Denyut Nadi Anda?</td>
                      <td><?php echo $cekdata->klimabelas?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=15;  ?></td>
                      <td>Berapakah Suhu Tubuh Anda?</td>
                      <td><?php echo $cekdata->kenambelas?></td>
                    </tr>
                     <tr>
                      <td><?php echo $no=16;  ?></td>
                      <td>Berapakah Saturasi Oksigen  Anda?</td>
                      <td><?php echo $cekdata->ktujuhbelas?></td>
                    </tr>
                     

                  </tbody>
                </table>

              </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->