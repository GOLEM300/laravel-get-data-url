<?php

namespace App\Repositories;

use App\Models\StockItem;
use Illuminate\Support\Facades\Http;

class GoodRepository implements GoodInterface
{
    /**
     *
     */
    public function getGoodsFromUrl() : array
    {
        $response = Http::get('https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2021-07-15&key=YjY2NDlkMjAtOGRmYy00ZjNhLTg5ODktYTdkYjk2NDY0ZmRk');
        $goods = $response->json();
        return $goods;
    }

    /**
     * 
     */
    public function saveGoods($goods) : void
    {
        foreach ($goods as $good) {
            StockItem::create($good);
        }
    }

    /**
     * 
     */
    public function getGoodsWithPaginate(): object
    {
        return StockItem::paginate(10);
    }
}
