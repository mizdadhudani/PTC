</head>
<!-- <script>
function myFunction() {
  var content = document.documentElement.innerHTML;
  download(content, "<?php echo 'Data',$datapenduduk->nama, date('d.m.y')?>", "xls")

}
function download(content, fileName, fileType) {
  var link = document.getElementById("donwload-link");
  var file = new Blob([content], {type: fileType});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}
</script> -->
<iframe id="txtArea1" style="display:none"></iframe>
<!-- <a href ="#" id="donwload-link" onClick="myFunction()"><button> EXPORT </button></a>
<script type="text/javascript">
<script type="text/javascript"> 
    $(document).ready(function () {
        $('#table-datatables').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });

</script>
<script type="text/javascript">
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('headerTable'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
</script> -->
<style>
table, td, th {  
  border: 1px solid #000000;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 50%;
  align-items: center;
}

th, td {
  padding: 3px;
  font-family: helvetica;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
h3{
  font-family: helvetica;
}
h4{
  font-family: helvetica;
}
.btn-danger {
    color: #fff;
    background-color: #e74a3b;
    border-color: #e74a3b;
    width: 9%;
    height: 5%;

</style>
<center>
     <button type="button" class="btn btn-danger" style="">Download</button>
</center>
<div class="specific"><br><br>
  <h3><center>Monitoring Harian Bantul Tangguh</center></h3>
  <h4><center>Tanggal <?php echo date("d-m-Y", strtotime($cekdata->tanggal)) ?></center></h4>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered center" id="dataTable" width="100%" cellspacing="0">                  
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
<!--                       <tr>
                          <td>Mulai Isolasi</td>
                          <td class="text-primary"><?php echo date("d-m-Y", strtotime($datapenduduk->mulai_isolasi)) ?></td>
                      </tr> -->
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
                          </td>
                      </tr>
                      <tr>
                          <td>Tempat Isolasi</td>
                          <td class="text-primary"><?php echo $datapenduduk->tempat_isolasi?></td>
                      </tr>
                     <tr>
                    <td>Gejala</td>                                
                       <td>
                        <?php if($cekdata->score==0) { ?>
                          Tidak Bergejala
                        <?php } ?>
                        <?php if($cekdata->score==1) { ?>
                          Bergejala Ringan
                        <?php } ?>
                        <?php if($cekdata->score==2) { ?>
                          Bergejala Sedang
                        <?php } ?>
                        <?php if($cekdata->score==3) { ?>
                          Bergejala Berat
                        <?php } ?>
                      </td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                  </div>
            </div>
              <div>
                <table class="center">
                  <thead>
                        <tr>
                       <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Ya atau Tidak</th>
                        </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $no=1; ?></td>
                      <td>Apakah Anda merasa demam?</td>
                      <td><?php echo $cekdata->ksatu == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>                     
                    <tr>
                      <td><?php echo $no=2; ?></td>
                      <td>Apakah Anda mengalami sakit kepala/pusing?</td>
                      <td><?php echo $cekdata->kdua == 1 ? "Ya" : "Tidak" ?></td>
                    </tr>
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
                </table><br><br>
              </div>
        </div>
      </div>
    </div>
    
  <script>
    document.querySelector('button').addEventListener('click', function() {
        html2canvas(document.querySelector('.specific'), {
            onrendered: function(canvas) {
                // document.body.appendChild(canvas);
              return Canvas2Image.saveAsPNG(canvas);
            }
        });
    });
  </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js'></script>
<script src='https://superal.github.io/canvas2image/canvas2image.js'></script>
<style>
   .specific{
      background-color: #fff;
    }
</style>