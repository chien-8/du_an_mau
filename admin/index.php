<?php 
    session_start();
    include "../module/pdo.php";
    include "../module/category.php";
    include "../module/product.php";
    include "../module/user.php";
    
    if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
        if($role == 1){
            include "header.php";
            if(isset($_GET['act'])){
                $act = $_GET['act'];
                switch ($act) {
                    //category
                    case 'category':
                        $listAllCate = getAllCate();
                        include "category/list.php";
                        break;
                    case 'add_category':
                        if(isset($_POST['addNew'])){
                            $nameCate = $_POST['nameCate'];
                            addNewCate($nameCate);
                        }
                        include "category/add.php";
                        break;
                    case 'update_category':
                        if(isset($_GET['id']) && $_GET['id'] > 0){
                            $dm = getOneCate($_GET['id']);
                        }
                        include "category/update.php";
                        break;
                    case 'update_done_cate':
                        if(isset($_POST['update'])){
                            $nameCate = $_POST['nameCate'];
                            $id = $_POST['id'];
                            updateCate($id,$nameCate);
                        }
                        $listAllCate = getAllCate();
                        include "category/list.php";
                        break;
                    case 'delete_category':
                        if(isset($_GET['id']) && $_GET['id'] > 0 ){
                            deleteCate($_GET['id']);
                        }
                        $listAllCate = getAllCate();
                        include "category/list.php";
                        break;
                    //product
                    case 'product':
                        $listPro = getAllPro();
                        $listAllCate = getAllCate();
                        include "product/list.php";
                        break;
                    case 'add_product':
                        if(isset($_POST['addNew'])){
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $image = $_FILES['image']['name'];
                            $target_dir = "../images/";
                            $target_file = $target_dir . basename($_FILES["image"]["name"]);
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                            $quantity = $_POST['quantity'];
                            $idCategory = $_POST['idCategory'];
                            $description = $_POST['description'];
                            addNewPro($name,$price,$image,$quantity,$description,$idCategory);
                        }
                        $listAllCate = getAllCate();
                        include "product/add.php";
                        break;
                    case 'update_product':
                        if(isset($_GET['id']) && $_GET['id'] > 0){
                            $product = getOnePro($_GET['id']);
                        }
                        $listAllCate = getAllCate();
                        include "product/update.php";
                        break;
                    case 'update_done_pro':
                        if(isset($_POST['update'])){
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $image = $_FILES['image']['name'];
                            $target_dir = "../images/";
                            $target_file = $target_dir . basename($_FILES["image"]["name"]);
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                            $quantity = $_POST['quantity'];
                            $idCategory = $_POST['idCategory'];
                            $description = $_POST['description'];
                            updatePro($id,$name,$price,$image,$quantity,$description,$idCategory);
                        }
                        $listAllCate = getAllCate();
                        $listPro = getAllPro();
                        include "product/list.php";
                        break;
                    case 'delete_product':
                        if(isset($_GET['id']) && $_GET['id'] > 0){
                            deletePro($_GET['id']);
                        }
                        $listAllCate = getAllCate();
                        $listPro = getAllPro();
                        include "product/list.php";
                        break;
                    //account
                    case 'user':
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            $listuser = getAllUser($idUser);
                        }
                        include "account/list.php";
                        break;
                    case 'add_user':
                        if(isset($_POST['addNew'])){
                            $name = $_POST['name'];
                            $address= $_POST['address'];
                            $email= $_POST['email'];
                            $password= $_POST['password'];
                            $phone= $_POST['phone'];
                            addNewUser($name,$address,$email,$phone,$password);
                        }
                        include "account/add.php";
                        break;
                    //comment
                    case 'comment':
                        include "comment/list.php";
                        break;
                    case 'logout':
                        session_destroy();
                        echo ("<script>location.href ='index.php'</script>");
                        break;
                    default:
                        include "home.php";
                        break;
                }
            }else {
                include "home.php";
            }
            include "footer.php";
        }
    }else{
        include "login.php";
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
                            echo ("<script>location.href ='index.php?act=product'</script>");
                        }else{
                            $thongbao = 'tài khảon k tồn tại';
                        }
                    }
                    include "home.php";
                    break;
                
                default:
                    include "login.php";
                    break;
            }
        }
            
        
        
        
    }