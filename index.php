<?php 
session_start();
if(isset($_SESSION['userid'])){
   header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Login</title>
      <style>
         body {
         background: #76b852;
         background: rgb(141,194,111);
         background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
         font-family: "Roboto", sans-serif;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;      
         }
         .error-message{
            padding: 8px;
            border-radius: 4px;
            background-color: red !important;
            color: white;
         }
         img{
            width: 100px;
            height: 100px;
            position: absolute;
            left: 130px;
            top: -50px;
         }
      </style>
      <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>" />
   </head>
   <body>
      <div class="login-page">
         <div class="form">
            <img src="pics/81696o63-HL.png" alt="">
            <form class="login-form" action="login.php" method="post">
               <h3>Padre Pio | Login</h3>
               <?php if(isset($_SESSION['error_message'])): ?>
                  <div class="error-message">
                     <?= $_SESSION['error_message']; ?>
                  </div>
                  <?php unset($_SESSION['error_message']); ?>
                  <br>
               <?php endif ?>
               <input type="text" name="username" placeholder="username"/>
               <input type="password" name="password" placeholder="password"/>
               <button>login</button>
            </form>
         </div>
      </div>
   </body>
</html>
