<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                <h4 class="h5">OTP Sent.</h4>
                <small class=text-muted>Enter OTP sent on your contact no</small>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">OTP</label>
                            <input type="text" name="otp" class="form-control">
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