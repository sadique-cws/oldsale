<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                <h4 class="h5">Forget Password?</h4>
                <small class=text-muted>Enter contact for OTP send</small>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control">
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