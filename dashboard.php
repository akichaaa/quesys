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
   <link rel="stylesheet" href="resource/css/dashboard.css">
   <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <?php
                deleteT();
            ?>
                    <div class="container">
          <section>
            <h1 class="text-center mb-5">ON-GOING QUEUE</h1>
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
                  <form class="" action="" method="GET">  
                    <?php $view2->viewApproveTable(); ?>
                  </form>
                </tbody>
              </table>
            </div>
          </section>
        </div>
 <body>
 <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>