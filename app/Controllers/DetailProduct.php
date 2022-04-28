<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class DetailProduct extends BaseController
{
    public function detail($name)
    {
        $products = new Product();
        $data = 
        [
            "title" => "Detail Products",
            "page" => "profile",
            'item' => $products->where(['name' => $name])->first()
        ];
        return view("detail_product", $data);
    }
}
