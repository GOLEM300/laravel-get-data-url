<?php

namespace App\Repositories;

interface GoodInterface {

    public function getGoodsFromUrl() : array;

    public function saveGoods(array $goods) : void;

    public function getGoodsWithPaginate() : object;

}