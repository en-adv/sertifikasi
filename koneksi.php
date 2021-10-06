<?php
    $host ="localhost";//host database
    $username = "root";     
    $password = "";
    $db_name = "db_pendaftaran";

    $db = mysqli_connect($host, $username, $password, $db_name);

    if ($db->connect_error){
        die("Koneksi ke database GAGAL!!");
    }

?>