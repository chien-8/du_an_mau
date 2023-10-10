<?php

    function getAllUser(){
        $sql= "SELECT * FROM `account`";
        $listAll = pdo_query($sql);
        return $listAll;
    }

    function getOneUser($id){
        $sql = "SELECT * FROM `account` WHERE idUser = " . $id;
        $listOne = pdo_query_one($sql);
        return $listOne;
    }

    function addNewUser($name,$address,$email,$phone){
        $sql = "INSERT INTO `account`(`name`, `address`, `email`, `phone`, `role`) VALUES ('$name','$address','$email','$phone',2)";
        pdo_execute($sql);
    }

    function updateUser($id,$name,$address,$email,$phone){
        // $sql = "UPDATE `account` SET `namePro`='".$name."', `price`='".$price."', `image`='".$image."',`description`='".$description."',`quantity`='".$quantity."',`idCate`='".$idCate."' WHERE `idUser`=" . $id;
        //pdo_execute($sql);
    }

    function deleteUser($id){
        $sql = "DELETE FROM `account` WHERE idUser = " . $id;
        pdo_execute($sql);
    }
?>