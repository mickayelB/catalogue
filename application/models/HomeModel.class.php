<?php

class HomeModel {
    public function allArticles(){

        $database = new Database();
        $sql = "SELECT Id, NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat, Image2 FROM article";
        return $database->query($sql);
    }

    public function triPriceAsc(){
        $database = new Database();
        $sql = "SELECT Id, NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat, Image2 FROM article ORDER BY Price ASC";
        return $database->query($sql);
    }

    public function triTypeAsc(){
        $database = new Database();
        $sql = "SELECT Id, NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat, Image2 FROM article ORDER BY Type, NameProduct ASC";
        return $database->query($sql);
    }

    public function triCat($cat1, $cat2, $cat3){
        $database = new Database();
        $sql = "SELECT Id, NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat, Image2 FROM article WHERE FirstCat = ? OR SecondCat = ? OR ThirdCat = ?";
        return $database->query($sql, [$cat1, $cat2, $cat3]);
    }
}

?>