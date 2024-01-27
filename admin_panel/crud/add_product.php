<?php
include 'conexiune.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if (strpos($img, '/diana/images/') !== 0) {
        $img = '/diana/images/' . $img;
    }

    $sql = "INSERT INTO products (name, img, price, details) VALUES ('$name', '$img', '$price', '$description')";
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
    <title>Add Product</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <a href="/diana/admin_panel/index.php" class="btn btn-primary float-right mb-3">Back</a>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="img">Product Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" placeholder="Product Image URL" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Product Price" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Product Description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Add Product</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
