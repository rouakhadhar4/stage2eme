

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f5; /* Updated background color */
        }

        .dashboard-container {
            display: flex;
            flex-grow: 1;
            background-color: #ecf0f5; /* Updated background color */
        }

        .sidebar {
            background-color: #9DB4C0;
            color: white;
            width: 250px;
            padding: 20px;
            min-height: 100%;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            transition: background-color 0.3s;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #2c3e50;
        }

        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #253237;
            color: white;
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .search-bar {
            width: 250px;
            margin-right: 20px;
        }

        .footer {
            background-color: #253237;
            color: white;
            padding: 11px 0;
            text-align: center;
            margin-top: auto;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-box {
            background-color: #3498db;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .info-box i {
            font-size: 30px;
            margin-right: 15px;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-list li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <input type="text" class="form-control search-bar" placeholder="Search">
    </div>

    <div class="dashboard-container">
      
        <div class="sidebar">
            <h2>Dashboard</h2>
            
            <a href="http://localhost:8081/index.php/accueil">Home</a>

            <a href="http://localhost:8081/index.php/categories">Categories</a>
            <a href="#">Articles</a>
            <a href="#">Orders</a>
            <a href="#">Contacts</a>
            <a href="http://localhost:8081/index.php/admin">Logout</a>
        </div>

     
        <div class="content">
            <!-- Main Cards -->
            <div class="info-box">
                <i class="bi bi-info-circle"></i>
                <div>
                    <h2>Welcome to the Admin Dashboard</h2>
                    <p>This is your central hub for managing your website.</p>
                </div>
            </div>

            <div class="card">
                <h3>Recent Orders</h3>
                <ul class="user-list">
                    <li>Order #12345 - John Doe</li>
                    <li>Order #12346 - Jane Smith</li>
                    <!-- Add more recent orders -->
                </ul>
            </div>

            <div class="card">
                <h3>Statistics</h3>
                <p>Here you can display meaningful statistics and charts.</p>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>42 Boulevard Albert 1 er – 06600 – ANTIBES</p>
                </div>
                <div class="col-md-4">
                    <p>contact@palacedesign.fr</p>
                </div>
                <div class="col-md-4">
                    <p>+33. (0) 6.09.18.75.74</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/dist/js/bootstrap-icons.min.js"></script>
</body>

</html>
