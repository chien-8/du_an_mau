<!-- Begin Page Content -->


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Products</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?act=add_product">Add new product</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt = 1; foreach ($listPro as $sp):
                            extract($sp);

                            ?>
                            <tr>
                                <td>
                                    <?= $stt++ ?>
                                </td>
                                <td>
                                    <?= $namePro ?>
                                </td>
                                <td>
                                    <?= $price ?>
                                </td>
                                <td><img src="../images/<?= $image ?>" width="100" alt=""></td>
                                <td>
                                    <?php 
                                        foreach($listAllCate as $dm){
                                            extract($dm);
                                            if($idCate == $idCategory){
                                                echo $name;
                                            }  
                                        } 
                                    ?>
                                </td>
                                <td>
                                    <?= $description ?>
                                </td>
                                <td>
                                    <?= $quantity ?>
                                </td>
                                <td>
                                    <a href="index.php?act=update_product&id=<?= $idProduct ?>">Edit</a>/
                                    <a href="index.php?act=delete_product&id=<?= $idProduct ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->