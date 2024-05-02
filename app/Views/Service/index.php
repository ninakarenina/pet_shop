<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

    <div class="container mt-5">
       
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($services as $service): ?>
            <div class="col">
                <a href="/products/index/<?= $service['id']; ?>" class="btn active">
                    <div class="card h-100">
                        <img src="/img/<?= $service['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $service['name']; ?></h5>
                            <p class="card-text">Harga :<?= $service['description']; ?></p>
                            <p class="card-text">Harga :<?= $service['price']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
           
        </div>
    </div>

<?= $this->endSection(); ?>

