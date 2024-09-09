<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4; 
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 89vh;
        }

        .card {
            width: 400px;
            border: none;
            border-radius: 15px; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #0046fd; 
            color: white;
            text-align: center;
            padding: 25px;
            border-top-left-radius: 20px; 
            border-top-right-radius: 20px; 
        }

        .card-body {
            padding: 50px; 
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color:#0046fd; 
            border: none;
        }

        .btn-primary:hover {
            background-color: #0046fd; 
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Admin Login</h2>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            
         
            <form action="<?= site_url('/admin/login'); ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
