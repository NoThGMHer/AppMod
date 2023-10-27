<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "imnotme909@email.com"; // Replace with your email address
    $subject = "New Moderator Application";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $discordUsername = $_POST["discordUsername"];
    $moderatingExperience = $_POST["moderatingExperience"];
    $reasonToModerate = $_POST["reasonToModerate"];
    $contribution = $_POST["contribution"];
    $aboutYourself = $_POST["aboutYourself"];
    $handleArgument = $_POST["handleArgument"];
    $handleRaid = $_POST["handleRaid"];
    $inappropriateContent = $_POST["inappropriateContent"];
    $verification = $_POST["verification"];
    $additionalInfo = $_POST["additionalInfo"];

    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Discord Username: $discordUsername\n";
    $message .= "Moderating Experience: $moderatingExperience\n";
    $message .= "Reason to Moderate: $reasonToModerate\n";
    $message .= "Contribution: $contribution\n";
    $message .= "About Yourself: $aboutYourself\n";
    $message .= "Handle Argument: $handleArgument\n";
    $message .= "Handle Raid: $handleRaid\n";
    $message .= "Inappropriate Content: $inappropriateContent\n";
    $message .= "Verification: $verification\n";
    $message .= "Additional Info: $additionalInfo\n";

    mail($to, $subject, $message);

    // Redirect to a thank you page
    header("Location: thank_you.html");
}
?>
