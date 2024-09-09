

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <?php if(session()->has('error')): ?>
        <p><?= session('error') ?></p>
    <?php endif; ?>

    <?php echo form_open('/register'); ?>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Register">
    <?php echo form_close(); ?>
</body>
</html>
