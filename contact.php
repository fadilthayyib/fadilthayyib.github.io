<?php

// if (isset($_POST['submit'])) {

//     // Get the form data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     // Validate the form data
//     if (empty($name) || empty($email) || empty($subject) || empty($message)) {
//         echo "Please fill in all fields.";
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Invalid email format.";
//     } else {

//         // Set the email parameters
//         $to = "fadilthayyib@gmail.com"; // Enter your email address here
//         $headers = "From: $name <$email>";
//         $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

//         // Send the email
//         if(mail($to, $body, $headers))
//         {
//             echo "Thank you for contacting us, $name. We will get back to you shortly.";
//         } else {
//             echo "An error occurred while sending your message. Please try again later.";
//         }
//     }
// }

// ?>

<?php
if(isset($_POST['submit'])){
    $to = "fadilthayyib@gmail.com"; // Replace this with your own email address
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: ".$name." <".$email.">\r\n";
    // $headers .= "Reply-To: ".$email."\r\n";
    // $headers .= "CC: cc@example.com\r\n"; // Add CC email address here if needed
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_body = "Name: ".$name."<br>";
    $email_body .= "Email: ".$email."<br>";
    $email_body .= "Subject: ".$subject."<br>";
    $email_body .= "Message: ".$message."<br>";

    if(mail($to,$email_body,$headers)){
        echo "<script>alert('Thank you for contacting us, we will get back to you soon!')</script>";
    } else{
        echo "<script>alert('Error sending email, please try again later.')</script>";
    }
    echo "<script>window.location.replace('contact.html')</script>";
}
?>
