<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OldSale</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a href="<?= base_url('home/index');?>" class="navbar-brand">OldSale</a>

    <form action="<?= base_url('home/search');?>" class="form-inline mx-auto" method="get">
        <input type="search" name="search" class="form-control">
        <input type="submit" name="find" class="btn btn-danger">
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?= base_url('home/index');?>" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="<?= base_url('home/addPost');?>" class="btn btn-dark">Sell</a></li>
    </ul>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
    <?php 
    foreach($category as $cat):?>
        <li class="nav-item  mr-2"><a href="<?= base_url('home/category/'.$cat->id);?>" class="badge badge-primary badge-pill p-2"><?= $cat->title;?></a></li>
    <?php endforeach;?>
    </ul>
</nav>