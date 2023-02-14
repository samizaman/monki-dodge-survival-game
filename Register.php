<!DOCTYPE html>
<html lang="en">

<head>
   <title>Monki Dodge / Register</title>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="./CSS/stylesheet.css">
   <link rel="icon" type="image/png" href="./Images/gorilla.png">
</head>

<body>
   <?php include 'Navbar.php' ?>
   <div class="register-container">
      <div class="title">REGISTRATION</div>
      <div class="content">
         <form action="#" id="register-form">
            <div class="user-details">
               <div class="input-box">
                  <span class="details" >Username</span>
                  <input type="text" id="register-username" name="username" required>
               </div>
               <div class="input-box">
                  <span class="details">Birthday</span>
                  <input class="birthdate" type="date" placeholder="YYYY-MM-DD" id="register-birthday" name="birthday"/>
               </div>
               <div class="input-box">
                  <span class="details">Email</span>
                  <input type="text" id="register-email" name="email" name="email" required>
               </div>
               <div class="input-box">
                  <span class="details">Phone Number</span>
                  <input type="tel" id="register-phone" name="phone" required>
               </div>
               <div class="input-box">
                  <span class="details">Password</span>
                  <input type="password" id="register-password" name="password" required>
               </div>
               <div class="input-box">
                  <span class="details">Confirm Password</span>
                  <input type="password" id="register-confirm-password" name="confirm-password" required>
               </div>
            </div>
            <div class="gender-details">
               <input type="radio" name="gender" value="Male" id="dot-1">
               <input type="radio" name="gender" value="Female" id="dot-2">
               <input type="radio" name="gender" value="Prefer not to say" id="dot-3">
               <span class="gender-title">Gender</span>
               <div class="category">
                  <label for="dot-1">
                     <span class="dot one"></span>
                     <span class="gender" name="gender" >Male</span>
                  </label>
                  <label for="dot-2">
                     <span class="dot two"></span>
                     <span class="gender" name="gender" >Female</span>
                  </label>
                  <label for="dot-3">
                     <span class="dot three"></span>
                     <span class="gender" name="gender" > Prefer not to say</span>
                  </label>
               </div>
            </div>
            <div class="button">
               <input type="submit" value="Register" onclick="addUser()">
            </div>
         </form>
      </div>
   </div>

   <script src="./JS/Resgister.js"></script>


</body>

<footer>
  <?php include 'Footer.php' ?>
</footer>

</html>