// Using require to include functions 



//Move the get_great_pet_toys() function out of index.php and into the new lib/functions.php file so we can re-use it later.


require.php
<?php

require 'lib/functions.php';
$toys = get_great_pet_toys();
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>




functions.php
<!-- put the get_great_pet_toys() function here -->
<?php 
function get_great_pet_toys()
{
    $contents = file_get_contents('toys.json');
    $toys = json_decode($contents, true);

    return $toys;
}
