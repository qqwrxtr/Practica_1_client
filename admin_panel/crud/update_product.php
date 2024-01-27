<?php
include 'conexiune.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE id = $id";
    $result = $conexiune->query($sql);
    $product = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $details = $_POST['details'];

    $sql = "UPDATE `products` SET name='$name', img='$img', price='$price', details='$details' WHERE id=$id";
    $conexiune->query($sql);
    $conexiune->close();

    header("Location: /diana/admin_panel/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
    <title>Update Product</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/diana/admin_panel/index.php" class="btn btn-primary float-right mt-2">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?= $product['id']; ?>">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $product['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="img">Product Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" value="<?= $product['img']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?= $product['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="details">Product Details</label>
                        <textarea class="form-control" id="details" name="details"><?= $product['details']; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Update Product</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
