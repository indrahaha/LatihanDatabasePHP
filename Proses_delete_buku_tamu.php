<?php
    require_once "MySql_connection.php";

   $id= $_GET['idTamu'];


    // perintah sql
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

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