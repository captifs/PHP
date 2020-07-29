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
