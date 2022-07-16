<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Basic Banking System</title>
</head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <section class="home" id="home">
    <h3>Welcome To Bank Of India</h3>
    <h1>Branches in<span class="change_content"> </span> </h1>
    <p>"Your trust is our Wealth"</p>
  </section>

  <section class="activity" id="activity">
    <div class="row">
        <div class="col-6 image">
        <img src="img/user.jpg" class="img-fluid">
        </div>
        <div class="col-4 button">
        <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
        </div>
    </div> 
    <div class="row">
        <div class="col-6 image">
        <img src="img/transfer.jpg" class="img-fluid">
        </div>
        <div class="col-4 button">
        <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
        </div>
    </div> 
    <div class="row">
        <div class="col-6 image">
        <img src="img/history.jpg" class="img-fluid">
        </div>
        <div class="col-4 button">
        <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
        </div>
    </div>  
  </section>

  <footer class="text-center mt-5 py-2">
      <p>Made by <b>ANUSHKA MITTAL</b></p>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>