//Creating functions 


//    Create a new get_great_pet_toys() function that reads toys.json, decodes the contents, and returns the toys.

 //   Call this to get the toys array.


<?php
function get_great_pet_toys() {
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
    return $toys;
}
$toys = get_great_pet_toys();
?>

<?php

foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>
