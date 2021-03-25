<?php
    require_once "MySql_connection.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // perintah sql
    $sql = "INSERT INTO tb_tamu VALUES ('','$nama','$email','$pesan')";

    // eksekusi perintah
    if($conn->query($sql) === true){
        // header("location:Halaman_buku_tamu.php");

        echo "<script>
                alert('berhasil tersimpan');
                location.assign('Halaman_buku_tamu.php');

              </script>";
    }else {
        echo "<script>
            alert('gagal tersimpan');
            location.assign('Halaman_buku_tamu.php');

             </script>";
    }



   
?>