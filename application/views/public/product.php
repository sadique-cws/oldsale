<div class="container mt-5">

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <img src="<?= base_url("upload/".$pro->image);?>" alt="" class="w-100" style="object-fit:cover;height:320px">
            </div>
        </div>
        <div class="col-lg-7">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><?= $pro->title;?></td>
                </tr>
                <tr>
                    <th>category</th>
                    <td><?= $pro->category;?></td>
                </tr>
                <tr>
                    <th>price</th>
                    <td>Rs.<?= $pro->price;?>/-</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?= $pro->name;?></td>
                </tr>
            </table>
            <p class="small"><?= substr($pro->description,0,255);?>...</p>

            <div class="row">
                <div class="col-lg-6">
                    <a href="" class="btn btn-success btn-block  py-2">Contact with Seller</a>
                </div>
                <div class="col-lg-6">
                    <a href="" class="btn btn-danger btn-block  py-2">View Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <h2>Similer Products</h2>
            <hr>
        </div>
    </div>
    <div class="row">
    <?php 
    foreach($products as $pro): ?>
        <div class="col-lg-3 mb-3">
            <div class="card border-0 shadow-sm">
            <a href="<?= base_url('home/product/'.$pro->id);?>">
                <img src="<?= base_url("upload/".$pro->image);?>" alt="" class="w-100 border border-light" style="object-fit:cover;height:220px">
            </a>
                <div class="card-body p-2">
                    <h2 class="h6 pt-0 text-capitalize font-theme text-truncate"><?= $pro->title;?></h2>
                    <p class="small text-muted p-0 m-0 mt-n2"><?= $pro->brand;?></p>
                    <p class=" p-0 m-0 mt-1 font-weight-bold text-theme d-inline-block">₹<?= $pro->price;?>/-</p>
                    <p class=" p-0 m-0 mt-1 float-right small text-muted d-inline-block"><span><i class="fas fa-map-marker-alt"></i> </span><?= $pro->city;?></p>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    </div>
</div>