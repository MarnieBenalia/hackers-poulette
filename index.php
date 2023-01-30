<?php require "src/php/header.php"; ?>

<?php
    if(isset($_POST["submit"])) {
        // Nettoyer les entrées de formulaire
        $_POST["email"] = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
        $_POST["firstname"] = trim(filter_var($_POST["firstname"], FILTER_SANITIZE_STRING));
        $_POST["lastname"] = trim(filter_var($_POST["lastname"], FILTER_SANITIZE_STRING));
    }
?>

<article class="form-container">  
        <form method="POST">
            <div class="form-control">
                <label for="text">*</label>
                <input class="form-input"  type="text" name="first_name" placeholder="First name" required>
                <label for="text">*</label>
                <input class="form-input"  type="text" name="last_name" placeholder="Last Name" required>
                <label for="text">*</label>
                <input class="form-input"  type="email" name="email" placeholder="Email" required>
                <label for="text">*</label>
                <input class="form-input" type="text"  name="phone_number" placeholder="Phone number" required>
                <textarea class="form-input" type="text" name="Message" placeholder="Message" required></textarea>

            </div>
            <button class="checkout-submit-btn" type="submit">Send</button>
        </form>
</article>

<?php require "src/php/footer.php"; ?>