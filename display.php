<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quesys/resource/php/class/core/init.php';
$view2 = new viewtable;
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Queueing System</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" href="resource/css/view.css">
   <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <button class="button2" name="button" ><a  href="register.php">Back to Transaction</a></button>
 <div class="container">
          <div class="row">
            <div class="col-md-6 mt-5 pt-5">
              <?php $view2->viewCurrentTable(); ?>
              <h3 class="text-center">NOW SERVING</h3>
            </div>
            <div class="col-md-6">
              <h4 class="text-center mb-2">ON-GOING QUEUE</h4>
              <div class="header">
                <table>
                  <thead>
                    <tr>
                      <th>CODE NUMBER</th>
                      <th>NAME</th>
                      <th>ACTION</th>
                      <th></th>
                    </tr>
                  </thead>
                </table>
              </div>
                <div class="content">
                  <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                      <?php $view2->viewDataTable(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

 <body>
 <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>