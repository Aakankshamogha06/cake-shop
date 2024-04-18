<!-- Page Header Start -->
<div class="container-fluid bg-dark bg-img p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">Products</h1>
            <a href="<?=base_url()?>">Home</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="<?=base_url()?>product">Products</a>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Products Start -->
<div class="container mt-5">
    <div class="row">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="col-md-3">
                <div class="card product-card">
                    <div class="product-card-inner">
                        <div class="product-card-front">
                            <img src="<?=base_url()?>public/web/img/cake-1.jpg" class="card-img-top" alt="Product Image">
                        </div>
                        <div class="product-card-back">
                            <div class="product-details">
                                <h5>Product Name</h5>
                                <p>Description of the product goes here. You can add more details.</p>
                                <p>$19.99</p>
                                <button class="btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<!-- Products end -->
