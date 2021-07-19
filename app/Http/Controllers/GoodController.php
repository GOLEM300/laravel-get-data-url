<?php

namespace App\Http\Controllers;

use App\Repositories\GoodInterface;
use Illuminate\Http\Request;
use StockItem;

class GoodController extends Controller
{
    private $goodInteface;

    public function __construct(GoodInterface $goodInterface)
    {
        $this->goodInteface = $goodInterface;
    }

    public function index()
    {
        $goods = $this->goodInteface->getGoodsWithPaginate();
        return view('welcome',compact('goods')); 
    }
}
