<?php 
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    }
?>
<div class="" style="padding-top: 150px;">
    <h1 class="page-title">Account</h1>
    <div class="main-container shop-page left-sidebar">
        <div class="container">
            <form class="row g-3" enctype="multipart/form-data" method="post" name="myForm" onsubmit="return validateForm()">
                <div class="col-6">
                    <label for="inputAddress" class="form-label">User name</label>
                    <input type="text" class="form-control" id="name" required placeholder="Name ..." name="name" value="<?= $name?>">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Phone</label>
                    <input type="number" class="form-control" required id="phone" name="phone" value="<?= $phone?>">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" required id="email" name="email" value="<?= $email?>">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" required id="password" name="password" value="<?= $password?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" required placeholder="" name="address" value="<?= $address?>">
                </div>
                <input type="hidden" name="id" value="<?= $idUser?>">
                <div class="col-12 pt-3">
                    <button type="submit" class="btn" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>