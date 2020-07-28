   // Update the code below to use an associative array: set they keys of the array to name, weight, age and bio.
    //Then, update the code below so Waggy Pig's bio still prints out!
<?php
$waggyPig = [
    'name' => 'Waggy Pig', 
    'weight' => 10, 
    'age' => 7, 
    'bio' => 'Sleepy white fluffy dog'];
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div class="age"><?php echo $waggyPig['age']; ?></div>
<div class="weight"><?php echo $waggyPig['weight']; ?></div>
<p><?php echo $waggyPig['bio']; ?></p>


//    Add a new breed key set to bichon on a new line after the $waggyPig array has already been created.
// Print this new info below!

<?php
$waggyPig = [
    'name' => 'Waggy Pig',
    'weight' => 10,
    'age' => 7,
    'bio' => 'Sleepy white fluffy dog',
    'breed' => 'bichon'
];
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div class="age"><?php echo $waggyPig['age']; ?></div>
<div class="weight"><?php echo $waggyPig['weight']; ?></div>
<div class="breed">
    <?php echo $waggyPig['breed']; ?>
</div>
<p><?php echo $waggyPig['bio']; ?></p>
