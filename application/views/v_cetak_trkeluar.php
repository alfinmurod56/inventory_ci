<style>
#customers {
  font-family: Verdana, Geneva, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size:10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4bbbce;
  color: white;
}
</style>

<?php  
    if (@$export['excel']) {
        header("Content-Disposition: attachment; filename=Laporan Barang Keluar.xls");
        header("Content-Type: application/vnd.ms-excel");
    }
?>

<div class="col-lg-12">
    <div class="card m-b-30">
        <div class="card-body">
            <p>PT Jazeera Inti Sukses <br>Cetak pada Tgl : <?php echo date('Y-m-d')?></p>
            <table id="customers" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;font-size:12px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Tr Penjualan</th>
                    <th>Tgl Tr Penjualan</th>
                    <th>Ket</th>
                    <th>Input Oleh</th>
                    <th>Jumlah</th>
                </tr>
                </thead>

                <tbody>
                <?php $no = 1; foreach ($get_penjualan as $val) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $val->id_tr_k;?></td>
                        <td><?php echo $val->tgl_tr_k; ?></td>
                        <td><?php echo $val->ket_tr_k; ?></td>
                        <td><?php echo $val->username;?></td>
                        <td><?php echo $val->jumlah_beli;?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            
        </div>
    </div>
</div> <!-- end col -->
