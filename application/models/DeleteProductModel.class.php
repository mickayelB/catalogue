<?php

class DeleteProductModel {
    public function deleteOne($id){

        $database = new Database();
        $sql = "DELETE FROM article WHERE Id = ?";
        return $database->executeSql($sql, [$id]);
    }
}

?>