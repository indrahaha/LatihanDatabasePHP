<?php
    require_once "MySql_connection.php";
    // start session
    session_start();

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // perintah sql
    $sql = "UPDATE tb_tamu SET nama_tamu='$nama',email_tamu='$email',pesan_tamu='$pesan' WHERE id_tamu='$id'";

    // eksekusi perintah
    if($conn->query($sql) === true){
        $_SESSION['update_status'] = 1;
        $_SESSION['update_message'] = '<strong>Berhasil !!</strong> data berhasil di update';
        header("location:Halaman_buku_tamu.php");
        // echo "alert('berhasil terupdate')";
    //     -- echo "<script>
    //     --         alert('berhasil terupdate');
    //     --         location.assign('Halaman_buku_tamu.php');

    //     --       </script>";
    }else {
            $_SESSION['update_status'] = 0;
            $_SESSION['update_message'] = '<strong>Berhasil !!</strong> data berhasil di update';
            header("location:Halaman_buku_tamu.php");
    //     echo "<script>
            // " alert('gagal terupdate')";
    //         location.assign('Halaman_buku_tamu.php');

    //          </script>";
    }
?>