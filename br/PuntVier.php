<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Homepage</title>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><span class="text-primary">Blauw</span> <span class="text-info">rechts</span></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="overOns.php">Over ons</a></li>
        <li class="active"><a href="standpunten.php">Standpunten</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
  <h1 class="text-center jumbotron"><em>Standpunt 4</em></h1>
  <div class="col-sm-12 d-flex justify-content-center" style="background-color: #cacaca;">
    <div class="col-sm-2"></div>
    <!-- Class is used to place in correct location -->
    <img src="img/blauwRechts.jpg" class="col-sm-4 img-thumbnail" alt="..." style="margin-top:25px; margin-bottom:25px;">
    <div class="col-sm-1"></div>
    <!-- Margin zit niet in BS3 maar pas vanaf BS4. I.o.m. Jeffry CSS toegvoegd -->
    <!-- Class is used to put in correct location  bg is for the background color and text-center is to put the text into the center -->
    <div class="col-sm-4 w-50 bg-primary text-center" style="height: 400px; margin-top:25px; margin-bottom:25px;">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil commodi ad esse maxime nisi recusandae facilis ab blanditiis eaque aut! Aliquid ipsam id in alias sint quaerat impedit maxime neque?</p>
    </div>
  </div>
  <!-- Class is used to put in correct location  jumbotron is for letter size and background color and text-center is to put the text into the center -->
  <div class="col-sm-12 w-50 bg-primary text-center jumbotron" style="height: 200px; margin-top:30px;">
    <h1>Stem op ons We hebben Koekjes</h1>
    <a href="overOns.php" class="col-sm-2 w-50 row-sm-offset-10">
      <button type="button" class="btn btn-primary btn-lg ">over ons</button>
    </a>
  </div>

</body>

</html>