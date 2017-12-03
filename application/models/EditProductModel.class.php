<?php

class EditProductModel {
    public function selectOne($id){

        $database = new Database();
        $sql = "SELECT Id, NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat FROM article WHERE Id = ?";
        return $database->queryOne($sql, [$id]);
    }

    public function editOne($id, $name, $desc, $price, $type, $first, $second, $third){
        $database = new Database();
        $sql = "UPDATE article
                SET NameProduct = ?,
                Description = ?,
                Price = ?,
                Type = ?,
                FirstCat = ?,
                SecondCat = ?,
                ThirdCat = ?
                WHERE Id = ?";
        return $database->executeSql($sql, [$name, $desc, $price, $type, $first, $second, $third, $id]);
    }
}

?>