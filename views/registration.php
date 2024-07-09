<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="card w-50 mx-auto mt-3 border-0">
            <div class="card-header text-center">
                <h1 class="text-danger"><i class="fa-solid fa-address-card"></i>Registration</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register-action.php" method="post">
                    <div class="row gx-2">
                        <div class="col">
                            <label for="firstname" class="form-label">First Name</label>
                        </div>
                        <div class="col">
                            <label for="lastname" class="form-label">Last Name</label>
                        </div>
                    </div>
                    <div class="row gx-2">
                        <div class="col">
                            <input type="text" name="firstname" id="firstname" class="form-control" required>
                        </div>
                        <div class="col">
                            <input type="text" name="lastname" id="lastname" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-danger w-100" name="btn_register">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>