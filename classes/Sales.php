<?php
    require_once "Database.php";

    class Sales extends Database
    {
        public function register($request)
        {
            $first_name = $request['firstname'];
            $last_name  = $request['lastname'];
            $username   = $request['username'];
            $password   = password_hash($request['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (first_name, last_name, username, password) 
                    VALUES ('$first_name', '$last_name', '$username', '$password')";

            if($this->conn->query($sql)){
                header('location: ../views/login.php');
                exit;
            }else{
                die("ERROR in creating the user: " . $this->conn->error);
            }
        }

        public function login($request)
        {
            $username = $request['username'];
            $password = $request['password'];

            $sql = "SELECT * FROM users WHERE username = '$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows ==1){
                $user = $result->fetch_assoc();

                if(password_verify($password, $user['password'])){
                    
                    session_start();
                    $_SESSION['username']  = $user['username'];

                    header("location: ../views/dashbord.php");
                    exit;
                }else{
                    die("PASSWORD IS INCORRECT");
                }
            }else{
                die("USERNAME NOT FOUND");
            }
        }

        public function getAllSales()
        {
            $sql = "SELECT id, product_name, price, quantity FROM products";

            if($result = $this->conn->query($sql)){
                return $result;
                session_start();
                $_SESSION['id']           = $result['id'];
                $_SESSION['product_name'] = $result['product_name'];
                $_SESSION['price']        = $result['price'];
                $_SESSION['quantity']     = $result['quantity'];
            }else{
                die("ERROR in retrieving all the users: " . $this->conn->error);
            }
        }

        public function getSales($id)
        {
            $sql = "SELECT * FROM products WHERE id = '$id'";

            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            }else{
                die("ERROR in retrieving the user: " . $this->conn->error);
            }
        }

        public function addProducts($request)
        {
            $product_name = $request['productname'];
            $price        = $request['price'];
            $quantity     = $request['quantity'];

            $sql = "INSERT INTO products(product_name, price, quantity)
                    VALUES('$product_name', '$price', '$quantity')";

            if($this->conn->query($sql))
            {
                header("location: ../views/dashbord.php");
                exit;
            }else{
                die("ERROR in creating product" . $this->conn->error);
            }
        }

        public function update($request, $id)
        {
            $product_name = $request['product_name'];
            $price        = $request['price'];
            $quantity     = $request['quantity'];
            
            $sql = "UPDATE products
                    SET product_name = '$product_name',
                        price        = '$price',
                        quantity     = '$quantity'
                    WHERE id         = '$id'";

            if($this->conn->query($sql)){
                header("location: ../views/dashbord.php");
                exit;
            }else{
                die("ERROR in updating the user details: " . $this->conn->error);
            }
            
        }

        // function updateProduct($id, $product_name, $description, $price, $section_id)
        // {
        //     $conn = connection();
        //     $sql = "UPDATE products 
        //         SET `name` = '$name',
        //             `description` = '$description',
        //             `price` = '$price',
        //             `section_id` = '$section_id'
        //         WHERE id = '$id'";

        //     if($conn->query($sql)){
        //         header('location: index.php');
        //         exit;
        //     }else{
        //         die("ERROR in updateing the product: ". $conn->error);
        //     }
        // }

        public function delete()
        {
            session_start();
            $id = $_GET['id'];

            $sql = "DELETE FROM products WHERE id = '$id'";

            if($this->conn->query($sql)){
                $this->logout();
            }else{
                die("ERROR in deleting your account: " . $this->conn->error);
            }
        }
        
        public function logout()
        {
            session_start();
            session_unset();
            session_destroy();

            header("location: ../views/login.php");
            exit;
        }
    
    
    }
?>