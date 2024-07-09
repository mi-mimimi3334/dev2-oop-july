<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="card w-50 mx-auto text-center border-0 mt-3">
            <div class="card-header">
                <h1 class="text-primary">Login<i class="fa-solid fa-right-to-bracket"></i></h1>
            </div>
            <div class="card-body">
                <form action="../actions/login-action.php" method="post">
                    <div class="row mt-3 gx-1">
                        <div class="col-2">
                            <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="col">
                            <input type="text" name="username" id="username" class="form-control"> 
                        </div>
                    </div>
                    <div class="row mt-3 gx-1">
                        <div class="col-2">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="col">
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-primary w-100" name="btn_login">Login</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-danger w-25 mx-auto" name="btn_createaccount"><a href="registration.php" class="text-light" style="text-decoration:none">Create an Account</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>