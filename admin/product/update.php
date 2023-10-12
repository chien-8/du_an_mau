<?php 
    if(is_array($product)){
        extract($product);
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Update product</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?act=product">List products</a></h6>
        </div>
        <div class="card-body">
            <div class="">
                <form class="row g-3" action="index.php?act=update_done_pro" enctype="multipart/form-data" method="post">
                     <input type="hidden" value="<?=$idProduct?>" name="id">
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Name product</label>
                        <input type="text" class="form-control" id="name" placeholder="Name ..." name="name" value="<?=$namePro?>"> 
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Price ..." name="price" value="<?=$price?>">
                    </div>
                    <div class="col-md-12">
                        <input type="image" src="../images/<?= $image ?>" width="150px" height="250px"">
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" placeholder="Image ..." name="image"  ">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" placeholder="Quantity ..." name="quantity" value="<?=$quantity?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Type</label>
                        <select name="idCategory" class="custom-select"  id="">
                            <?php foreach ($listAllCate as $dm) : extract($dm);
                                if($idCate == $idCategory){
                                    echo  '<option value="' .$idCategory. '" selected>'.$name.'</option>';
                                }else {
                                    echo  '<option value="' .$idCategory. '">'.$name.'</option>';
                                }
                            ?>   
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-outline">
                        <label class="form-label" for="form6Example7">Description</label>
                        <textarea class="form-control" id="form6Example7" rows="4" name="description" ><?=$description?></textarea>
                    </div>
                    <div class="col-md-12">
                        <button  class="btn btn-primary" class="mt-2" type="submit" name="update">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->