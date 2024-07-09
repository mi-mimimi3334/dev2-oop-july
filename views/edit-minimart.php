<?php
    session_start();

    require "../classes/Sales.php";

    $product_obj = new Sales;
    $id           = $_GET['id'];
    $product = $product_obj->getSales($id);

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
    
    <title>Edit</title>
</head>
<body>
    

            <div class="card">
                <div class="card-header bg-warning text-light">
                    <h1 class="card-title"><i class="fa-solid fa-pen-to-square"></i>Edit Product</h1>

                </div>
                <form action="../actions/edit-action.php?id=<?= $product['id']?>" method="post">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" name="product_name" id="product_name" class="form-control" value="<?=$product['product_name']?>">
                            </div>
                        </div>
                        <div class="row gx-2 mt-3">
                            <div class="col">
                                <label for="price" class="form-label">Price</label>
                            </div>
                            <div class="col">
                                <label for="quantity" class="form-label">Quantity</label>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="col input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" id="price" class="form-control" value="<?=$product['price']?>">
                            </div>
                            <div class="col">
                                <input type="number" name="quantity" id="quantity" class="form-control" value="<?=$product['quantity']?>">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-warning text-dark w-100" name="btn_edit">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>