<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // User's email address
    $userEmail = $_POST["email"];

    // Subject and message for the user
    $subjectUser = "Thank You for Subscribing!";
    $messageUser = "Dear user, \n\nThank you for subscribing to our service!";

    // Send thank you message to the user
    mail($userEmail, $subjectUser, $messageUser);

    // Email address for notification
    $notificationEmail = "igiliegbepatrick@gmail.com";

    // Subject and message for the notification
    $subjectNotification = "New Subscriber";
    $messageNotification = "A new user subscribed with the email address: $userEmail";

    // Send notification to specified email address
    mail($notificationEmail, $subjectNotification, $messageNotification);

    echo "Thank you message sent to $userEmail. Notification sent to $notificationEmail.";
} else {
    echo "Invalid request.";
}
?>
