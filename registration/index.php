<?php>
  if(isset($_POST['submit'])) {
    $mailto = "tannisthanandy143@gmail.com";  //My email address
    //getting customer data
    $name = $_POST['name']; //getting customer name
    $fromEmail = $_POST['email']; //getting customer email
    $phone = $_POST['tel']; //getting customer Phome number
    $subject = $_POST['subject']; //getting subject line from client
    $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
    
    //Email body I will receive
    $message = "Cleint Name: " . $name . "\n"
    . "Phone Number: " . $phone . "\n\n"
    . "Client Message: " . "\n" . $_POST['message'];
    
    //Message for client confirmation
    $message2 = "Dear" . $name . "\n"
    . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
    . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
    . "Regards," . "\n" . "- HMA WebDesign";
    
    //Email headers
    $headers = "From: " . $fromEmail; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This will receive client
    
    //PHP mailer function
    
     $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
     $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
    
     //Checking if Mails sent successfully
    
     if ($result1 && $result2) {
       $success = "Your Message was sent Successfully!";
     } else {
       $failed = "Sorry! Message was not sent, Try again Later.";
     }
    
   }
?>   



<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
      <img src="halo bg 2.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new event is a <br> new adventure</span>
          <span class="text-2">Let battles begin!</span>
        </div>
      </div>
      <div class="back">
       <img class="backImg" src="picture.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Register</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" id="name" placeholder="Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" id="email" placeholder=" Email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-id-card"></i>
                <input type="text" id="usn" placeholder="USN" required>
              </div>
              <div class="input-box">
                <i class="fas fa-phone-alt"></i>
                <input type="text" id="phone" placeholder="Phone number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-pen"></i>
                <input type="text" placeholder="Branch" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user-graduate"></i>
                <input type="number" placeholder="Semester" required>
              </div>
              <div class="select-menu">
                <div class="select-btn">
                    <i class="fas fa-envelope"></i>
                    <span class="sBtn-text">Select events</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
        
                <ul class="options">
                    <li class="option">
                        <i class="fas fa-bug"></i>
                        <span class="option-text">D-CODE</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-car"></i>
                        <span class="option-text">RUGGED RACE</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-futbol"></i>
                        <span class="option-text">ROBO-SOCCER</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-file"></i>
                        <span class="option-text">PROJECT SYMPOSIUM</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-flag-checkered"></i>
                        <span class="option-text">CROSS-ROADS</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-envelope"></i>
                        <span class="option-text">SITUATION 2.0</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-envelope"></i>
                        <span class="option-text">ARDUINO CLASH</span>
                    </li>
                    <li class="option">
                        <i class="fas fa-envelope"></i>
                        <span class="option-text">PAPER PRESENTATION</span>
                    </li>
                </ul>
            </div>
        
              
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Register your team !<label for="flip">Register now</label></div>
            </div>
            <script src="script.js"></script>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Team</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Team member 1" required>
              </div>
              <div class="input-box">
                <i class="fas fa-id-card"></i>
                <input type="text" placeholder="USN" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Team member 2" required>
              </div>
              <div class="input-box">
                <i class="fas fa-id-card"></i>
                <input type="text" placeholder="USN" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Team member 3" required>
              </div>
              <div class="input-box">
                <i class="fas fa-id-card"></i>
                <input type="text" placeholder="USN" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Team member 4" required>
              </div>
              <div class="input-box">
                <i class="fas fa-id-card"></i>
                <input type="text" placeholder="USN" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Register yourself ! <label for="flip"> Register now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
 </body>
</html>
