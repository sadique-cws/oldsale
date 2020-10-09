<div class="container">
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <div class="card">
                <div class="card-body">
                <h4 class="h5">Create an account 100% free</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">city</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">confirm_password</label>
                            <input type="text" name="confirm_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn  bg-theme text-white btn-block">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('auth/login');?>" class="text-muted">Already have Account?</a>
                </div>
            </div>
        </div>
    </div>
</div>