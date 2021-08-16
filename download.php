<html>
<title>Aplikasi Download</title>
<body>
<div class="card-body">
<div class="table-responsive">
              <table border="2">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Nama File</th>
                    <th>Deskripsi</th>
                  </tr>
                </thead>
                <tbody>
<?php
include 'php/koneksi.php';
$query = mysqli_query($conn,"SELECT * FROM upload ORDER BY id DESC");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);
$r = mysqli_fetch_array($query);
if(mysqli_num_rows($query)>0){ 
    $no = 1;
    foreach ($query as $r ) {
?>     
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td> <a href="simpan.php?file=<?php echo $r['nama_file']?>"onClick="return confirm('Unduh Data?')"/><button type="button" class="btn btn-info btn-flat">Unduh FIle</button></a></td>
                    <td><?php echo $r['nama_file'];?></td>
                    <td><?php echo $r['deskripsi'];?></td>
                    </tr>
                  
                </tbody>
                <?php $no++; } ?>
    <?php } ?>                   
    </table>
            </div>
</div>
</body>
</html>