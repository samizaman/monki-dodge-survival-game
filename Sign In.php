<!DOCTYPE html>
<html lang="en">

<head>
   <title>Monki Dodge / Sign In</title>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="CSS/stylesheet.css">
   <link rel="icon" type="image/png" href="./Images/gorilla.png">
</head>

<body>
   <?php include 'Navbar.php' ?>
   <div class="signin-container">
      <div class="title">LOGIN</div>
      <div class="signin-content">
         <form action="#">
            <div class="user-details">
               <div class="input-box">
                  <span class="details">Username</span>
                  <input type="text" id="login-username" name="username" required>
                  <div class="input-box">
                     <span class="details">Password</span>
                     <input type="password" id="login-password" name="password" required>
                  </div>
                  <div class="button">
                     <input type="submit" value="Sign In" onclick="checkLogin()">
                  </div>
               </div>
         </form>
      </div>
   </div>

   <script src="./JS/Sign In.js"></script>

   <footer>
      <?php include 'Footer.php' ?>
   </footer>
</body>

</html>