<!DOCTYPE html>
<html>
<head>

  

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->
</head>
<body>
<script>
function myFunction() {
  var content = document.documentElement.innerHTML;
  download(content, "<?php echo 'Data Pelapor tanggal 03.07.2021-',date('d.m.y')?>", "xls")

}
function download(content, fileName, fileType) {
  var link = document.getElementById("donwload-link");
  var file = new Blob([content], {type: fileType});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}
</script>
<iframe id="txtArea1" style="display:none"></iframe>
<a href ="#" id="donwload-link" onClick="myFunction()"><button> EXPORT </button></a>
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
</script>
<table id="headerTable" class="display nowrap" style="width:100%">
<tr>
<td colspan="7"> DATA LAPORAN</td></tr>
 <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMOR HP</th>
                        <th>LOKASI ISOLASI</th>
                        <th>DOMISILI</th>
                        <th>TANGGAL SWAB</th>
                        <th>TANGGAL MULAI ISOLASI</th>
                        <th>TANGGAL PENDAFTARAN</th>
                        <th>STATUS</th>
                        <th>GEJALA</th>
                        </tr>
                  </thead>
                  <tbody>
                <?php $no=1;?>
              <?php foreach ($datasemua as $datatku) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $datatku['nama'] ?></td>
                      <td><?php echo $datatku['nomorhp']?></td>
                      <td><?php echo $datatku['tempat_isolasi'] ?></td>
                      <td>
                        <?php echo $datatku['pedukuhan'] ?>, RT <?php echo $datatku['RT'] ?>, <?php echo $datatku['kelurahan'] ?>, <?php echo $datatku['kecamatan'] ?>.
                      </td>
                      <td><?php echo $datatku['created_at'] ?></td>
                      <td><?php echo $datatku['status'] ?></td>
                      <td>
                        <?php if ($datatku['score']==3) {?>
                              Bergejala berat
                            <?php } ?>

                            <?php if ($datatku['score']==2) {?>
                              Bergejala sedang
                            <?php } ?>

                            <?php if ($datatku['score']==1) {?>
                              Bergejala ringan
                            <?php } ?>

                            <?php if ($datatku['score']==0) {?>
                             OTG
                            <?php } ?>
                      </td>
                    </tr>
                    <?php }?>

</table>
</body>
</html>