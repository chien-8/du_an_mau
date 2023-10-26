<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?act=add_user">Add new</a></h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Content</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt = 1;
                        foreach ($listComment as $data) : extract($data) ?>
                            <tr>
                                <td><?= $stt++ ?></td>
                                <td><?= $nameUser ?></td>
                                <td>
                                    <?php foreach($listUser as $user){
                                        extract($user);
                                        if($userComment == $idUser)
                                        echo $email;
                                    } ?>
                                </td>
                                <td><?= $content ?></td>
                                <td><?= $dateComment ?></td>
                                <td>
                                    <?php foreach($listPro as $pro){
                                        extract($pro);
                                        if($idPro == $idProduct)
                                        echo $namePro;
                                    } ?>
                                </td>
                                <td>
                                    <a href="index.php?act=delete_comment&id=<?= $idComment ?>">Delete</a>
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

<!-- End of Main Content -->