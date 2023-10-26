<?php
    function getAllPro(){
        $sql= "SELECT * FROM `product`";
        $listAll = pdo_query($sql);
        return $listAll;
    }

    function getOnePro($id){
        $sql = "SELECT * FROM `product` WHERE idProduct = " . $id;
        $listOne = pdo_query_one($sql);
        return $listOne;
    }

    function getRelated($id,$idCate){
        $sql = "SELECT * FROM `product` WHERE  `idCate` =".$idCate." AND  `idProduct` <> " . $id;
        $listAll = pdo_query($sql);
        return $listAll;
    }

    function getProByCate($idCate){
        if($idCate != ""){
            $sql = "SELECT * FROM `product` WHERE idCate IN ($idCate)";
        }else{
            $sql = "SELECT * FROM `product`";
        }
        
        $listAll = pdo_query($sql);
        return $listAll;
    }

    function addNewPro($name,$price,$image,$quantity,$description,$idCate){
        $sql = "INSERT INTO `product`(`namePro`, `price`, `image`, `description`, `quantity`, `idCate`) VALUES ('$name','$price','$image','$description','$quantity','$idCate')";
        pdo_execute($sql);
    }

    function updatePro($id,$name,$price,$image,$quantity,$description,$idCate){
        if($image != ''){
            $sql = "UPDATE `product` SET `namePro`='".$name."', `price`='".$price."', `image`='".$image."',`description`='".$description."',`quantity`='".$quantity."',`idCate`='".$idCate."' WHERE `idProduct`=" . $id;
        }else {
            $sql = "UPDATE `product` SET `namePro`='".$name."', `price`='".$price."', `description`='".$description."',`quantity`='".$quantity."',`idCate`='".$idCate."' WHERE `idProduct`=" . $id;
        }
        pdo_execute($sql);
    }
    
    function deletePro($id){
        $sql = "DELETE FROM `product` WHERE idProduct = " . $id;
        pdo_execute($sql);
    }

?>