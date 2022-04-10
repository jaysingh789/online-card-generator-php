<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
    <title></title>
  </head>
  <body>
 <div class="container">
<div class="navbar">
<img src="logo.svg" alt="">
<span>Card Generator</span>
</div>
<div class="option-container">
<div>Personal Card</div>
<div style="cursor:not-allowed;">Business Card</div>
<div style="cursor:not-allowed;">Thanks Card</div>
</div>
<div class="sticky-div">

<div class="content">
<div class="">
<h3>Welcome to Online Card Generator</h3>

  <form class="form-container" action="card.php" method="post">

      <div class="input-container">
        <div class="data-set">
        <label style="" for="">Enter your Personal details below.</label>
        </div>
       <div class="data-set">
       <label for="">First Name</label>
       <input type="text" name="fname" value="">
       </div>
       <div class="data-set">
       <label for="">Last Name</label>
       <input type="text" required name="lname" value="">
       </div>
       <div class="data-set">
       <label for="">Your Age</label>
       <input type="number" required name="age" value="">
       </div>

       <div class="data-set">
       <label for="">Your Profession</label>
       <input type="text" required name="profession" value="">
       </div>
       <div class="data-set">
       <label for="">Your Education</label>
       <input type="text" required name="edu" value="">
       </div>


       <div class="data-set">
         <button type="submit" name="submit">Generate</button>
       </div>


      </div>
    </form>
    </div>

<div class="second-grid">
<div class="grid-content">
<span class="title">Need assistance?</span>
<div class="grid-data">
<span class="icon"><span class="material-icons-outlined">
help_outline
</span></span>
<span class="text">For Online card Generator technical assistance ,support, or general account inquiries Call 1-877-768-2265 or search our FAQs</span>
</div>
</div>
<div class="grid-content">
<span class="title">Feedback</span>
<div class="grid-data">
<span class="icon">  <span class="material-icons-outlined">
  rate_review
  </span></span>
<span class="text">We want to hear from you! Please share your feedback about Online card Generator</span>
</div>
</div>
</div>

</div>
<div class="footer">
<div class="footer-links">
  <a href="#">Customer Service</a>
  <a href="#">Contact Us</a>
  <a href="#">Site Map</a>
  <a href="#">Privacy and Security</a>
  <a href="#">Privacy Policy</a>
  <a href="#">Terms of Use</a>
</div>
<div class="copyright">
Copyright 2022 Santander Online card Generator. All rights reserved.
</div>
</div>

</div>
 </div>
  </body>
</html>
