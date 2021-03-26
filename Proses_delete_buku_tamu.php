<?php
    require_once "MySql_connection.php";
    // start session
    session_start();

    $id= $_GET['idTamu'];


    // perintah sql
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    // eksekusi perintah
    if($conn->query($sql) === true){
        $_SESSION['delete_status'] = 1;
        $_SESSION['delete_message'] = '<strong>Berhasil !!</strong> data berhasil di hapus';
        header("location:Halaman_buku_tamu.php");
        // header("location:Halaman_buku_tamu.php");

        // echo "<script>
        //         alert('berhasil tersimpan');
        //         location.assign('Halaman_buku_tamu.php');

            // </script>";
    }else {
        $_SESSION['delete_status'] = 0;
        $_SESSION['delete_message'] = '<strong>Berhasil !!</strong> data berhasil di hapus';
            header("location:Halaman_buku_tamu.php");
        // echo "<script>
        //     alert('gagal tersimpan');
        //     location.assign('Halaman_buku_tamu.php');

        //     </script>";
    }




?>