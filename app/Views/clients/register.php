
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            background-color: #ffffff;
        }

        h2 {
            color: #b83b5e;
            text-align: center;
            margin-bottom: 30px;
        }

        form label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-primary {
            background-color: #b83b5e;
            border-color: #b83b5e;
            border-radius: 20px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #a3314c;
            border-color: #a3314c;
        }

        .mt-3 {
            text-align: center;
            color: #888;
        }
  
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            height: 150px;
        }

        button[type="submit"] {
            background-color: #b83b5e;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #b83b5e;
        }
  
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        :root {
            --theme-bg-color: #b83b5e;
            --theme-color: white;
        }
        * { 
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            box-sizing: border-box;
        }
        .navbar {
            display: flex;
            box-shadow: 0 0 2px 0 grey;
            align-items: center;
            font-size: 1em;
            background-color: #b83b5e;
            background-color: var(--theme-bg-color);
            color: white;
            color: var(--theme-color);
        }
        .item {
            padding: 10px;
            text-decoration: none;
            color: white;
            color: var(--theme-color);
        }
        .item.right {
            margin: 0 0 0 auto;
        }
        .navbar .logo {
            font-size: 1.2em;
            align-items: center;
            display: flex;
        }
       
        .item.search {
            transition: 0.2s linear;
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }
        .item.search .search-icon {
            border-left: 1px solid grey;
            margin: 2px;
            padding-left: 10px;
            cursor: pointer;
            color: grey;
        }
        .item.search .search-icon:hover {
            color: black;
        }
        .item.search input {
            width: 100%;
            padding: 6px;
            outline: none;
            border: 2px solid grey; 
            max-width: 100%;
            border: 0;
        }
        .item .search-group {
            display: flex;
            width: 75%;
            max-width: 700px;
            border-radius: 20px;
            border: 2px solid grey;
            overflow: hidden;
            background: white;
            border-color: white;
            color: var(--theme-color);
        }
        .item .search-group select {
            border: 0;
            margin: 2px;
            border-right: 1px solid grey;
            max-width: 5em;
            outline: none;
            color: grey;
        }
        .item .group {
            display: flex;
            align-items: center;
            font-size: 0.9em;
        }
        .item .group .sub {
            font-size: 0.8em;
        }
        .material-icons {
            font-size: 1.8rem;
            margin-right: 5px; 
        }
        .menu-icon {
            display: none;
        }
        @media (max-width: 700px) {
            .item.search input {
                display: none;
            }
            .menu-icon {
                display: block;
            }
            .detail, .logo .text {
                display: none;
            }
        }
        .footer-area {
            width: 100%;
    float: left;
    height: 50vh; 
    padding: 30px;
    overflow-y: auto; 
   
    background-color: #b83b5e;
    color: #fff;
}



.footer-area a {
    text-decoration: none;
}

.footer-area .footer-heading {
    font-size: 24px;
    color: #fff;
}

.footer-area .footer-underline {
    height: 1px;
    width: 70px;
    background-color: #ddd;
    margin: 10px 0px;
}

.footer-area p {
    margin-bottom: 0px;
    color: #fff;
}

.footer-area .social-media {
    text-align: end;
}

.footer-area .social-media a {
    margin: 0px 10px;
    color: #fff;
    width: 20px;
}


.copyright-area {
    padding: 14px 0px;
    background-color: #262626;
}





    </style>
</head>
<body>
    <nav class="navbar">
        <i class="material-icons menu-icon">menu</i>
        <div class="logo">
            <div class="text">EleganceDeco</div>
            <img src="/public/images/r.jpg" alt="Description de l'image" width="75" >
           
</div>
<div class="item search right" tabindex="0">

<form class="search-form">
<input type="text" name="search" placeholder="Search" class="search-input">

    
</form>

