<?php include 'remove_functions.php';?>
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
            url: 'remove_functions.php',
            data: $('form').serialize(),
            success: function () {  //check if the form is submitted
              alert('Subriscriber removed if existed');
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
        <h2>Remove a subscriber</h2><br>
        <label class="field">
          <input name="email" id="email" type="email" value="" placeholder="Enter email" required/><br><br><br>
        </label>
        <input type="submit" id="name" name="submit" value="UNSUBSCRIBE" /><br><br><br>
        <a href="index.php">Add a subscriber</a>
      </div>
    </form>
</body>
</html>
