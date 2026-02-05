<?php 

// Check for header injections
function has_header_injection($str) {
    return preg_match("/[\r\n]/", $str);
}

if (isset($_POST['contact_submit'])) {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $msg   = $_POST['message'];

    //Check to see if $name or $email have header injections
    if (has_header_injection($name) || has_header_injection($email) || has_header_injection($phone)) {
        die(); //If true kills the script
    }

    if (!$name || !$email || !$phone || !$msg) {

        echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button btn-block">Go back and try again</a>';
        exit;

    }

    // Add the recipient email to variable
    $to = "info@digilinkers.com";

    // Create a subject
    $subject = "$name sent you a message via your contact form at " . $company . " website";

    //Construct the message
    $message = "<h2>Query Received</h2>
                <h4>Name:</h4><p>" . $name ."</p>
                <h4>Email:</h4><p>" . $email ."</p>
                <h4>Phone:</h4><p>" . $phone ."</p>
                <h4>Message:</h4><p>" . $msg ."</p>";

    $message = wordwrap($message, 72);

    // Set the mail headers into a variable
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
    $headers .= "X-Priority: 1" . "\r\n";
    $headers .= "X-MSMail-Priority: High" . "\r\n\r\n";

    mail($to, $subject, $message, $headers);


?>

<!-- Show success message after mail has been sent -->
<div class="alert alert-primary col-lg-12"  id="mail-msg-alert" role="alert">
<h5 style="text-align: center;">Thanks for contacting <?php echo $company; ?> Batteries!</h5>
<p style="text-align: center;">Please allow 24 hours for a response.</p>
<button type="button" class="btn btn-primary"><a id="mail-msg" href="index.php">Go to Home Page</a></button>
</div>

<?php } ?> 