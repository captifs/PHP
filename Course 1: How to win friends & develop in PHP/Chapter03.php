//Arrays and Loops

/*     Assign each dog walker (Kitty, Tiger, and Jay) to three new variables - $walker1, $walker2 and $walker3.

    Put each variable into a new $dogWalkers array.
*/

<?php
$walker1 = 'Kitty';
$walker2 = 'Tiger';
$walker3 = 'Jay';
$dogWalkers = array($walker1, $walker2, $walker3);
?>
    
    
//    Use a foreach loop to print each kid's name in an h3 tag.
// Include a <button>Schedule me</button> under each kid's name.

<?php
$walker1 = 'Kitty';
$walker2 = 'Tiger';
$walker3 = 'Jay';

$dogWalkers = [$walker1, $walker2, $walker3];

foreach($dogWalkers as $dog) {
	echo '<h3>';
	echo $dog;
	echo '<button>Schedule me</button>';
    echo '</h3>';
}

// Use the var_dump function to show him that all three kids are in the array.
<?php
$walker1 = 'Kitty';
$walker2 = 'Tiger';
$walker3 = 'Jay';

$dogWalkers = [$walker1, $walker2, $walker3];

var_dump($dogWalkers);
