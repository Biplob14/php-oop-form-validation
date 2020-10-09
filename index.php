<?php 
    require('user_validator.php');
    if(isset($_POST['submit'])) {
        // validate entries
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();

        // save data to database

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <label>User Name: </label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">

            <div class="error">
                <p> <?php echo $errors['username']?? '' ?> </p>
            </div>

            <label>Email: </label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">

            <div class="error">
                <p><?php echo $errors['email']?? '' ?></p>
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>

</body>
</html>