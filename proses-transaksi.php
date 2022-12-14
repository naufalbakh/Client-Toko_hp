<?php
error_reporting(1);
include "client-transaksi.php";

if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_transaksi" => $_POST['id_transaksi'],
        "id_pelanggan" => $_POST['id_pelanggan'],
        "tanggal" => $_POST['tanggal'],
        "jumlah" => $_POST['jumlah'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_transaksi($data);
        header('location:transaksi.php');
    // if ($abc == true) {
    //     die("<script> 
    //     alert ('Data Telah ditambahkan Sebelumnya !!!!');
    //     window.location.href = ('form-transaksi.php');
    //     </script>" . mysqli_error($con));
    // } else {

    //     $abc->tambah_transaksi($data);
    //     header('location:transaksi.php');
    // }
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_transaksi" => $_POST['id_transaksi'],
        "id_pelanggan" => $_POST['id_pelanggan'],
        "tanggal" => $_POST['tanggal'],
        "jumlah" => $_POST['jumlah'],
        "aksi" => $_POST['aksi']
    );
    $abc->ubah_transaksi($data);
    header('location:transaksi.php');
} else if ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_transaksi" => $_GET['id_transaksi'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_transaksi($data);
    header('location:transaksi.php');
}
unset($abc, $data);
