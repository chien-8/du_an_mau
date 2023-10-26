<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Update</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?act=category">List type</a></h6>
        </div>
        <div class="card-body">
            <div class="">
                    <form action="index.php?act=update_done_cate" method="post" class="row g-3" name="myForm" onsubmit="return validate()">
                        <div class="col-md-12">
                            <input value="<?= $idCategory ?>" type="hidden" name="id">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" class="form-control" id="category" name="nameCate" value="<?=$name?>">
                            <span style="color:red" id="error"> </span>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                        </div>
                    </form>     
            </div>
        </div>
    </div>

</div>
<script>
    function validate(){
        var category = document.getElementById("category");
        if(category.value.length == 0){
            error.innerHTML = "Không được để trống!";
            return false;
        }else{
            error1.innerHTML = "";
        }
    }
</script>