// Print a random number - between 100 and 200 - for the number of tail-wagging pets we have available.

<?php
$airpupTag = 'I luv puppies';
?>

<h2><?php echo $airpupTag; ?></h2>

<h3>
    <span>
        <?php echo rand(100,200); 
        ?>
    </span>

    pets waiting to meet you
</h3>


// As a challenge, see if you can reverse this string and set all the characters to lowercase in one line using functions

<?php echo strtolower(strrev('!emosewaP yltcefrruP erA steP ruO')); ?>
