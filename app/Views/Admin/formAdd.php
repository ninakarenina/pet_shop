<?= $this->extend('layout/template_pasive'); ?>

<?= $this->section('content'); ?>
    <div class="container mt-3">
        <h1 class="mb-3">Form Tambah Produk</h1>
        <form action="/products/save" method="post">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="id" class="col-sm-1 col-form-label">Id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="id" name="id" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-1 col-form-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-1 col-form-label">Description</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
            <div class="row mb-3">
                <label for="quantity" class="col-sm-1 col-form-label">Quantity</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="quantity" name="quantity">
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="col-sm-1 col-form-label">Price</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="price" name="price">
                </div>
            </div>
            <div class="row mb-3">
                <label for="category" class="col-sm-1 col-form-label">Category</label>
                <div class="col-sm-8">
                    <?php foreach($categories as $category): ?>
                        <input type="radio" class="btn-check" name="category" id="<?= $category['id']; ?>" value="<?= $category['id']; ?>">
                        <label class="btn" for="<?= $category['id']; ?>"><?= $category['name']; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-1 col-form-label">Image</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="image" name="image">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
    </div>
<?= $this->endSection(); ?>