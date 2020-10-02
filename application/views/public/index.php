<div class="container mt-5">

    <div class="row">
    <?php 
    foreach($products as $pro): ?>
        <div class="col-lg-3">
            <div class="card">
                <img src="<?= base_url("upload/".$pro->image);?>" alt="" class="w-100" style="object-fit:cover;height:220px">
                <div class="card-body">
                    <h2 class="lead text-truncate"><?= $pro->title;?></h2>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    </div>
</div>