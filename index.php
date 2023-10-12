<?php
    include './page/header.php';
    include './module/pdo.php';
    include './module/product.php';
    include './module/category.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'shop':
                $listPro = getAllPro();
                $listAllCate = getAllCate();
                include "page/product.php";
                break;
            case 'detailPro':
                if(isset($_GET['id']) && $_GET['id'] > 0 ){
                    $product= getOnePro($_GET['id']);
                    extract($product);
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