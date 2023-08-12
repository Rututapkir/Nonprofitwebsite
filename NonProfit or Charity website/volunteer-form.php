<?php
/*
Template Name: Volunteer Signup Form
*/

get_header();

if (isset($_POST['signup'])) {
    // Process the volunteer signup form here
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    
    // Perform validation and processing, e.g., saving signup to database
    
    // Show a thank you message
    echo '<p>Thank you, ' . $name . ', for signing up as a volunteer!</p>';
} else {
    // Display the volunteer signup form
    ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <form method="post">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                        
                        <input type="submit" name="signup" value="Sign Up">
                    </form>
                </div>
            </article>
        </main>
    </div>

    <?php
}

get_footer();
?>
