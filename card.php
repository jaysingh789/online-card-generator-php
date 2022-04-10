<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$profession=$_POST['profession'];
$edu=$_POST['edu'];
if($age<=0)
{
  ?>
<script type="text/javascript">
  alert("age must be > 0");
  window.open("./");
</script>

  <?php
}
}
else {
   header("location:./");
   exit();
}

?>



    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="master.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
          rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
          <link rel="stylesheet" href="card.css">
        <title>Your Card</title>
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

<div class="id-card-wrapper">
  <div class="id-card">
    <div class="profile-row">
      <div class="dp">
        <div class="dp-arc-outer"></div>
        <div class="dp-arc-inner"></div>
        <img src="https://via.placeholder.com/420x420">
      </div>
      <div class="desc">
        <h1><?=$fname." ".$lname?></h1>
            <p>Profession: <?=$profession?> </p>
            <p>Age: <?=$age?></p>
            <p>Education: <?=$edu?></p>
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
