<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>
<?= $this->include('admin/template/category'); ?>

        <div class="col-10">
            <?php if(session()->getFlashdata('pesan')): ?>
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h1 class="mb-3">Daftar Produk</h1>
            <a href="/admin/add" class="btn btn-outline-primary mb-3">Tambah Produk</a>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach($products as $product): ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/<?= $product['image']; ?>" alt="" width="80"></td>
                        <td><?= $product['name']; ?></td>
                        <td><?= $product['quantity']; ?></td>
                        <td>
                            <a href="/products/update" class="btn btn-success">Update</a>
                            <a href="/products/delete" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>              
            </div>

        </div>
    </div>

<?= $this->endSection(); ?>