          Cek Data Mengunakan alamat
          <form action="<?php echo base_url('admin/cekdata')?>" method="POST">
          	<div>
            <label > Masukan alamat</label>
            <input type="text" name="alamat" placeholder="pelemsewu">
            </div>
            <div>
            <label > Masukan rt</label>
            <input type="text" name="rt" placeholder="3">
            </div>
            <div>
            <label>kosongkan jika melihat semua RT</label>
            </div>
            <button type="submit">submit</button>
          </form>

          Cek Data Mengunakan tanggal
          <form action="<?php echo base_url('admin/printhariantanggal')?>" method="POST">
          	<div>
            <label > Masukan alamat</label>
            <input type="text" name="tanggal" placeholder="YYYY-MM-DD">
            </div>
            <button type="submit">submit</button>
          </form>