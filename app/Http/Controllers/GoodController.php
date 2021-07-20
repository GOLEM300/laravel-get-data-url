<?php

namespace App\Http\Controllers;

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
        $goods = $this->goodInteface->getGoodsWithPaginate();
        return view('welcome',compact('goods')); 
    }
}
