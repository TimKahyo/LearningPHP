<?php

// if is set to post and the value set to submit
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

// get data through url 
echo $_GET['name']; 
echo $_GET['age'];
?>

<!-- GET is kinda dangerous -->
<!-- since GET will show the value at the url -->
<!-- by default form method is GET --> 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=brad&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" value="Submit">
</form>

