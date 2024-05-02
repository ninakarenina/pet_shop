<?= $this->extend('layout/template_pasive'); ?>

<?= $this->section('content'); ?>
    <div class="container mt-3">
        <h1 class="mb-3">Form Registrasi Admin</h1>
        <form action="/admin/save" method="post">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="email" class="col-sm-1 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-1 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-1 col-form-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-1 col-form-label">Image</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="image" name="image">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </div>
<?= $this->endSection(); ?>