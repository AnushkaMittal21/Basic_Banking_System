<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/createuser.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "<script> alert('Hurray! User created');
      window.location='transfermoney.php';
            </script>";
                    
    }
  }
?>
<?php
  include 'navbar.php';
?>
<section class="createuser">
<h2 class="pt-4" style="color : black;">Create a User</h2>
<br>
<img src="img/user3.jpg" class="user">
<div class="container">
			<form class="login" method="post">
				<div class="login__field">
					<input type="text" class="login__input" placeholder="Name" name="name">
				</div>
				<div class="login__field">
					<input type="text" class="login__input" placeholder="Email" name="email">
				</div>
                <div class="login__field">
					<input type="number" class="login__input" placeholder="Balance" name="balance">
				</div>
        <div class="login__submit">
        <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>		
        </div>	
			</form>
</div>
<footer class="text-center mt-5 py-2">
    <p>Made by <b>ANUSHKA MITTAL</b></p>
</footer>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>