<!-- app/Views/categories/search.php -->

<div class="container mt-3">
    <div class="d-flex justify-content-end">
        <form action="<?= site_url('/categories/search'); ?>" method="get" class="form-inline">
            <div class="input-group">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="search by Name">
                <button type="submit" class="btn btn-secondary btn-sm">Search</button>


            </div>
        </form>
    </div>
</div>





