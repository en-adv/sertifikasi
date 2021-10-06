
<div class="container">
    <div class="text-center my-5">
    <h2>Pendaftar</h2><hr>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
        include"koneksi.php";
        $query="SELECT*FROM siswa";
        $peserta = mysqli_query($db,$query);
        ?>
        <tbody>
            <?php $nomor=1; while($isi=mysqli_fetch_array($peserta)){?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $isi['nama_siswa'];?></td>
                <td><?php echo $isi['alamat'];?></td>
                <td><?php echo $isi['jenis_kelamin'];?></td>
                <td><?php echo $isi['agama'];?></td>
                <td><?php echo $isi['sekolah_asal'];?></td>
                <td><?php echo $isi['status'];?></td>
            </tr>
            <?php  } ?>
        </tbody>
        
    </table>
    <a class="btn btn-outline-danger my-4 my-sm-0" href="cetak.php">Cetak Data</a>
    </div>
    <!-- <p id="tombol-tambah-container"> -->
    