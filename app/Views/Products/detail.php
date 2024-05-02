<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>
        <div class="container">
            <div class="col-6">
                <div class="card mb-3">
                    <img src="/img/<?= $product['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name']; ?></h5>
                        <p class="card-text"><?= $product['description']; ?></p>
                        <p class="card-text"><small class="text-body-secondary">Stok : <?= $product['quantity']; ?></small></p>
                        <p class="card-text"><small class="text-body-secondary">Harga : <?= $product['price']; ?></small></p>
                        <button class="btn btn-success">Buy</button>
                        <button class="btn btn-warning">Card</button>
                    </div>
                </div>
            </div>
        </div>
    
<?= $this->endSection(); ?>