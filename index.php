<?php require "src/php/header.php"; ?>

<body>

<?php
    if(isset($_POST["submit"])) {
        // Nettoyer les entrées de formulaire
        $_POST["email"] = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
        $_POST["firstname"] = trim(filter_var($_POST["firstname"], FILTER_SANITIZE_STRING));
        $_POST["lastname"] = trim(filter_var($_POST["lastname"], FILTER_SANITIZE_STRING));
        $_POST["address"] = trim(filter_var($_POST["address"], FILTER_SANITIZE_STRING));
        $_POST["city"] = trim(filter_var($_POST["city"], FILTER_SANITIZE_STRING));
        $_POST["country"] = trim(filter_var($_POST["country"], FILTER_SANITIZE_STRING));
    }
?>

<article class="form-container">  

        <form method="POST" action="checkout.php">
            <div class="form-control">
                <input class="form-input" id="firstname" type="text" name="first_name" placeholder="First name" required>
                <input class="form-input" id="lastname" type="text" name="last_name" placeholder="Last Name" required>
                <input class="form-input" id="email" type="email" name="email" placeholder="Email" required>
                <input class="form-input" id="address" type="text" name="address" placeholder="Adress" required>
                <input type="text" class="form-input" id="city" name="city" placeholder="City" required >

                <select class="form-input" name="country" id="country" required>
                    <?php                    
                    include "src/php/country.php";
                    foreach ($countries as $country) {
                        echo '<option value="' . $country . '">' . $country . '</option>';
                    }?>
                </select>
            </div>
            <button class="checkout-submit-btn" type="submit">Send</button>
        </form>
</article>

</body>