<!DOCTYPE html>
<html>
  <head>
    <title>Ramus - The Unification of The World</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/css.css" media="screen" charset="utf-8">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

    <form action="processSignup.php" method="post">
        <h2 style="color: white; text-align: center">Enter the first day of the rest of your life</h2>

        <div class="input-field">
          <input type="text" class="validate" name="username" required>
          <label for="last_name">Username*</label>
        </div>
        <div class="input-field">
          <input type="text" class="validate" name="name">
          <label>Nafn</label>
        </div>
        <div class="input-field">
          <input type="text" class="validate" name="email" required>
          <label data-error="Please enter a valid address">Email*</label>
        </div>
        <div class="input-field">
          <input type="password" class="validate" name="password" required>
          <label for="password">Password*</label>
        </div>
        <div class="input-field">
          <input type="text" class="validate" name="phone">
          <label>Phone number</label>
        </div>
        <div class="input-field">
          <select class="icons">
            <option value="" disabled selected>Choose your option</option>
            <option value="" class="left circle">Iceland<i class="material-icons">add</i></option>
            <option value="" data-icon="https://upload.wikimedia.org/wikipedia/commons/c/c4/PM5544_with_non-PAL_signals.png" class="left circle">Iceland</option>
            <option value="" data-icon="https://upload.wikimedia.org/wikipedia/commons/c/c4/PM5544_with_non-PAL_signals.png" class="left circle">Iceland</option>
          </select>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="x">Panta
          <i class="material-icons right">send</i>
        </button>
    </form>
  </body>
  
  <script type="text/javascript">
  /*
  $('label').click(function() {
    $lastActive = $('label.active');
    $lastActive.removeClass('active');
    $(this).addClass('active');
    $(this).siblings().css('border-bottom', '4px solid #26A69A');
    $(this).css('color', '#26A69A');
  });
*/
  </script>
</html>