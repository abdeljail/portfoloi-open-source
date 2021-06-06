<?php
$title = "home";
$description = "abdeljalaa ala ljaa jklaj kajkaak ak";
$content_btn = '<img src="../src/images/cancel.png" alt="image cancel">';
include_once "../back_end/include/template/start.php";
?>
<link rel="stylesheet" href="../src/style/files/login.css">
<?php
include_once "../back_end/include/template/body.php";
include_once "../back_end/include/template/header.php";
?>
<hr class="h-1">
<!-- start section  Thanks-->
<section class="Thanks">
    <div class="container">
        <div class="content">
            <h1>Thanks for taking the time to reach out. How can I help you today?</h1>
        </div>
    </div>
</section>
<!-- End section Thanks -->
<!--  Start  div form -->
<div class="login-form">
    <div class="container">
        <div class="content">
            <div class="form">
                <div class="f-left">
                    <div class="f-name">
                        <label for="f-name">Name</label>
                        <input autocomplete="off" type="text" name="f-name" id="f-name" data-fotm="df-in">
                    </div>
                    <div class="f-email">
                        <label for="f-email">Email</label>
                        <input autocomplete="off" type="email" name="f-email" id="f-email" data-fotm="df-in">
                    </div>
                    <div class="f-phone">
                        <label for="f-phone">Phone</label>
                        <input autocomplete="off" type="text" name="f-phone" id="f-phone" data-fotm="df-in" required>
                    </div>
                </div>
                <div class="f-right">
                    <div class="f-mes">
                        <label for="f-mes">Message</label>
                        <textarea autocomplete="off" name="f-mes" id="f-mes" data-fotm="df-in" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="reset">submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--  End  div form -->


    <?php
    include_once "../back_end/include/template/footer.php";
    echo '<script src="../src/js/global.js"></script>';
    include_once "../back_end/include/template/end.php";
    ?>