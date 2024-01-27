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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/diana/css/style.css">
    <link rel="text/html" href="https://fonts.google.com/specimen/Roboto">
    <link rel="text/html" href="https://fonts.google.com/specimen/Oswald">
    <link rel="stylesheet" href="/diana/css/style2.css">
    <link rel="stylesheet" href="/diana/css/header.css">
    <link rel="stylesheet" href="/diana/css/footer.css">
    <link rel="stylesheet" href="/diana/css/media.css">
</head>

<body>

    <!--Header sections starts-->

    <?php include_once("particles/header.php") ?>

    <!--Appointment sections starts-->
    <section class="appointment header-overlap">


        <div class="login-appointment">

            <form class="contact-form" id="appointment">
                <div class="book-text">
                    <div class="title">
                        <h4>Book an Appointment</h4>
                        <img class="symbol" src="/diana/images/symbol.svg" alt="">
                    </div>
                </div>
                <div class="fname">
                    <input type="text" placeholder="First Name" name="" required>
                </div>
                <div class="email">
                    <input type="email" placeholder="Email Address" name="" required>
                </div>
                <div class="phone">
                    <input type="text" placeholder="Phone" name="" required>
                </div>
                <div class="subject">
                    <input type="text" placeholder="Subject" name="" required>
                </div>
                <div class="message">
                    <textarea name="" id="" cols="30" rows="5">Message</textarea>
                </div>
                <div class="submit">
                    <div id="appointment-form-message" class="form-message"></div>
                    <button type="submit" id="appointment-form-button" class="book-button" href="#">Book Now</button>

                </div>
            </form>

            <div class="content-appointment">
                <p>Ajur Lux will help you to your dreams come true</p>
                <h4 class="title">Quality Blinds & Curtains
                    From Local Family-Run Business</h4>

            </div>

        </div>

    </section>


    <!--Footer sections starts-->
    <?php include_once("particles/footer.php") ?>

    <script src="appointment-form.js"></script>
</body>

</html>