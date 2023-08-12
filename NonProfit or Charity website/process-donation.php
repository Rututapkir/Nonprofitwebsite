<?php
// process-donation.php

if (isset($_POST['donate'])) {
    $amount = sanitize_text_field($_POST['amount']);
    $email = sanitize_email($_POST['email']);
    
    // Perform validation and processing, e.g., save the donation to the database
    
    // Send email confirmation
    $to = $email;
    $subject = 'Donation Confirmation';
    $message = 'Thank you for your donation of $' . $amount . '! We appreciate your support.';
    $headers = 'From: Your Charity Name <noreply@example.com>' . "\r\n";
    wp_mail($to, $subject, $message, $headers);
    
    // Redirect to a thank-you page or display a confirmation message
    // header('Location: thank-you-page.php');
    // exit;
}
?>
