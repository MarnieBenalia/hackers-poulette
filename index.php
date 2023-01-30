<?php require "src/php/header.php"; ?>

<?php
    if(isset($_POST["submit"])) {
        // Nettoyer les entrées de formulaire
        $_POST["email"] = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
        $_POST["firstname"] = trim(filter_var($_POST["firstname"], FILTER_SANITIZE_STRING));
        $_POST["lastname"] = trim(filter_var($_POST["lastname"], FILTER_SANITIZE_STRING));
    }
?>

<div class="txt-contact">
    <h2 class="c&s">Contact et support</h2>
    <h3 class="sendmess">Envoyez-nous un message</h3>
</div>

<article class="form-container">  
        <form method="POST">
            <div class="form-control">
                <input class="form-input"  type="text" name="first_name" placeholder="First name" required>
                <label class="asterix" for="text">*</label>
            </div>
            <div class="form-control">
                <input class="form-input"  type="text" name="last_name" placeholder="Last Name" required>
                <label class="asterix" for="text">*</label>
            </div>
                <div class="form-control">
                <input class="form-input"  type="email" name="email" placeholder="Email" required>
                <label class="asterix" for="text">*</label>
            </div>
                <div class="form-control">
                <input class="form-input" type="text"  name="phone_number" placeholder="Phone number"required>
                <label class="asterix" for="text"> *</label>
            </div>
                <div class="form-control">
                <textarea class="form-input" type="text" name="Message" placeholder="Message"></textarea>
            </div>
                <button class="checkout-submit-btn" type="submit">Send</button>
            
        </form> 
</article>

<?php require "src/php/footer.php"; ?>