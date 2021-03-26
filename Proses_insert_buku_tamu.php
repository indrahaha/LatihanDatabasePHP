<?php
    require_once "MySql_connection.php";
    // start session
    session_start();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // perintah sql
    $sql = "INSERT INTO tb_tamu VALUES ('','$nama','$email','$pesan')";

    // eksekusi perintah
    if($conn->query($sql) === true){
        $_SESSION['upload_status'] = 1;
        $_SESSION['upload_message'] = '<strong>Berhasil !!</strong> data berhasil di tambahkan';
        header("location:Halaman_buku_tamu.php");
        // header("location:Halaman_buku_tamu.php");

        // echo "<script>
        //         alert('berhasil tersimpan');
        //         location.assign('Halaman_buku_tamu.php');

            // </script>";
    }else {
        $_SESSION['upload_status'] = 0;
        $_SESSION['upload_message'] = '<strong>Gagal !!</strong> data gagal di tambahkan'.$conn->error;
            header("location:Halaman_buku_tamu.php");
        // echo "<script>
        //     alert('gagal tersimpan');
        //     location.assign('Halaman_buku_tamu.php');

        //     </script>";
    }




?>