</div>
        <a href="http://localhost:8081/index.php/articles/cards" class="item">
            <div class="group">
                <i class="material-icons">home</i>
               
                <div class="detail">
                    <div class="sub"></div>
                    home
                </div>
            </div>
        </a>
        <a href="http://localhost:8081/index.php/articles/category-one" class="item">
            <div class="group">
                <i class="fa fa-shopping-bag"></i>
               
                <div class="detail">
                    <div class="sub"></div>
                    Meuble
                </div>
            </div>
        </a>
        <a href="http://localhost:8081/index.php/articles/luminaires" class="item">
            <div class="group">
                <i class="fa fa-shopping-bag"></i>
               
                <div class="detail">
                    <div class="sub"></div>
                    Luminaires
                </div>
            </div>
        </a>
        
        <a href="http://localhost:8081/index.php/articles/decor" class="item">
            <div class="group">
                <i class="fa fa-shopping-bag"></i>
               
                <div class="detail">
                    <div class="sub"></div>
                    Decors
                </div>
            </div>
        </a>
        
        
       
       

        <a href="http://localhost:8081/index.php/contacts/create" class="item">
            <div class="group">
                <i class="material-icons">contacts</i>
               
                <div class="detail">
                    <div class="sub"></div>
                    contacts
                </div>
            </div>
        </a>
        
        <a href="http://localhost:8081/clients/login" class="item">
            <div class="group">
                <i class="material-icons">account_circle</i>
                <div class="detail">
                    <div class="sub">Account</div>
                    Sign In
                </div>
            </div>
        </a>
        </a>
        <a href="http://localhost:8081/index.php/articles/cards" class="item">
    <div class="group">
        <i class="fa fa-sign-out"></i>
        <div class="detail">
            <div class="sub"></div>
           Logout
        </div>
    </div>
</a>
    
    </nav>
    <div class="container">
    <h2>Inscription</h2>

<?php if (session('success')) : ?>
    <div class="alert alert-success"><?= session('success') ?></div>
<?php endif; ?>

<?php if (session('error')) : ?>
    <div class="alert alert-danger"><?= session('error') ?></div>
<?php endif; ?>

<form action="<?= base_url('clients/register') ?>" method="post">
    <div class="mb-3">
        <label for="nom" class="form-label">First Name :</label>
        <input type="text" class="form-control" name="nom" required>
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Last name :</label>
        <input type="text" class="form-control" name="prenom" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Enter your Email :</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Enter your password:</label>
        <input type="password" class="form-control" name="password" required>
    </div>

    <div class="mb-3">
        <label for="telephone" class="form-label">Phone Number :</label>
        <input type="tel" class="form-control" name="telephone" required>
    </div>

    <button type="submit" class="btn btn-primary">Sign up</button>

    <div class="mt-3">
        <p>Already have an account? <a href="<?= base_url('clients/login') ?>">Log in here</a></p>
    </div>
</form>
</div>



</div>
    

</div>

<div class="footer-area">
            
                
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-heading">EleganceDeco E-Commerce</h4>
                        <div class="footer-underline"></div>
                        <p>
                        Elegance Deco is simply dummy text of the printing and typesetting industry.
                        Elegance Deco has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Quick Links</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="http://localhost:8081/index.php/articles/cards" class="text-white">Home</a></div>
                        <div class="mb-2"><a href="http://localhost:8081/index.php/articles/category-one" class="text-white">Meuble</a></div>

                        <div class="mb-2"><a href="http://localhost:8081/index.php/articles/luminaires" class="text-white">Luminaires</a></div>
                        <div class="mb-2"><a href="http://localhost:8081/index.php/articles/decor" class="text-white">Decors</a></div>
                        <div class="mb-2"><a href="http://localhost:8081/index.php/contacts/create" class="text-white">Contact Us</a></div>
                        <div class="mb-2"><a href="http://localhost:8081/clients/login" class="text-white">Sign up</a></div>
                        <div class="mb-2"><a href="http://localhost:8081/clients/login" class="text-white">Logout</a></div>
                    </div>
                   
                    <div class="col-md-3">
                        <h4 class="footer-heading">Reach Us</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2">
                            <p>
                                <i class="fa fa-map-marker"></i> 13 place du général de gaulle, Saint-Dizier, France
                            </p>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-phone"></i> +33 3 25 08 02 15
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-envelope"></i> elegance.deco@outlook.fr
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






       
<div class="container">
