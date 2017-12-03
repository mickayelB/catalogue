<?php

class HomeController{
    public function httpGetMethod(Http $http, array $queryFields){

        $homeModel = new HomeModel();
        $articles = $homeModel->allArticles();
        return ['articles' => $articles];
    }

    public function httpPostMethod(Http $http, array $formFields){
        if (isset($formFields['search'])) {
            $searchResultModel = new SearchResultModel();
            $search = $searchResultModel->search($formFields['search']);
            return ['search' => $search];
        }
        else if (isset($formFields['tri'])){
            if ($formFields['tri'] == 'price') {
                $homeModel = new HomeModel();
                $tri = $homeModel->triPriceAsc();
                $flashBag = new FlashBag();
                $flashBag->add('Trié par prix croissant');
                return ['tri' => $tri];
            }
            else if ($formFields['tri'] == 'type'){
                $homeModel = new HomeModel();
                $triT = $homeModel->triTypeAsc();
                $flashBag = new FlashBag();
                $flashBag->add('Trié par type alphabétique');
                return ['triT' => $triT];
            }
        }
        else if (isset($formFields['filter'])){
            $homeModel = new HomeModel();
            $filterCat = $homeModel->triCat($formFields['filter'], $formFields['filter'], $formFields['filter']);
            return ['filterCat' => $filterCat];
        }

    }
}