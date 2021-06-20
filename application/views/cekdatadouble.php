<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
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
                      <td>
                          <a class="btn btn-primary" href="<?php echo base_url("admin/deletedata"),'/',$datatku['nik']?>">Hapus</a>
                      </td>
                    </tr>
              <?php }?> 
</table>
</body>
</html>