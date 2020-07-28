//Start by opening PHP, then echo their tag line: "I luv puppies" inside an <h2> tag.

<h2> 
    <?php echo 'I luv puppies'; ?>
</h2>
  
    
    /*
  Create a variable called airpupTagand set it to the I luv puppies text.
    Now, print this inside the <h2> tag
    */
<h2>
    <?php echo 'I luv puppies'; ?>
    <?php $airpupTag = 'I luv puppies'; ?>
    <?php echo $airpupTag; ?>
</h2>

    
//Fix the errors
    
<?php
$airpupTag = 'I luv puppies';
$yearFounded = 2015;
?>

<h2>
    <?php echo $airpupTag; ?> (founded <?php echo $yearFounded; ?>)
</h2>
