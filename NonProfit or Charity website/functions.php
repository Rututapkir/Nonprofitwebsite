function handle_donation_submission() {
    $amount = sanitize_text_field($_POST['amount']);
    $email = sanitize_email($_POST['email']);

    // Process validation and saving to database

    // Send confirmation email
    $to = $email;
    $subject = 'Donation Confirmation';
    $message = 'Thank you for your donation of $' . $amount . '! We appreciate your support.';
    $headers = 'From: Your Charity Name <noreply@example.com>' . "\r\n";
    wp_mail($to, $subject, $message, $headers);

    // Redirect to thank-you page
    wp_redirect(home_url('/thank-you'));
    exit;
}

