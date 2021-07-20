<?php

namespace App\Http\Controllers\Api\Good;

use App\Http\Controllers\Controller;
use App\Repositories\GoodInterface;

class GoodController extends Controller
{
    private $goodInteface;

    public function __construct(GoodInterface $goodInterface)
    {
        $this->goodInteface = $goodInterface;
    }

    public function index()
    {
        $this->goodInteface->getGoodsFromUrl();
        $goodsWithPagination = $this->goodInteface->getGoodsWithPaginate();
        return $goodsWithPagination;
    }
}
