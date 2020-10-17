<?php
declare(strict_types=1);
error_reporting(1);
ini_set('display_errors', 'On');
set_error_handler('var_dump');

/* Get the form field, remove html tags and whitespaces  */
$name = strip_tags(trim($_POST['name']));
$name = str_replace(array('\r', '\n'), array(' ', ' '), $name);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$message = strip_tags(trim($_POST['message']));

/* Check the data */
if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location:http://localhost/omnifood/index.php?success=-1#form');
    exit;
} else {

    /* Set the recipient email address.In other words this is the email address that we want to send the email to this address. */
    $recipient = 'parsa.sedigh78@gmail.com';

    /* Set the email subject: */
    $subject = "New contact from Omnifood by $name";

    /* Build the actual email content: */
    $email_content = "Name: $name\n";
    $email_content .= "email: $email\n";
    $email_content .= "message: $message\n";

    /* Build the email headers: (Remember: email headers are not visible to users and they always are a part of email) */
    $email_headers = "From: $name <$email>";

    /* Send the email */
    mail($recipient, $subject, $email_content, $email_headers);

    /* After sending the email, redirect to index.php page with a success code. */
    /* The #form in header string is the part on our website which has an id of form. */
    header('Location:http://localhost/omnifood/index.php?success=1#form');
    exit;

}






