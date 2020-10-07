<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OldSale</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('upload/css/style.css');?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-theme fixed-top">
    <a href="<?= base_url('home/index');?>" class="navbar-brand">OldSale</a>

    <form action="<?= base_url('home/search');?>" class="form-inline mx-auto" method="get">
        <input type="search" name="search" class="form-control border-0 rounded-0" size="80" placeholder="Search Product">
        <button type="submit" name="find" class="btn bg-white rounded-0"><i class="fas fa-search"></i></button>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?= base_url('home/index');?>" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="<?= base_url('home/index');?>" class="nav-link active"><i class="fas fa-user"></i> Login</a></li>
        <li class="nav-item"><a href="<?= base_url('home/index');?>" class="nav-link active">Signup</a></li>
        <li class="nav-item"><a href="<?= base_url('home/addPost');?>" class="btn btn-light">Sell <i class="fas fa-mouse-pointer"></i></a></li>
    </ul>
</nav>

<br>
<br>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mt-2">
    <ul class="navbar-nav">
    <?php 
    foreach($category as $cat):?>
        <li class="nav-item  mr-2"><a href="<?= base_url('home/category/'.$cat->id);?>" class="badge bg-purple text-white badge-pill p-2"><?= $cat->title;?></a></li>
    <?php endforeach;?>
    </ul>
</nav>