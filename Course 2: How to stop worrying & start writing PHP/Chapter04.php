 /*
 Fetch the existing pet toys with the get_great_pet_toys() function

    Add the new toy to the array

    Then, save the JSON back to toys.json

    To prove it's working, read the file again with file_get_contents() and var_dump() the JSON string.

    Fill out the form with Fluffy Pig Stuffed Animal and any description to try it!
*/

<?php
require __DIR__.'/lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $toys = get_great_pet_toys();
    $toys[] = ['name' => $name, 'description' => $description];
    $json = json_encode($toys, JSON_PRETTY_PRINT);
    file_put_contents('toys.json', $json);

    var_dump(file_get_contents('toys.json'));
}
?>

<form action="/new_toy.php" method="POST">
    <input type="text" name="name" />
    <textarea name="description"></textarea>

    <button type="submit">Add toy</button>
</form>
