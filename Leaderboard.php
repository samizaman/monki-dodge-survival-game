<!DOCTYPE html>
<html lang="en">

<head>
   <title>Monki Dodge / Leaderboard</title>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="./CSS/stylesheet.css">
   <link rel="icon" type="image/png" href="./Images/gorilla.png">
</head>
<style type="text/css">
   table {
      border: 1px solid #9b59b6;
      border-radius: 20px;
      border-spacing: 0;
   }

   table td,
   th {
      font-size: large;
      border-bottom: 1px solid #9b59b6;
      padding: 50px;
   }

   table tr,
   td {
      border-bottom: none;
   }
</style>

<body>
   <?php include 'Navbar.php' ?>
   <div class="container">
      <table class="roundedCorners" style="text-align: center;">
         <tr>
            <th>NAME</th>
            <th>HIGHSCORE</th>
         </tr>
         <tr>
            <td>Sami</td>
            <td>100</td>
         </tr>
         <tr>
            <td>Haseeb</td>
            <td>200</td>
         </tr>
         <tr>
            <td>Jay</td>
            <td>60</td>
         </tr>
         <tr>
            <td>Tom</td>
            <td>60</td>
         </tr>
      </table>
   </div>
</body>
<script src="script.js"></script>
<footer>
   <?php include 'Footer.php' ?>
</footer>

</html>