<?php

class EditController{
    public function httpGetMethod(Http $http, array $queryFields){

    }

    public function httpPostMethod(Http $http, array $formFields){
        $editModel = new EditProductModel();
        $edit = $editModel->selectOne($formFields['id_edit']);
        return ['edit' => $edit];
    }
}