<?php
    require_once "MySql_connection.php";
    session_start();
    // $username = $_GET['username'];
    // $email = $_GET['email'];
    // $password = $_GET['password'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
    <title>Login</title>
    <!-- <style>
    body{
        background-image: url(a.jpg);
        background-size: cover;
    }
    .container{
        opacity: 0.5;
    }
    </style> -->
</head>
<body>
    <div class="container mt-2 bg-warning">
        <div class="card bg-info">
            <div class="card-header bg-dark text-light">
                <h3 align="center">Login </h3>
            </div>
        </div>
        <div class="card-body">
            <!-- <form action="proses_login.php" method="POST"> -->
            <?php if(isset($_SESSION['proses_login'])){
                    if ($_SESSION['proses_login'] == 0) {
            ?>
                        <div class= "<?= $_SESSION['alert_message']; ?>" role="alert">
                            <?= $_SESSION['proses_message']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php }
                    } unset($_SESSION['proses_login'])?>

                </form>    
                    <form action="proses_login.php" method="POST">
                        <div class="form-group">
                                <label>Name / Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username or E-mail" required />

                            </div>
                            <div class="form-group">
                                <label>Password</label> 
                                <input type="password" name="pass" class="form-control" placeholder="masukkan password" required></input>
                                
                            </div>
                            <div class="form-group">
                                <input class="btn btn-sm btn-primary btn-block" type="submit" name="proses_login" value="Login" />
                        </div>
                        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                    </form>
        </div>
    </div>
    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<!-- <script>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</script> -->
<script>
     $('.alert').delay(500).fadeOut(500);
        // $(document).ready( function () {
        //     $('.alert').delay(500).fadeOut(2000);
        // } );
</script>

</html>
