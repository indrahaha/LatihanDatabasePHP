<?php
    require_once "MySql_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h3>form input buku tamu</h3>
        </div>

        <div class="card-body">
            <form action="Proses_insert_buku_tamu.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="masukkan nama anda" required />

                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="masukkan email anda" required />
                    
                </div>
                <div class="form-group">
                    <textarea name="pesan" class="form-control" placeholder="masukkan pesan anda" required></textarea>
                    
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="kirim" />
                </div>
            </form>


            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                        <th>no</th><th>ID</th><th>nama</th><th>email</th><th>pesan/komentar</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu DESC";
                        $result = $conn->query($sql); 
                        
                            if($result->num_rows >0){
                                $no= 1;
                                while($row = $result->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?=$no;?></td>
                                        <td><?=$row['id_tamu'];?></td>
                                        <td><?=$row['nama_tamu'];?></td>
                                        <td><?=$row['email_tamu'];?></td>
                                        <td><?=$row['pesan_tamu'];?></td>
                                        <td align="center"> 
                                            <div class="btn-group">
                                                <a href="Proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm"
                                                    onclick="return confirm ('Anda akan menghapus record ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <a href="Halaman_edit_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                $no++;
                            }
                        }
                    ?>
                    
                </tbody>
            </table>

        </div>
    </div>
</div>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                pageLength: 5,
            });
        } );
    </script>

</body>
</html>