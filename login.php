<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>The Bank of Gotham City</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="icon" href="images/favicon.ico" type="image/png">
      <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Niconne|Tangerine" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400i" rel="stylesheet">
   </head>
   <body>
      <header>
         <nav id="header-nav" class="navbar navbar-default">
         <div class="container">
         <div class="navbar-header">
            <img id="logo-img" src="images/logo.png" width="200" height="100" style="float:left; margin:1em 1em;">
            <div class="navbar-brand">
               <h1>The Bank of Gotham City</h1>
               <p>....... A Silent Guardian</p>
            </div>
            <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <div id="collapsable-nav" class="collapse navbar-collapse">
            <ul id="nav-list" class="nav navbar-nav navbar-right">
               <li>
                  <a href="./">Home</a>
               </li>
               <li>
                  <a href="#" class="active_link">Login</a>
               </li>
               <li>
                  <a href="branches.php">Branches</a>
               </li>
               <li>
                  <a href="faq.php">FAQ</a>
               </li>
            </ul>
         </div>
      </header>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
               <form id = "loginform" onsubmit="return validateForm()" method = "post"action="authenticate.php">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" autocomplete="off">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" autocomplete="off">
                  <a>Forgot password?</a>
                  <input type="submit" value="Login">
                  <div id = "message">
                     The username or password you have entered is incorrect.
                  </div>
               </form>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
         </div>
      </div>
      <?php
         include 'footer.php';
         ?>
      <!-- jQuery (Bootstrap JS plugins depend on it) -->
      <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         function validateForm(){
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var message = document.getElementById('message');
            if(isEmpty(username)){
               message.innerHTML = "Username cannot be empty<br><br>";
               message.style.color = '#f00';
               return false;
            }
            else if(isEmpty(password)){
               message.innerHTML = "Password cannot be empty<br><br>";
               message.style.color = '#f00';
               return false;
            }
            else {
               return true;
            }
         }
         function isEmpty(string) {
            return (!string || 0 === string.length);
         }
      </script>
   </body>
</html>