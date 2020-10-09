<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                <h4 class="h5">Login Here</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn bg-theme text-white btn-block">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('auth/signup');?>" class="text-muted text-theme">Create an Account?</a>
                </div>
            </div>
        </div>
    </div>
</div>