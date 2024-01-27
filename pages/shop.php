<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <meta name="turbo-visit-contro  l" content="reload">
    <title>Ajur Lux</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/diana/css/style.css">
    <link rel="text/html" href="https://fonts.google.com/specimen/Roboto">
    <link rel="text/html" href="https://fonts.google.com/specimen/Oswald">
    <link rel="stylesheet" href="/diana/css/style2.css">
    <link rel="stylesheet" href="/diana/css/header.css">
    <link rel="stylesheet" href="/diana/css/footer.css">
    <link rel="stylesheet" href="/diana/css/media.css">
</head>
<body>
<?php include_once("particles/header.php") ?>
    
    
            <!--Hero sections starts-->
            <section class="hero" id="home">
                <div class="content">
                    <h3>Shop</h3>
        
                    <p>Home/ Shop</p>
                </div>
            </section>

             <!--Shop sections starts-->
    <section class="shop">
        <div class="header-shop">
            <input type="text" placeholder="Default sorting" name="" required>
            <img src="images/arrow-sorting.svg" alt="">
            <p>Showing 1-8 of 18 results</p>
                <div class="pages">
                    <div class="page1">
                        <p>1</p>
                    </div>
                    <div class="block-page">
                        <p>2</p>
                    </div>
                    <div class="block-page">
                        <p>3</p>
                    </div>
                    <div class="block-page">
                        <img src="images/icon-page.svg" alt="">
                    </div>
                   
                    </div>
            </div> 
            <hr>
            <?php
                include 'conexiune.php';

                $sql = "SELECT * FROM `products`";
                $result = $conexiune->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="box-container-service">';

                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="box">';
                        echo '<img src="' . $row['img'] . '" alt="service">';
                        echo '<div class="content">';
                        echo '<p class="content-header">' . $row['details'] . '</p>';
                        echo '<h3>' . $row['name'] . '</h3>';
                        echo '<p>' . $row['price'] . '</p>';
                        echo '<a href="#" class="button">Read More</a>';
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '</div>';
                } else {
                    echo "0 results";
                }

                $conexiune->close();
            ?>

    </section>

    <!--Buy sections starts-->
        <section class="buy">
            <div class="content">
                <p>Summer Collections</p>
                <h3>Blinds & Curtains</h3>
                <p class="reduction">Up to <span>30% </span>Off</p>
                <a href="#" class="button">Buy Now</a>
            </div>
        </section>


            <!--Footer sections starts-->
            <?php include_once("particles/footer.php") ?>
</body>
</html>