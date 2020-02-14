<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
  </head>

  <body>
      <header>
        <nav>
          <a href="#">
            <img src="logo.jpg" alt="logo">
          </a>
          <ul>
            <li> <a href="index.php">Home</a> </li>
          </ul>
        </nav>
          <div class="header-login">
            <?php
            if (isset($_SESSION['userId'])) {
              echo '<form action="mazafolder/logout1.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
              </form>';
            }
            else {
                echo '<form action="mazafolder/login1.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                  </form>
                  <a href="signup.php" class="header-signup">Signup</a>';
              }
              ?>
          </div>
      </header>
