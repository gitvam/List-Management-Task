<?php include 'add_functions.php';?>
<!DOCKTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>List Management Task</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
      /*dynamic client side*/
      $(function () {
        $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'get',
            url: 'add_functions.php',
            data: $('form').serialize(),
            success: function () {    //check if the form is submitted
              alert('Subriscriber added');
            }
          });
        });
      });
  </script>

</head>


<body>
    <form>
      <div class="top">
        <h1>List Management Task</h1>
      </div>
      <div class="center">
        <h2>Add a subscriber</h2><br>

        <label class="field">
          <input name="name" id="name" type="text" pattern="^[A-Za-z]+$" value="" placeholder="Enter name (characters only)"  required /><br>
        </label>

        <label class="field">
          <input name="email" id="email" type="email" value="" placeholder="Enter email" required /><br><br><br>
        </label>

        <input type="submit" name="submit" value="SUBSCRIBE" /><br><br><br>
        <a href="remove_page.php">Remove a subscriber</a>
      </div>
    </form>
</body>
</html>
