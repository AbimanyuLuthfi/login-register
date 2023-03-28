<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $head; ?></h1>
            <br>
            <div class="card mb-4">
                <div class="card-header bg-warning">
                    <i class="fas fa-table me-1"></i>
                    Edit Accounts
                </div>
                <div class="card-body">
                    <form action="/admin/<?= $items['id']; ?>/update/post" accept-charset="utf-8" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" value="<?= esc($items['email']) ?>" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="text" value="<?= esc($items['password']) ?>" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role">
                                <option><?= esc($items['role']) ?></option>
                                <option value="admin">Admin</option>
                                <option value="member">Member</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Is Active</label>
                            <select name="is_active" id="is_active">
                                <option><?= esc($items['is_active']) ?></option>
                                <option value="active">active</option>
                                <option value="not_active">not_active</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Submit</button>
                            <a href="/admin/login/index" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


<?= $this->endSection(); ?>
