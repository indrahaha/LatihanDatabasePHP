<?php
    require_once "MySql_connection.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
  
    // perintah sql
    $sql = "UPDATE tb_tamu SET nama_tamu='$nama',email_tamu='$email',pesan_tamu='$pesan' WHERE id_tamu='$id'";

    // eksekusi perintah
    if($conn->query($sql) === true){
       header("location:Halaman_buku_tamu.php");
        echo "alert('berhasil terupdate')";
    //     -- echo "<script>
    //     --         alert('berhasil terupdate');
    //     --         location.assign('Halaman_buku_tamu.php');

    //     --       </script>";
    }else {
    //     echo "<script>
            " alert('gagal terupdate')";
    //         location.assign('Halaman_buku_tamu.php');

    //          </script>";
    }



   
?>