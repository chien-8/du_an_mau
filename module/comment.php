<?php 
    function addComment($content,$dateComment,$idPro,$idUser,$nameUser){
        $sql = "INSERT INTO `comment` (`content`,`dateComment`,`idPro`,`userComment`,`nameUser`) VALUES ('$content','$dateComment','$idPro','$idUser','$nameUser')";
        pdo_execute($sql);
    }

    function getAllComment() {
        $sql ="SELECT * FROM comment where 1";
        $listAll=pdo_query($sql);
        return $listAll;
    }

    function deleteComment($id){
        $sql = "DELETE FROM `comment` WHERE idComment = " .$id;
        pdo_execute($sql);
    }
     
    function getAllCmtByPro($idPro){
        $sql = "SELECT * FROM comment WHERE idPro = '$idPro' ORDER BY idComment desc limit 0,8";
        $listAll= pdo_query($sql);
        return $listAll;
    }
?>