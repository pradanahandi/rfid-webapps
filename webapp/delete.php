<?php
// koneksi database
    include 'conn.php';
    // menangkap data id yang di kirim dari url
    $id = $_GET['idkaryawan'];
    // menghapus data dari database
    mysqli_query($config, "DELETE FROM tbl_karyawan where idkaryawan='$id'");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php"); 
?>