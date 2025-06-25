<?php require './essentials/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- your dashboard title -->
  <title>Dashboard Template</title>

  <!-- styling -->
  <link rel="stylesheet" type="text/css" href="./css/coloring.css"> 
  <link rel="stylesheet" type="text/css" href="./css/main.css"> 
  <link rel="stylesheet" type="text/css" href="./css/login.css">  
  <link rel="stylesheet" type="text/css" href="./css/styling.css"> 

  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
</head>

<?php

if($loggedin) {
?>

<body id="APP">

  <!-- navigation -->
  <aside class="menu hide" id="menu"> 
  <?php require './essentials/navigation.php'; ?>   
  </aside>

  <!-- content area -->
  <main class="main" id="main">
    <header>
      <div id="mobile_menu" class="icon_large">
        <span class="fa-solid fa-bars"></span>
      </div>
    </header>

    <section class="content_area">
      <?php require './features/index.php'; ?> 
    </section>
  </main>

  <!-- scripts -->
  <script src="./scripts/style.js"></script>
</body>
<?php
}
else {
?>

<body id="login">

<?php require './login.php'; 
} ?>

</body>
