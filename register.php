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
    <link rel="stylesheet" href="style.css">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">User</a>
                            <a class="dropdown-item" href="#">Admin</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
      </div>
    </nav>

    <!-- Login -->

    <div class="container">
    <div class="card">
        <div class="container mx-5">
            <div class="title m-5 text-center">
             <h2>Sign up</h2>
            </div>
            <div class="form m-5">  
                <div class="form-input">
                <form action="proses/user-input.php" method="POST" enctype="multipart/form-data">
                <table class="abl">
                    <tr>
                        <td><label class="label" for="nama">Nama</label></td>
                         <td class="equal"> : </td>
                        <td><input class="input" type="text" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td><label class="label" for="username">Username</label></td>
                         <td class="equal"> : </td>
                        <td><input class="input" type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="password">Password</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="roles">Roles</label></td>
                         <td class="equal"> : </td>
                         <td>
                            <select class="form-select" id="roles" placeholder="roles" name='roles'>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="form-group m-5 text-center">
								<button type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
									Simpan
								</button>
                                 <h4><a class="btn btn-dark btn-block m-1" href="login.php">Kembali</a></h4>	
						</div>
                
            
        </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>