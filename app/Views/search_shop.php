
</head>
<body>
    <div class="container mt-3">
        <div class="d-flex justify-content-end">
            <h1>Search Articles</h1>
            <form action="<?= site_url('/search_shop'); ?>" method="get" class="form-inline">
                <div class="input-group">
                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search by Article Name">
                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                </div>
            </form>
        </div>
    </div>

  

</body>
</html>
<!-- Fin du contenu de la page search_shop.php -->
