</head>

        <!-- Begin Page Content -->
        <div class="container-fluid">
                   <table class="table">

                      <thead class=" text-primary">

                        <th>NIK</th>

                        <th>NAMA</th>

                        <th>Jenis Kelamin</th>

                        <th>NOMOR HP</th>

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

                            <?php echo $datapenduduk->penduduk?>

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
                       <th>NO</th>
                        <th>Pertanyaan</th>
                        </tr>
                  </thead>
                  <tfoot>
                        <tr>
                       <th>NO</th>
                        <th>PERTANYAAN</th>
                        </tr>
                  </tfoot>
                  <tbody>
               






                     <?php if ($cekdata->ksatu==1) {?>
                    <tr>
                      <td><?php echo $no=1; ?></td>
                      <td>Apakah anda sedang menderita batuk-batuk?</td>

                    </tr>
                  <?php } ?>

                     <?php if ($cekdata->kdua==1) {?>
                    <tr>
                      <td><?php echo $no=2; ?></td>
                      <td>Apakah anda sedang mengalami gejala seperti meriang?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->ktiga==1) {?>
                    <tr>
                      <td><?php echo $no=3;  ?></td>
                       <td>Apakah anda sedang menderita diare?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->kempat==1) {?>
                    <tr>
                      <td><?php echo $no=4;  ?></td>
                      
    <td>Apakah anda sedang menderita sakit tenggorokan?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->klima==1) {?>
                    <tr>
                      <td><?php echo $no=5;  ?></td>
                      <td>Apakah anda sedang menderita nyeri di seluruh bagian tubuh?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->kenam==1) {?>
                    <tr>
                      <td><?php echo $no=6;  ?></td>
                      <td>Apakah anda sedang menderita sakit atau nyeri kepala?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->ktujuh==1) {?>
                    <tr>
                      <td><?php echo $no=7;  ?></td>
                      <td>Apakah anda sedang mengalami demam atau suhu tubuh di atas 38 C?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->kdelapan==1) {?>
                    <tr>
                      <td><?php echo $no=8; ?></td>
                      <td>Apakah anda sedang mengalami kesulitan dalam bernafas atau sesak nafas?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->ksembilan==1) {?>
                    <tr>
                      <td><?php echo $no=9; ?></td>
                      <td>Apakah badan anda sekarang terasa lemas dan lesu?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->ksepuluh==1) {?>
                    <tr>
                      <td><?php echo $no=10;  ?></td>
                      <td>Apakah dalam 14 hari terakhir anda pernah berkunjung ke daerah di mana Corona tersebar? (contoh: Jakarta)</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->ksebelas==1) {?>
                    <tr>
                      <td><?php echo $no=11;  ?></td>
                      <td>Apakah dalam 14 hari terakhir anda pernah melakukan kontak langsung dengan pasien positif Corona?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->kduabelas==1) {?>
                    <tr>
                      <td><?php echo $no=12;  ?></td>
                      <td>Apakah anda memiliki riwayat penyakit jantung/diabetes atau penyakit kronis lainnya?</td>

                    </tr>
                  <?php } ?>
                     <?php if ($cekdata->ktigabelas>0 || $cekdata->ktigabelas>0) {?>
                    <tr>
                      <td><?php echo $no=13;  ?></td>
                      <td>Apakah terdapat anggota keluarga lain yang mengalami gejala demam dan/atau sesak nafas?</td>

                    </tr>
                  <?php } ?>
                      <?php if ($cekdata->kempatbelas>0 || $cekdata->kempatbelas>0) {?>
                    <tr>
                      <td><?php echo $no=14;  ?></td>
                      <td>Apakah ada orang yang mempunyai riwayat kontak dengan anda dalam 14 hari terakhir?</td>
                    </tr>
                  <?php } ?>




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