<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                <h4 class="h5">Reset Password</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="text" name="password" class="form-control">
                            <?= form_error('password');?>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm password</label>
                            <input type="text" name="confirm_password" class="form-control">
                            <?= form_error('confirm_password');?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn bg-theme text-white btn-block">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('auth/login');?>" class="text-muted text-theme">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>