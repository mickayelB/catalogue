<?php

class SearchResultModel {
    public function search($name){

        $database = new Database();
        $sql = "SELECT NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat, Image2 FROM article WHERE NameProduct LIKE ?";
        return $database->query($sql, [$name]);
    }
}

?>