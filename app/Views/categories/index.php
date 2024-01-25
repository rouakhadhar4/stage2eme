
<head>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your existing head content -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('.search-bar');
            const tableRows = document.querySelectorAll('.table tbody tr');
            const noResultMessage = document.querySelector('.no-result-message');

            searchInput.addEventListener('input', function () {
                const searchValue = this.value.toLowerCase();
                let found = false;

                tableRows.forEach(row => {
                    const categoryName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

                    if (categoryName.includes(searchValue)) {
                        row.style.display = '';
                        found = true;
                    } else {
                        row.style.display = 'none';
                    }
                });

                if (found) {
                    noResultMessage.style.display = 'none';
                } else {
                    noResultMessage.style.display = 'block';
                }
            });
        });
    </script>
</head>



</html>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
          .btn-danger {
        background-color: #e74c3c;
        border-color: #e74c3c;
    }
        
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
        .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
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

    <div class="dashboard-container" style="background-color: #ecf0f5 !important;">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <a href="http://localhost:8081/index.php/accueil">Home</a>
            <a href="http://localhost:8081/index.php/categories">Categories</a>
            <a href="http://localhost:8081/articles">Articles</a>
            <a href="#">Orders</a>
            <a href="#">Contacts</a>
            <a href="http://localhost:8081/index.php/admin">Logout</a>
        </div>

        <div class="content">
        <div class="container mt-5 table-container">
        <h1 class="mb-4">Liste of categories</h1>
    <a href="<?= site_url('/categories/create'); ?>" class="btn btn-secondary btn-sm">Add new Category</a>

    <div class="alert alert-info mt-3 no-result-message" role="alert" style="display: none;">
            No category found.
        </div>

   


                <?php if (session()->getFlashdata('success')): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            Swal.fire('Opération réussie', '<?= session()->getFlashdata('success') ?>', 'success');
                        });
                    </script>
                <?php endif; ?>

                <?php if (empty($categories)): ?>
                    <div class="alert alert-info mt-3" role="alert">
                        Aucune catégorie trouvée.
                    </div>
                <?php else: ?>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="font-weight-bold">ID</th>
                                <th class="font-weight-bold">Category Name</th>
                                <th class="font-weight-bold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category) : ?>
                                <tr>
                                    <td><?= $category['idcategory']; ?></td>
                                    <td><?= $category['nomcategory']; ?></td>
                                    <td>
                                    <a href="<?= site_url("categories/edit/{$category['idcategory']}"); ?>" class="btn btn-primary btn-sm me-2">Update</a>


                                        <a href="<?= site_url("/categories/delete/{$category['idcategory']}"); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this category ?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
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
</body>
</html>
