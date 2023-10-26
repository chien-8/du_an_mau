<?php
    session_start();
    include './page/header.php';
    include './module/pdo.php';
    include './module/product.php';
    include './module/category.php';
    include './module/user.php';
    include './module/comment.php';

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'login':
                if(isset($_POST['submit'])){
                    $email =$_POST['email'];
                    $password =$_POST['password'];
                    $login = checkUser($email,$password);
                    if(is_array($login)){
                        $_SESSION['user'] = $login;
                        $thongbao = 'đăng nhập thành công';
                        echo ("<script>location.href ='index.php'</script>");
                    }else{
                        $thongbao = 'tài khảon k tồn tại';
                    }
                }
                include './page/account/login.php';
                break;
            case 'register':
                if(isset($_POST['register'])){
                    $name = $_POST['name'];
                    $address= $_POST['address'];
                    $password = $_POST['password'];
                    $email= $_POST['email'];
                    $phone= $_POST['phone'];
                    addNewUser($name,$address,$email,$phone,$password);
                    echo ("<script>location.href ='index.php?act=login'</script>");
                }
                include './page/account/register.php';
                break;
            case 'account':
                if(isset($_POST['update'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $address= $_POST['address'];
                    $password = $_POST['password'];
                    $email= $_POST['email'];
                    $phone= $_POST['phone'];
                    updateUser($id,$name,$address,$email,$phone,$password);
                    $_SESSION['user'] = checkUser($email,$password);
                }
                include './page/account/account.php';
                break;
            case 'logout':
                session_destroy();
                echo ("<script>location.href ='index.php'</script>");
                break;
            case 'shop':
                $listPro = getAllPro();
                $listAllCate = getAllCate();
                include "page/product.php";
                break;
            case 'shopfilter':
                if(isset($_POST['filter'])){
                    $data = $_POST['cate'];
                    $allData= implode(",",$data);
                    $listPro=getProByCate($allData);  
                }
                $listAllCate = getAllCate();
                include "page/product.php";
                break;
            case 'detailPro':
                if(isset($_GET['id']) && $_GET['id'] > 0 ){
                    $product= getOnePro($_GET['id']);
                    extract($product);
                    $cate = getOneCate($idCate);
                    $related = getRelated($_GET['id'],$idCate);
                }             
                include "page/detailProduct.php";
                break;
            default:
                $listPro = getAllPro();
                $listAllCate = getAllCate();
                include "page/home.php";
                break;
        }
    }else {
        $listPro = getAllPro();
        $listAllCate = getAllCate();
        include 'page/home.php';
    }
    include 'page/footer.php';
?>