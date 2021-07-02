</head>

        <!-- Begin Page Content -->
        <div class="container-fluid">
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



                      </tbody>

                    </table>

                     Alamat : <?php echo$datapenduduk->alamat?>
<br>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Data Semua Penduduk</a>.</p>
          <!-- Data ODP -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk ODP</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                     <?php if ($cekdata->ksatu==1) {?>
                    <tr>
                      <td><?php echo $no=1; ?></td>
                      <td>Apakah Anda merasa demam??</td>
                      <td><?php echo $cekdata->ksatu == 1 ? "Ya" : "Tidak" ?></td>

                  <!-- 2 -->
                    </tr>
                      <?php } ?>

                     <?php if ($cekdata->kdua==1) {?>
                    <tr>
                      <td><?php echo $no=2; ?></td>
                      <td>Apakah Anda mengalami sakit kepala/pusing?</td>
                      <td><?php echo $cekdata->kdua == 1 ? "Ya" : "Tidak" ?></td>

                    </tr>
                      <?php } ?>

                  <!-- 3 -->
                     <?php if ($cekdata->ktiga==1) {?>
                    <tr>
                      <td><?php echo $no=3;  ?></td>
                       <td>Apakah Anda batuk, pilek, dan nyeri tenggorokan?</td>
                       <td><?php echo $cekdata->ktiga == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->kempat==1) {?>
                    <tr>
                      <td><?php echo $no=4;  ?></td>                      
                      <td>Apakah Anda tidak bisa mencium bau atau merasakan makanan?</td>
                      <td><?php echo $cekdata->kempat == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->klima==1) {?>
                    <tr>
                      <td><?php echo $no=5;  ?></td>
                      <td>Apakah Anda merasa nyeri tulang atau kelelahan?</td>
                      <td><?php echo $cekdata->klima == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->kenam==1) {?>
                    <tr>
                      <td><?php echo $no=6;  ?></td>
                      <td>Apakah nafsu makan Anda berkurang atau hilang?</td>
                      <td><?php echo $cekdata->kenam == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                     <?php } ?>


                     <?php if ($cekdata->ktujuh==1) {?>
                    <tr>
                      <td><?php echo $no=7;  ?></td>
                      <td>Apakah Anda mual, muntah, dan nyeri perut?</td>
                      <td><?php echo $cekdata->ktujuh == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->kdelapan==1) {?>
                    <tr>
                      <td><?php echo $no=8; ?></td>
                      <td>Apakah Anda diare?</td>
                      <td><?php echo $cekdata->kdelapan == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->ksembilan==1) {?>
                    <tr>
                      <td><?php echo $no=9; ?></td>
                      <td>Apakah kulit dan mata Anda kemerahan?</td>
                      <td><?php echo $cekdata->ksembilan == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->ksepuluh==1) {?>
                    <tr>
                      <td><?php echo $no=10;  ?></td>
                      <td>Apakah terdapat perubahan warna pada jari-jari kaki Anda?</td>
                      <td><?php echo $cekdata->ksepuluh == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->ksebelas==1) {?>
                    <tr>
                      <td><?php echo $no=11;  ?></td>
                      <td>Apakah Anda merasa sesak nafas dan nyeri dada?</td>
                      <td><?php echo $cekdata->ksebelas == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->kduabelas==1) {?>
                    <tr>
                      <td><?php echo $no=12;  ?></td>
                      <td>Apakah Anda pernah kehilangan kesadaran (linglung) secara tiba-tiba?</td>
                      <td><?php echo $cekdata->kduabelas == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                     <?php if ($cekdata->ktigabelas !=0) {?>
                    <tr>
                      <td><?php echo $no=13;  ?></td>
                      <td>Berapakah Tekanan Darah Anda?</td>
                      <td><?php echo $cekdata->ktigabelas?><?php echo "/"?><?php echo $cekdata->kempatbelas?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->kempatbelas !=0 ) {?>
                    <tr>
                      <td><?php echo $no=14;  ?></td>
                      <td>Berapakah Denyut Nadi Anda?</td>
                      <td><?php echo $cekdata->kelimabelas?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->keenambelas!=0) {?>
                    <tr>
                      <td><?php echo $no=15;  ?></td>
                      <td>Berapakah Suhu Tubuh Anda?</td>
                      <td><?php echo $cekdata->keenambelas?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->ketujuhbelas!=0) {?>
                    <tr>
                      <td><?php echo $no=16;  ?></td>
                      <td>Berapakah Saturasi Oksigen  Anda?</td>
                      <td><?php echo $cekdata->ketujuhbelas?></td>
                    </tr>
                      <?php } ?>


<!--                       <?php if ($cekdata->kedelapanbelas!=0) {?>
                    <tr>
                      <td><?php echo $no=17;  ?></td>
                      <td>Berapakah Saturasi Oksigen  Anda?</td>
                      <td><?php echo $cekdata->kedelapanbelas?></td>
                    </tr>
                      <?php } ?> -->


<!--                       <?php if ($cekdata->keduaempat) {?>
                    <tr>
                      <td><?php echo $no=18;  ?></td>
                      <td>Gejala Lainnya?</td>
                      <td><?php echo $cekdata->keduaempat ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->kedelapanbelas || $cekdata->kedualima ) {?>
                    <tr>
                      <td><?php echo $no=19;  ?></td>
                      <td>Berapakah Tekanan Darah Anda?</td>
                      <td><?php echo $cekdata->kedelapanbelas, '/', $cekdata->kedualima ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->kesembilanbelas) {?>
                    <tr>
                      <td><?php echo $no=20;  ?></td>
                      <td>Berapakah Denyut Nadi Anda?</td>
                      <td><?php echo $cekdata->kesembilanbelas ?></td>
                    </tr>
                      <?php } ?>

                      <?php if ($cekdata->keduaenam==1) {?>
                    <tr>
                      <td><?php echo $no=21;  ?></td>
                      <td>Apakah suhu anda kurang dari 37 C?</td>
                      <td><?php echo $cekdata->keduaenam == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->keduapuluh==1) {?>
                    <tr>
                      <td><?php echo $no=22;  ?></td>
                      <td>Apakah suhu anda diantara 37 - 38 C?</td>
                      <td><?php echo $cekdata->keduapuluh == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->keduasatu==1) {?>
                    <tr>
                      <td><?php echo $no=23;  ?></td>
                      <td>Apakah suhu anda diatas 38 C?</td>
                      <td><?php echo $cekdata->keduasatu == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->keduatiga==1) {?>
                    <tr>
                      <td><?php echo $no=24;  ?></td>
                      <td>Apakah saturasi oksigen anda dibawah 90?</td>
                      <td><?php echo $cekdata->keduatiga == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->keduadua==1) {?>
                    <tr>
                      <td><?php echo $no=25;  ?></td>
                      <td>Apakah saturasi oksigen anda diantara 90-95?</td>
                      <td><?php echo $cekdata->keduadua == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>


                      <?php if ($cekdata->keduatujuh==1) {?>
                    <tr>
                      <td><?php echo $no=26;  ?></td>
                      <td>Apakah saturasi oksigen anda lebih dari 95?</td>
                      <td><?php echo $cekdata->keduatujuh == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
                      <?php } ?>
 -->



                  </tbody>
                </table>
<!--                 <form action="<?php echo base_url("admin/gantiscore"),'/',$datapenduduk->nik?>" method="post" enctype="multipart/form-data">
                  <input type="text" name="id" value="<?php echo $cekdata->id ?>">
                  <input type="nik" name="nik" value="<?php echo $cekdata->nik ?>">
                  <input type="nik" name="link" value="<?php echo $cekdata->link ?>">
                  <input type="nik" name="ksatu" value="<?php echo $cekdata->ksatu ?>">
                  <input type="nik" name="kdua" value="<?php echo $cekdata->kdua ?>">
                  <input type="nik" name="ktiga" value="<?php echo $cekdata->ktiga ?>">
                  <input type="nik" name="kempat" value="<?php echo $cekdata->kempat ?>">
                  <input type="nik" name="klima" value="<?php echo $cekdata->klima ?>">
                  <input type="nik" name="kenam" value="<?php echo $cekdata->kenam ?>">
                  <input type="nik" name="ktujuh" value="<?php echo $cekdata->ktujuh ?>">
                  <input type="nik" name="kdelapan" value="<?php echo $cekdata->kdelapan ?>">
                  <input type="nik" name="ksembilan" value="<?php echo $cekdata->ksembilan ?>">
                  <input type="nik" name="ksepuluh" value="<?php echo $cekdata->ksepuluh ?>">
                  <input type="nik" name="ksebelas" value="<?php echo $cekdata->ksebelas ?>">
                  <input type="nik" name="kduabelas" value="<?php echo $cekdata->kduabelas ?>">
                  <input type="text" name="ktigabelas" value="<?php echo $cekdata->ktigabelas ?>">
                  <input type="text" name="kempatbelas" value="<?php echo $cekdata->kempatbelas ?>">
                  <input type="text" name="tanggal" value="<?php echo $cekdata->tanggal ?>">
                  <input type="text" name="time" value="<?php echo $cekdata->time ?>">
                  <br>
                  Ganti Score
                  <input type="text" name="score">
                  <button type="submit" >Ganti</button>
                </form> -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->