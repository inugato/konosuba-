<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Gift From Goddess  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="style.css">

    <div class="jumbotron front-banner">
      <div class="container">
        <h1>Konosuba! Shut up and Explosion</h1>
        <h2>Sound fun! Join us if you like</h2>
        <form>
    <input type="button" value="Join Us">
  </form>
  <p>Thanks For Your Subcribe.</p>
        <script>
        var btn = document.querySelector('input');
        var txt = document.querySelector('p');

        btn.addEventListener('click', updateBtn);

        function updateBtn() {
          if (btn.value === 'Join Us') {
            btn.value = 'Let me rethink about it';
            txt.textContent = 'Thanks For Your Subcribe.';
          } else {
            btn.value = 'Join Us';
            txt.textContent = 'Subcribe if you like';
          }
        }
    </script>
      </div>
    </div>
  </head>
