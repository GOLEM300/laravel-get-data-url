<?php

namespace App\Http\Controllers\Api\Good;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
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
        $goodsWithPagination = $this->goodInteface->getGoodsWithPaginate();
        return $goodsWithPagination;
    }
}
