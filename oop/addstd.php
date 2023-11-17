<?php

    include_once 'classes/register.php';
    $re = new Register();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $register = $re->addRegister($_POST, $_FILES);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8"><br>
                <div class="card shadow">
                    <?php
                        if (isset($register))
                        {
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                 <strong><?=$register?></strong>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                        }
                    ?>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Add Student</h3>
                            </div>
                            <div class ="col-md-6">
                                <a href="index.php" class="btn btn-info float-right">Show Student Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control">
                            <label for="">Phone</label>
                            <input type="number" name="phone" placeholder="Enter phone number" class="form-control">
                            <label for="">Photo</label>
                            <input type="file" name="photo" class="form-control">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control"></textarea><br>
                            <input type="submit" value="Register" class="btn btn-success form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>