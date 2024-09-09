<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
      
         
</head>
<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <form action="<?= base_url('clients/login') ?>" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" value="<?= isset($email) ? $email : '' ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" style="background-color:#b83b5e">Login</button>


            </form>
            <div class="mt-3 text-center">
                <p>Don't have an account? <a href="<?= base_url('clients/register') ?>" class="form-link">Sign up here</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
