<?php

require "../classes/Sales.php";
$sale_obj = new Sales;
$all_sales = $sale_obj->getAllsales();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashbord</title>
</head>
<body>
    <nav class="nav-bar bg-info">
        
            <a href="dashbord.php" class="navbar-brand text-dark">
                <i class="fa-solid fa-house dashbord-navivon"></i>
            </a>
            <div class="navbar-center text-center">
                <div class="h3">Welcome</div>
            </div>
            <div >
                <form action="../actions/logout-action.php" method="post" class="form-inline">
                    <button type="submit" class="btn btn-danger text-end"><a href="../views/login.php" class="text-light" style="text-decoration:none">Log out</a></button>
                </form>
            </div>
        
    </nav>
    <main class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="row">
                <div class="col-10">
                    <h2>Product List</h2>
                </div>
                <div class="col">
                        <button type="button" class="btn btn-light text-info " data-bs-toggle="modal" data-bs-target="#addproduct-modal">
                        <i class="fa-solid fa-plus dashbord-navivon"></i>
                        </button>
                </div>
            </div>
            
            <?php include "addproduct-modal.php"?>

            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        while($product = $all_sales->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?=$product['id']?></td>
                            <td><?=$product['product_name']?></td>
                            <td><?=$product['price']?></td>
                            <td><?=$product['quantity']?></td>
                            <td>
                                <?php
                                    //if($_SESSION['id']  == $product['id']){
                                ?>
                                <a href="edit-minimart.php?id=<?=$product['id']?>" type="button" class="btn btn-warning btn-sm" name="btn_edit">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                
                                <a href="delete-action.php?id=<?=$product['id']?>" type="button" class="btn btn-danger btn-sm" name="btn_delete">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                                
                            </td>
                            
                            
                            <td>
                                <button type="button" class="btn btn-success btn-sm"data-bs-toggle = "modal" data-bs-target="#register-modal">
                                    <i class="fa-solid fa-cash-register"></i>
                                </button>
                            </td>
                        </tr>
                            <?php
                                    }
                            ?>
                    <?php
                        //}
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php
        if(isset($_POST['btn_edit'])){
            $id           = $_GET['id'];
            $product_name = $_POST['productname'];
            $price        = $_POST['price'];
            $quantity     = $_POST['quantity'];
            header("location: edit-minimart.php");
            
        }
    
        if(isset($_POST['btn_delete'])){
            $id           = $_GET['id'];
            $product_name = $_POST['productname'];
            $price        = $_POST['price'];
            $quantity     = $_POST['quantity'];
            header("location: delete-action.php");
            
        }
    
    ?>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>