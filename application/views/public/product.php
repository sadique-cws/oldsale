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
</div>