<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quesys/resource/php/class/core/init.php';
$view = new view;
?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="resource/css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Queueing System  </title>
  </head>
  <body>
  <?php
                vald();
            ?>
    <div class="d-flex justify-content-center p-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body text-center">
          <form class="bank" action="" method="post">
            <label for="#name">Name</label>
            <br>
            <input class="input"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" placeholder="Name" required />
            <br>
            <label for="#transaction">Transaction Type</label>
            <br>
            <select id="Transaction" name="Transaction[]" class="selectpicker input transaction" data-live-search="true" required>
                                        <?php $view->transac();?>
                                      </select>
            <br>
            <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
            <button type="submit" value="Queue Up" class="button2" name="button">Queue Up </button>
          </form>
          <button class="button2" name="button" ><a class="queue-line"  href="display.php">Queue Line</a></button>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>