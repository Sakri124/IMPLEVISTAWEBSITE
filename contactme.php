<?php   
    require("./mailing/mailfunction.php");

    // Get form data
    $name = $_POST["name"] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST["email"] ?? '';
    $message = $_POST["message"] ?? '';

    // Create email body
    $body = "<ul>
                <li><strong>Name:</strong> $name</li>
                <li><strong>Phone:</strong> $phone</li>
                <li><strong>Email:</strong> $email</li>
                <li><strong>Message:</strong> $message</li>
            </ul>";

    // Set receiver email (your own Gmail ID)
    $receiver_email = "nagayashasvr2001@gmail.com";

    // Call mail function (defined in mailfunction.php)
    $status = mailfunction($receiver_email, "Company", $body);

    // Output response
    if ($status)
        echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
    else
        echo '<center><h1>Error sending message! Please try again.</h1></center>';    
?>
