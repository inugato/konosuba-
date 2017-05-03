<!<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <title>Kono Seikai ni woooo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
 <body>
    <div id="main-wrapper">
      <div id="masthead">

        <header class="clearfix">
          <div class="logo">
            <h1><span class="blue-bold">Kono</span> suba</h1>
          </div>
          <div id="main-nav">
            <nav>
              <ul>
                <li><a href="home.php">Home</a></li> &nbsp
                <li><a href="Daily.php">My Daily Explosion Diary</a></li>&nbsp
              </ul>
            </nav>
          </div>
        </header>
        <div class="pullquote">
        <center>  <h1>Konosuba Welcome you guy</h1> </center>
          <center>  <h4>Best Anime Ever </h4> </center>
          <p>KonoSuba: God’s Blessing on this Wonderful World! (この素晴らしい世界に祝福を！ Kono Subarashii Sekai ni Shukufuku o!?) is a comedic Japanese novel series written by Natsume Akatsuki. The series follows a boy who is sent to a fantasy world following his death, forming a dysfunctional party with a goddess, a wizard, and a crusader to fight against monsters</p>
        </div>

      </div>

      </div>
    </div>

      <div style="text-align:center;">
            <h1>MAP OF FANTASY</h1>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15678.537418155816!2d106.67704089667743!3d10.762637595425828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43900f1d4539a3d!2sUniversity+of+Science%2C+Downtown+Campus!5e0!3m2!1sen!2s!4v1483684636851" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="row">

    </div>
&nbsp&nbsp&nbsp
<h1>
  <center>My Diary</center>
</h1>

<div><form class="" action="" method="POST">
  <?php
          if(isset($_POST['submit-button'])) {
            $name = $_POST['Day'];
            $major = $_POST['Rate'];

            addsubscription($day, $rate);
          }
        ?>
        <?php

        if(isset($_POST['submit'])) {
          $name = $_POST["name"];
          $age = $_POST["age"];
          $gender = $_POST["gender"];
          $major = $_POST["major"];
          postClassmate($name, $age, $gender, $major);
          echo "<h2>" . $name . ": " . $age . ": " . $gender . "<h2>";
      };


        ?>
<center><input type="text" name="" value="Day">
  <input type="text" value="Explosion Rate" placeholder="">
 <button type="submit" name="submit-button ">result</button>
</center>
</div>
</form> </div>
  </body>


</html>
<?php
include("includes/footer.php");
 ?>
