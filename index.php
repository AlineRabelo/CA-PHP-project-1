<!DOCTYPE html>
<html>
    <title> W3.CSS Template </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<body class="w3-black">

<!-- PHP INCLUDE HEADER -->
<?php include('include/header.php'); ?>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"> I'm </span> Aline Rabelo. </h1>
    <p> IT STUDENT. </p>
    <img src="images/logo.jpg" alt="cat" class="w3-image" width="700" height="400">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-center w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey"> About Myself </h2>
    <hr style="width:200px"  class="w3-opacity w3-content w3-center">
    <p> I'm Aline S. Rabelo, IT student. </br>
        ID Student: 2019438 </br>
        Web Development - John Snel </br>
        PHP project 1
    </p>
  </div>
    
<!-- PHP INCLUDE FOOTER -->
<?php require ('include/footer.php');?>

</body>
</html>

