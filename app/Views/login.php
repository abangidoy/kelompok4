<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 col-5">
    <div class="card">
        <div class="card-header bg-danger text-white">
            Masukan Username dan Password dengan benar
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <?php if(session()->getFlashdata('error')){?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('error') ?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" name="karyawan_username" class="form-control" value="<?php echo session()->getFlashdata('karyawan_username')?>" id="inputUsername" placeholder="Masukan Username....">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="karyawan_password" class="form-control" id="inputPassword" placeholder="Masukan Password.....">
                </div>
                <div class="d-grid gap-5">
                    <input type="submit" name="login" class="btn btn-danger" value="LOGIN" />
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>