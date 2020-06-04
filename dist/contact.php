<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $mailTo = 'mail@alexanderrans.com';

    $headers = 'From: '. $mailTo . "\r\n" .
        'Reply-To: '. $emailFrom . "\r\n" .
        'X-Sender: ' . $mailTo . "\r\n" .
        'Date: ' . date('r') .
        'X-Mailer: PHP/' . phpversion() .
        "MIME-Version: 1.0";

    $txt = "
You have received an email from $name.
\r\nReply to $emailFrom.
\r\n$message";

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

