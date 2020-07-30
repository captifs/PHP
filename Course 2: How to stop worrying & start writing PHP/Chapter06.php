//Cleaning up with save_pets

/*    Reorganize the toy-saving logic into a new function called save_toys().

    Be sure to call this function to keep things working!

*/
new_toy.php

<?php
require __DIR__.'/lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $toys = get_great_pet_toys();
    $toys[] = ['name' => $name, 'description' => $description];
	save_toys($toys);
}
?>

<form action="/new_toy.php" method="POST">
    <input type="text" name="name" />
    <textarea name="description"></textarea>

    <button type="submit">Add toy</button>
</form>



functions.php
<?php
function get_great_pet_toys()
{
    $contents = file_get_contents(__DIR__.'/../toys.json');
    $toys = json_decode($contents, true);

    return $toys;
}


function save_toys(array $toys) {
    $json = json_encode($toys, JSON_PRETTY_PRINT);
    file_put_contents('toys.json', $json);
}





toys.json
[
    {
        "name": "Bacon Bone",
        "description": "What could be better?"
    },
    {
        "name": "Tennis Ball",
        "description": "Throw, fetch, throw, fetch, throw, fetch..."
    },
    {
        "name": "Frisbee",
        "description": "Go Deep!"
    }
]
