//Working with Files , JSON and booleans
/*
    Read the toys.json file and use json_decode to turn it into a big array.

    Make sure the foreach is still correctly printing each toy's details.

    Be careful to make sure the keys from toys.json match what you're printing out!
*/

<!-- read from the toys.json file and set the $toys variable -->
<?php $toysjson = file_get_contents('toys.json');
$toys = json_decode($toysjson, true);
?>
<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>


  //  Use file_put_contents() to save the text Dogs rule! into a new file called doglife.txt.

   // Then read that file and print the string in the h2 tag.


<!-- save the doglife.txt file -->
<?php 
$file_pointer = 'doglife.txt';
$open = 'Dogs rule!';
file_put_contents($file_pointer, $open); 
?>
<h2>
    <?php 
    echo file_get_contents('doglife.txt');
    ?>
</h2>
