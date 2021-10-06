<div class="container">
    <div class="text-center my-3">
    <h2>Member Data</h2><hr>
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
                <th>Tindakan</th>
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
                <td>
                <button type="button" class="btn btn-warning"><a style="text-decoration:none;color:white;" href="index_admin.php?p=edit-peserta&id_siswa=<?php echo $isi['id_siswa'];?>">Edit</a></button>
                <button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" type="button" class="btn btn-danger"><a style="text-decoration:none;color:white;" href="proses/peserta-hapus.php?id_siswa=<?php echo $isi['id_siswa'];?> ">Delete</a></button>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    <a href="index_admin.php?p=input-peserta" class="btn btn-primary mb-4">Add Member</a>
    </div>