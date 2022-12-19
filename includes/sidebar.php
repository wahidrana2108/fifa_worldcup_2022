<div class="sticky-top">
    <div class="card shadow me-3" style="width: 9rem;">
        <div class="card-header">
            <h6 class="panel-title">Categories</h6>
        </div>
        <nav class="nav flex-column">
            <ul class="navbar-nav">
                <?php getCat(); ?>
            </ul>
        </nav>
    </div>

    <div class="card mt-3 me-3 shadow" style="width: 9rem;">
        <div class="card-header">
            <h6 class="panel-title">Products</h6>
        </div>
        <nav class="nav flex-column">
            <ul class="navbar-nav">
                <?php getPCat(); ?>
            </ul>
        </nav>
    </div>
</div>