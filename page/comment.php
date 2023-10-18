<?php 
    session_start();
    include '../module/comment.php';
    include '../module/pdo.php';
    $idPro = $_REQUEST['id'];
    $listComment = getAllCmtByPro($idPro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .card {
        border: none;
        /* box-shadow: 5px 6px 6px 2px #e9ecef; */
        border-radius: 4px;
        border: 1px solid black;
    }


    .dots{
        height: 4px;
        width: 4px;
        margin-bottom: 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }

    .badge{
        padding: 7px;
        padding-right: 9px;
        padding-left: 16px;
        /* box-shadow: 5px 6px 6px 2px #e9ecef; */
    }

    .user-img{
        margin-top: 4px;
    }

    .check-icon{
        font-size: 17px;
        color: #c3bfbf;
        top: 1px;
        position: relative;
        margin-left: 3px;
    }

    .form-check-input{
        margin-top: 6px;
        margin-left: -24px !important;
        cursor: pointer;
    }


    .form-check-input:focus{
        box-shadow: none;
    }


    .icons i{
        margin-left: 8px;
    }
    .reply{
        margin-left: 12px;
    }

    .reply small{
        color: #b7b4b4;
    }


    .reply small:hover{
        color: green;
        cursor: pointer;
    }
    
</style>

<body>
    <div class="listComment overflow-y-scroll mb-3" style="max-height: 200px; overflow-y:scroll;">
        <?php foreach($listComment as $data): extract($data);?>
            <div class="d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center">
                        <img src="#" width="30" class="user-img rounded-circle mr-2">
                        <span>
                            <small class="font-weight-bold text-primary fs-3"><?=$nameUser?></small>
                            <small class="font-weight-bold fs-3"><?= $content?></small>
                        </span>             
                    </div>
                    <small><?= $dateComment?></small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                        <div class="reply px-4">
                            <span class="dots"></span>
                            <small>Reply</small>
                            <span class="dots"></span>
                            <small>Translate</small>
                        </div>
                        <div class="icons align-items-center">
                            <i class="fa fa-check-circle-o check-icon text-primary"></i>    
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <?php if(isset($_SESSION['user'])){ ?>
        <div class="comment" id="comment">
            <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
                <textarea name="comment" class="area-cmt" cols="60" rows="3" placeholder="Nhập bình luận của bạn" required></textarea> <br>
                <input type="hidden" name="idPro" value="<?= $idPro ?>">
                <button type="submit" name="btn_cmt" class="ip-cmt">Gửi</button>
            </form>
        </div>
    <?php } else{ ?>
        <div class="comment" id="comment">
            <form>
                <textarea name="content_cmt" class="area-cmt" cols="60" rows="3" placeholder="Vui lòng đăng nhập để bình luận!!" required></textarea> <br>
            </form>
        </div>
    <?php } ?>
</body>
</html>

<?php 
    if(isset($_POST['btn_cmt'])){
        $content = $_POST['comment'];
        $idpro = $_POST['idPro'];
        $idUser = $_SESSION['user']['idUser'];
        $nameUser = $_SESSION['user']['name'];
        $dateComment = date("m/d/Y  g:i a");
        addComment($content,$dateComment,$idpro,$idUser,$nameUser);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
?>