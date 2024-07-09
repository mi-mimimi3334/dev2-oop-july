<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <table style="width: 100%;">
        <tr>
            <td style="width: 33.33%; text-align: left;">
                <i class="fa-solid fa-house text-dark"></i>
            </td>
            <td style="width: 33.33%; text-align: center;">
                <h2>Welcome, Demo</h2>
            </td>
            <td style="width: 33.33%; text-align: right;">
                <i class="fa-solid fa-user-xmark text-danger"></i>
            </td>
        </tr>
    </table>
    <div class="container-fluid">
        <div>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%; text-align: left;">
                        <h1>Product List</h1>
                    </td>
                    <td style="width: 50%; text-align: right;">
                        <i class="fa-solid fa-plus text-primary"></i>
                    </td>
                </tr>
            </table>
        </div>
        <main class="row justify-content-center mt-3">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user = $all_users->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                } else {
                                ?>
                                    <i class="fa-solid fa-user"></i>
                                <?php
                                }
                                ?>
                </td>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['product_name']; ?></td>
                    <td><?= $user['price']; ?></td>
                    <td><?= $user['quantity']; ?></td>
                <td>
                    <!-- 他の人が他人のアカウントを消せないようにするため -->
                    <!-- $_SESSIONは共有の保管庫 -->
                    <!-- 今のループのuser idが一致した時に以下の内容が実行される -->
                    <?php
                    if ($user['id'] == $_SESSION['id']) {
                    ?>
                        <!-- 解決->id以外を使用することはなさそう -->
                        <a href="edit-product.php" class="btn btn-outline-warning">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <!-- 飛び先はどこになるか -->
                        <a href="delete-user.php" class="btn btn-outline-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
        </main>
    </div>
</body>
</html>







