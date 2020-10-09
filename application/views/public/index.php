<div class="container mt-5">
<?php  if(!empty($products)): ?>
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
    <?php endforeach; ?> 
    </div> 
        <?php  else: ?>
        
        <div class="row">
            <div class="col-3 mx-auto mt-5 pt-5 text-center">
            <h1><i class="fas fa-sad-cry"></i></h1>
                <h5 class="lead text-muted">Products Not Found</h5>  
                <p class="small text-muted">Please try with another category or query</p>  
            </div>
        </div>

    <?php endif;?>
</div>
