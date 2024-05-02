<?= $this->extend('layout/template_pasive'); ?>

<?= $this->section('content'); ?>
    <div class="container mt-3">
        <h1 class="mb-3">Login Admin</h1>
        <div class="mb-3 col-8">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3 col-8">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
<?= $this->endSection(); ?>