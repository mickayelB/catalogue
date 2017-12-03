<?php

class CreateProductModel
{
    public function createOne($name, $image, $desc, $price, $type, $first, $second, $third)
    {
        $database = new Database();
        $sql = "INSERT INTO article (NameProduct, Image, Description, Price, Type, FirstCat, SecondCat, ThirdCat)
                VALUES (?,?,?,?,?,?,?,?)";
        return $database->executeSql($sql, [$name, $image, $desc, $price, $type, $first, $second, $third]);
    }
}

?>