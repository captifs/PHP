   
   //Adding a very simple layout
   
   // Move all the header HTML into header.php and move all the footer HTML into footer.php.

   // Then, require each of these files in index.php and aboutUs.php to get the same, "nice" layout in both of our pages.
   
   
index.php
<?php
require 'layout/header.php';
$airpupTagLine = 'We luv puppies!';
?>

    <h1>Welcome to AirPupNMeow.com!</h1>
    <h3><?php echo $airpupTagLine; ?></h3>

<?php require 'layout/footer.php'; 
?>



aboutUs.php
<!-- require the header here -->

<h1>About Us</h1>

<p>
    We're just a couple of <mark>crazy</mark> cats with a dog-gone good idea!
</p>

<address>
    <strong>AirPupNMeow</strong><br>
    555 Main Street<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<!-- require the footer here -->



header.php
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>
<body>
<div class="container">



footer.php

    <footer>
        &copy; 2015 AirPupNMeow.com
    </footer>
</div>
</body>
</html>
