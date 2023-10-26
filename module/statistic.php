<?php 
    function statisticCate(){
        $sql = "SELECT category.name as nameCate, COUNT(product.idProduct) as countPro, MIN(product.price) as minPrice, MAX(product.price) as maxPrice, AVG(product.price) as avgPrice";
        $sql .= " FROM product LEFT JOIN category ON category.idCategory = product.idCate GROUP BY category.idCategory";
        $list = pdo_query($sql);
        return $list;
    }
?>