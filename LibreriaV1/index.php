<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="resources/paginaMaestra/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Cantata+One&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="resources/paginaMaestra/css/sb-admin-2.min.css" rel="stylesheet">
  <!--My style-->
  <link rel="stylesheet" href="resources/paginaMaestra/css/style.css">

</head>

<body >

  <div class=" container col-md-12">
    <div class="row d-flex justify-content-center mt-4 col-md-12">
      <div class="card-group mt-4 col-md-10">
        <div class="presentacion card">
          
        </div>
        <div class="card">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" style="font-weight:bold;font-family: 'Cantata One', serif;font-size:25px;">INGRESO AL SISTEMA</h1>
                  </div>
                  <form class="user" action="Controladores/acceso.php" method="POST">
                    <div class="form-group mt-4">
                      <input type="user" class="mb-4 form-control form-control-user" id="txt_user" name='txt_user' placeholder="Usuario" required>
                    
                
                      <input type="password" class="mb-4 form-control form-control-user" id="txt_pass" name='txt_pass' placeholder="Password" required>
                    <input type="submit" name="btnlogin" value="Login" class="btn btn-primary btn-user btn-block">
                    
                    </div>
                    </a>
                    <hr>
                    <?php
                    session_start();
                    if(isset($_SESSION["mensaje"])){
                        echo 'Mensaje: ' . $_SESSION["mensaje"] . '<br/>';
                    }
                    ?>
                  </form>
                  <hr>
                  <div class="text-center">
                  <p><i class="fa fa-facebook-official" aria-hidden="true"></i><i class="ml-2 fa fa-twitter-square" aria-hidden="true"></i><i class="ml-2 fa fa-instagram" aria-hidden="true"></i></p>
                    <a class="small" href="forgot-password.html" style="font-weight:bold;font-size:14px;text-decoration:none;">Recordar Contrasena</a>
                  </div>
                  </div>
                
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="resources/paginaMaestra/vendor/jquery/jquery.min.js"></script>
  <script src="resources/paginaMaestra/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="resources/paginaMaestra/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="resources/paginaMaestra/js/sb-admin-2.min.js"></script>

</body>
</html>
