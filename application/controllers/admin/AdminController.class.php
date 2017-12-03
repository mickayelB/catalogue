<?php

class AdminController{
    public function httpGetMethod(Http $http, array $queryFields){

        $homeModel = new HomeModel();
        $articles = $homeModel->allArticles();
        return ['articles' => $articles];
    }

    public function httpPostMethod(Http $http, array $formFields){
        if(isset($formFields['id_delete'])) {
            $deleteProductModel = new DeleteProductModel();
            $deleteProductModel->deleteOne($formFields['id_delete']);
            $flashBag = new FlashBag();
            $flashBag->add('Produit supprimé');
            $http->redirectTo('/admin');
        }
        else if (isset($formFields['product_edited'])){
            $editProductModel = new EditProductModel();
            $editProductModel->editOne($formFields['product_edited'], $formFields['nameProduct'], $formFields['Description'], $formFields['Price'], $formFields['Type'], $formFields['FirstCat'], $formFields['SecondCat'], $formFields['ThirdCat']);
            $flashBag = new FlashBag();
            $flashBag->add('Produit modifié');
            $http->redirectTo('/admin');
        }
        else {
            $createProductModel = new CreateProductModel();
            $createProductModel->createOne($formFields['nameProduct'], $formFields['Image'], $formFields['Description'], $formFields['Price'], $formFields['Type'], $formFields['FirstCat'], $formFields['SecondCat'], $formFields['ThirdCat']);
            $flashBag = new FlashBag();
            $flashBag->add('Produit créé');
            $http->redirectTo('/admin');
        }
    }
}