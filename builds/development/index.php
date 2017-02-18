<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("layouts.php"); ?>
<?php
if(isset($_POST['submit'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@viewfinder.photo";
    $email_subject = "Website Contact Request";

    $full_name = $_POST['full_name']; // required
    $email_from = $_POST['email']; // required
    $email_text = $_POST['email_text']; // required

    if(strlen(errors($email_from, $full_name, $email_text)) > 0) {
        $_SESSION["errors"] = errors($email_from, $full_name, $email_text);
    } else {
        $email_message = "The following individual reached out via the website:\n\n";

        $email_message .= "Full Name: ". clean_string($full_name)."\n";
        $email_message .= "Email: " . clean_string($email_from)."\n";
        $email_message .= "Message: " . clean_string($email_text)."\n";

        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();

        @mail($email_to, $email_subject, $email_message, $headers);
        $_SESSION["message"] = "Thank you for your message. We will get back to you soon.";
    }
}
?>
<?php //echo message(); ?>
<?php echo show_header("index"); ?>
<?php echo show_navigation("index"); ?>

<?php echo show_overlay(); ?>

    <div id="sliderwrapper">
        <?php echo show_slider(); ?>
    </div>

<?php echo show_footer(); ?>
