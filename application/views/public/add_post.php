<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">category</label>
                            <select name="category" class="form-control">
                                <option value="" selected disabled>select Category</option>
                                <?php 
                                    foreach($category as $cat): 
                                ?>
                                <option value="<?= $cat->id;?>"><?= $cat->title;?></option>

                                    <?php endforeach; ?>

                            </select>
                            <a href="#rock" data-toggle="modal">Create New Category</a>

                           
                        <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="city">city</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="state">state</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" name="image" class="form-control">
                            <?php if(!empty($error)) {print_r($error); }?>

                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea rows="7" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <input type="text" name="brand" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="model">model</label>
                            <input type="text" name="model" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contact">contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block">
                        </div>
                    </form>
                    <div class="modal fade" role="dialog" id="rock">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form action="<?= base_url('home/add_category');?>" method="post">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" name="title" class="form-control">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>description</label>
                                                                    <textarea name="description" class="form-control" rows="7"></textarea>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input type="submit" name="send" class="btn btn-danger btn-block">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>