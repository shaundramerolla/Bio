<?php
if($_POST["submit"]) {
    $recipient="smerolla@bu.edu";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody);
} ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shaundra Merolla, Contact Me</title>
        <link href="css/WebStyle.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <header>Shaundra Merolla</header>
        <h2>Contact Me</h2>
        <div id="contactForm">
        <form name="contactMe"
        action="Contact.php"
        method="POST">
        <p>
            <label for="name">Your Name:</label>
        </p> <input type="text" id="name" name="name" required>
        <p>
            <label for="email">Your Email:</label>
        </p> <input type="text" id="email" name="email" required>
        <p>
            <label for="subject">Subject:</label>
        </p> <input type="text" id="subject" name="subject" required>
        <p>
            <label for="message">Message:</label>
        </p> <textarea name="message">Your Message Here</textarea>
        <p>
            <button type="submit" id="submit">Submit</button>
        </p>
        
        </form>
        </div>
        <footer>
          <nav>
              <table>
                <tr>
                  <td><a href="AboutMe.html">About Me</a></td>
                  <td><a href="Technical.html">Experience</a></td>
                  <td><a href="Sadie.html">Sadie</a></td>
                  <td><a href="Cooking.html">Cooking</a></td>
                  <td><a href="Travels.html">Travels</a></td>
                  <td><a href="Music.html">Music</a></td>
                  <td><a href="Contact.php">Contact Me</a></td>
                </tr>
              </table>
            </nav>
        </footer>
        <script src="FormValidation.js"></script>
    </body>
</html>