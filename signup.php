<?php
  require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
      <h1>Signup</h1>
      <?php
      if (isset($_GET['error']))
      {
        if ($_GET['error'] == "emptyfields") {
          echo '<p class="signuperror">Fill in all the fields</p>';
        }
        else if ($_GET['error'] == "invaliduidmail") {
          echo '<p class="signuperror">Invalid username and e-mail!</p>';
        }
        else if ($_GET['error'] == "invaliduid") {
          echo '<p class="signuperror">Invalid username!</p>';
        }
        else if ($_GET['error'] == "passwordcheck") {
          echo '<p class="signuperror">Your passwords dont match!</p>';
        }
        else if ($_GET['error'] == "usertaken") {
          echo '<p class="signuperror">This username is already taken</p>';
        }
      }
      else if ($_GET['signup'] == "success")
      {
        echo '<p class="signupsuccess">Signup completed successfully</p>';
      }
      ?>
      <form class ="form-signup" action="mazafolder/signup1.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E--mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Confirm Password">
        <button type="submit" name="signup-submit">Signup</button>
      </form>
      </section>
    </div>
  </main>

<?php
  require "footer.php";
?>
