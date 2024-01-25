

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#search-input').on('input', function () {
            var searchValue = $(this).val().toLowerCase();

            // Parcourez les lignes du tableau et affichez ou masquez-les en fonction de la correspondance avec la recherche.
            $('tbody tr').each(function () {
                var articleName = $(this).find('td:nth-child(3)').text().toLowerCase(); // Colonne du nom de l'article

                if (articleName.includes(searchValue)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            // Affichez un message si aucune correspondance n'est trouvée.
            if ($('tbody tr:visible').length === 0) {
                $('.no-result-message').show();
            } else {
                $('.no-result-message').hide();
            }
        });
    });
</script>

    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f5;
        }

        .dashboard-container {
            display: flex;
            flex-grow: 1;
            background-color:#ecf0f5;
        }

        .sidebar {
            background-color: #9DB4C0; /* Updated sidebar background color */
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
            background-color: #2980b9; /* Updated hover background color */
        }

        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .navbar-custom {
        background-color: #2c3e50; /* Updated navbar background color */
        color: white;
        padding: 16px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

        .navbar {
            background-color: #253237; /* Updated navbar background color */
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
            background-color: #253237; /* Updated footer background color */
            color: white;
            padding: 11px 0;
            text-align: center;
            margin-top: auto;
        }

        /* Add your additional styles here */

    </style>
</head>

<body>
     <div class="navbar navbar-custom">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
       
        <input type="text" class="form-control search-bar" placeholder="Search">
    </div>
    </div>

    <div class="dashboard-container" style="background-color: #ecf0f5;">
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
            
            <div class="container mt-5">
                <h2 class="mb-4">List of Articles</h2>
                <a href="<?= base_url('articles/create'); ?>" class="btn btn-secondary btn-sm">Add  new Article</a>
        
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Quantity in Stock</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles as $article): ?>
                            <tr>
                                <td><?= $article['idArticle']; ?></td>
                                <td>
                                    <?php 
                                        // Find the category name for the current article
                                        $categoryName = '';
                                        foreach ($categories as $category) {
                                            if ($category['idcategory'] == $article['idcategory']) {
                                                $categoryName = $category['nomcategory'];
                                                break;
                                            }
                                        }
                                        echo $categoryName;
                                    ?>
                                </td>
                                <td><?= $article['nomarticle']; ?></td>
                                <td><?= $article['description']; ?></td>
                                <td><?= $article['qtestock']; ?></td>
                                <td><?= $article['prix']; ?></td>
                                <td>
                                    <img src="<?= $article['imagePath']; ?>" alt="<?= $article['nomarticle']; ?>">
                                        
                                </td>
                                <td>
                                    <a href="/articles/edit/<?= $article['idArticle']; ?>" class="btn btn-primary btn-sm me-2">Update</a>

                                    <a href="/articles/delete/<?= $article['idArticle']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
                   
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
