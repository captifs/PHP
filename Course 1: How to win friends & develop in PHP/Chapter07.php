// The wonderful if Statements

/*
    Use an if statement to avoid the error that's caused by some toys that have no color key.

    If we don't know the color, print no color
*/

<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php if (array_key_exists('color', $toy) && $toy['color'] != '') {
    echo $toy['color'];
} else {
    echo 'no color';
}; ?></h4>
<?php } ?>


/*

    Use an if - elseif - else statement to handle the following 3 possible situations:

    If the color key exists and is set to multiple, print "Multiple Colors".

    If the color key does not exist, print "no color"

    Otherwise, print the actual color value

*/

<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4>
        <?php
       if (!array_key_exists('color', $toy) || $toy['color'] == '') {
    echo 'no color';
} elseif ($toy['color'] == 'multiple')  {
    echo '(Multiple Colors)';
} else {
    echo $toy['color'];
}

        ?>
    </h4>
<?php } ?>



//Debug and show code after debugging

<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4>
        <?php
        if (array_key_exists('color', $toy) && $toy['color'] == 'surprise') {
            echo 'Surprise Color!';
        } elseif (!array_key_exists('color', $toy)) {
            echo 'no color';
        } else {
            echo $toy['color'];
        }
        ?>
    </h4>
<?php } ?>
