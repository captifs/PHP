//reading post ed form data


/*
    Set the submitted name to a $name variable and the description to a $description variable.

    Then, var_dump() both variables to see what's being submitted.

    Hit Check to load the form. Ignore the nasty Undefined index errors: we'll fix those soon!

    Fill in the name field with Fluffy Pig Stuffed Animal and the description field with Your dog will destroy it!.

    Submit the form to see your dumped values!
*/
<?php
$name = $_POST['name'];
$description = $_POST['description'];

var_dump($name, $description);
?>

<form action="/new_toy.php" method="POST">
    <input type="text" name="name" />
    <textarea name="description"></textarea>

    <button type="submit">Add toy</button>
</form>




//Add an if statement around our logic so that it only runs when the user submits the form (i.e. makes a POST request).

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$description = $_POST['description'];
}
var_dump($name, $description);
?>

<form action="/new_toy.php" method="POST">
    <input type="text" name="name" />
    <textarea name="description"></textarea>

    <button type="submit">Add toy</button>
</form>


/*
    Dump the $_SERVER variable and run your code to figure out which key stores information about what browser you're using. (your code will be graded wrong at first, but don't worry!)

    Hint The browser information is a big long string that (in this example) will include Mozilla in it.

    Print the browser information in the h3 tag.
*/




<h3>
   <?php  var_dump($_SERVER);
    echo $HTTP_USER_AGENT;
    ?>
</h3>
