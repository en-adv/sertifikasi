<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">Sertfikasi VSGA</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Info</a>
                    </li>
                    
                </ul>
               
            </div>
      </div>
    </nav>

    <!-- Login -->

    <div class="container">
        <div class="card fat">
		    <div class="card-body m-5">
			    <h1 class="card-title text-center ">Login</h1>
			        <form method="post" action="cek_login.php">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="user" required autofocus placeholder="Masukan username">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="pass" required data-eye placeholder="Masukan password">

						</div>

						<div class="form-group">
							<div class="custom-checkbox custom-control">
								<input type="checkbox" name="remember" id="remember" class="custom-control-input">
								<label for="remember" class="custom-control-label">Remember Me</label>
								</div>
								</div>

							<div class="form-group text-center">
								<button type="submit" name="submit" class="btn btn-primary btn-block">
									Login
								</button>
                                 <h4><a class="btn btn-dark btn-block m-1" href="register.php">Register</a></h4>	
						</div>
                                
				    </form>
			</div>
        <div class="back">
                        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>