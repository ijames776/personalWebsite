<?php
    include 'includes/header.php';
?>

<?php

if(isset($_POST['submit'])) {
    $to = "contact@ianajames.com";
    $subject = wordwrap($_POST['subject'], 70);
    $body = $_POST['body'];
    $header = $_POST['email'];

    mail($to, $subject, $body, $header);
}

?>


<div class="basic-container" style="align-items: Center;">
    <div class="text-card">
        <h1>Contact Me</h1>
        <form role="form" action="contact.php" method="post" id="contact-form">
            <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" style="width: 100%;">
            </div>
            <div class="form-group">
                <label for="subject" class="sr-only">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter your subject" style="width: 100%;">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" id="body" rows="15" cols="500" style="width:100%;"></textarea>
            </div>
            <input type="submit" name="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Submit">
        </form>
    </div>
</div>