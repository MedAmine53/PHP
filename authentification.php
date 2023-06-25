<?php 
  $login = "";
  $password = "";

  $errLogin = "";
  $errPassword = "";
  $errGeneral = "";

  if(isset($_POST["login"]))
  {
    $login=$_POST["login"];
    $password=$_POST["password"]; 

    if(empty($login)){
      $errLogin= "login est obligatoire";
    }
    if(empty($password)){
      $errPassword= "password est obligatoire";
    }
    if( $errLogin= "" && $errPassword= ""){

      if( $login == $password ){
        echo "<a href='secret.php'>Secret</a>" ;
      }else{
        $errGeneral = " login ou mot de passe sont incorrecte";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Auth</title>
</head>
<body>
<form action="#" method="POST" class="container ">
  <div class="form-group ">
    <?php $errLogin ?>
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
  </div>
  <div class="form-group">
    <?php $errPassword ?>
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button> 
  <?php $errGeneral ?> 
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>