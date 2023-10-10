<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add new</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?act=category">List type</a></h6>
        </div>
        <div class="card-body">
            <div class="">
                    <form action="index.php?act=add_category" method="post" class="row g-3" name="myForm" >
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" name="nameCate">
                            <span style="color:red" id="error"> </span>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit" name="addNew">Add new</button>
                        </div>
                    </form>     
            </div>
        </div>
    </div>

</div>
