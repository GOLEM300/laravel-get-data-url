<?php

namespace App\Repositories;

interface GoodInterface {

    public function getGoodsFromUrl() : void;

    public function getGoodsWithPaginate() : object;

}