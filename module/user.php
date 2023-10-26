<?php

    function getAllUser($id){
        $sql= "SELECT * FROM `account`";
        if($id > 0)
        $sql .= " WHERE `idUser` <>".$id;
        $listAll = pdo_query($sql);
        return $listAll;
    }

    function getOneUser($id){
        $sql = "SELECT * FROM `account` WHERE idUser = " . $id;
        $listOne = pdo_query_one($sql);
        return $listOne;
    }

    function addNewUser($name,$address,$email,$phone,$password){
        $sql = "INSERT INTO `account`(`name`, `address`, `email`, `phone`,`password`, `role`) VALUES ('$name','$address','$email','$phone','$password',2)";
        pdo_execute($sql);
    }

    function updateUser($id,$name,$address,$email,$phone,$password){
        $sql = "UPDATE `account` SET `name`='".$name."', `address`='".$address."', `email`='".$email."',`phone`='".$phone."',`password`='".$password."' WHERE `idUser`=" . $id;
        pdo_execute($sql);
    }

    function deleteUser($id){
        $sql = "DELETE FROM `account` WHERE idUser = " . $id;
        pdo_execute($sql);
    }

    function checkUser($email,$password){
        $sql = "SELECT * FROM `account` where `email`='" . $email ."' AND  `password`='" . $password . "'  ";
        $account = pdo_query_one($sql);
        return $account;
    }
?>