<?php require './essentials/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- your dashboard title -->
  <title>Dashboard Template</title>

  <!-- styling -->
  <link rel="stylesheet" type="text/css" href="./css/main.css"> 
  <link rel="stylesheet" type="text/css" href="./css/login.css">  
</head>

<?php

if($loggedin) {
?>

<body id="APP">

  <!-- navigation -->
  <aside> 
  <?php require './essentials/navigation.php'; ?>   
  </aside>

  <!-- content area -->
  <main>
  <?php require './features/index.php'; ?>   
  </main>

</body>
<?php
}
else {
?>

<body id="login">

<?php require './login.php'; 
} ?>

</body>
