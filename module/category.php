<?php
    function getAllCate(){
        $sql= "SELECT * FROM `category`";
        $listAll = pdo_query($sql);
        return $listAll;
    }

    function getOneCate($id){
        $sql = "SELECT * FROM `category` WHERE idCategory = " . $id;
        $listOne = pdo_query_one($sql);
        return $listOne;
    }

    function addNewCate($name){
        $sql = "INSERT INTO `category`(`name`) values ('$name') ";
        pdo_execute($sql);
    }

    function updateCate($id,$name){
        $sql = "UPDATE `category` SET `name`='" . $name . "' WHERE `idCategory`=" . $id;
        pdo_execute($sql);
    }
    
    function deleteCate($id){
        $sql = "DELETE FROM `category` WHERE idCategory = " . $id;
        pdo_execute($sql);
    }
?>