<?php
include'../koneksi.php';

$id_siswa=$_POST['id_siswa'];
$nama_siswa=$_POST['nama_siswa'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$sekolah_asal=$_POST['sekolah_asal'];
$status=$_POST['status'];
if(isset($_POST['submit'])){
        extract($_POST);
        $sql="UPDATE siswa SET 
                nama_siswa ='$nama_siswa',
                alamat ='$alamat',
                jenis_kelamin = '$jenis_kelamin',
                agama = '$agama',
                sekolah_asal = '$sekolah_asal',
                status='$status' 
                WHERE id_siswa='$id_siswa'";
        $query=mysqli_query($db,$sql);
        if (!$query) {
                echo"<script>alert('Data gagal diedit');
                document.location.href='../index_admin.php?p=peserta2';
                </script>";
        }else{
                echo"<script>alert('Data berhasil diedit');
                document.location.href='../index_admin.php?p=peserta2';
                </script>";
        }
// header("location:../index.php?p=peserta");
}
?>