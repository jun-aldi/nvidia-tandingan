<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class TableProduct extends BaseController
{
    public function loadRecord()
    {
        
        $request = service('request');
		$searchData = $request->getGet();

        $search = "";
		if (isset($searchData) && isset($searchData['search'])) {
			$search = $searchData['search'];
		}
        
        $products = new Product();

        if ($search == '') {
			$paginateData = $products->paginate(5);
		} else {
			$paginateData = $products->select('*')
				->orLike('name', $search) 			
				->paginate();
		}
        
        $data = 
        [
            "title" => "Products",
            "page" => "products",
            'products' => $paginateData,
			'search' => $search
            // "list" => $userModel->where('avatar', '')->find()
        ];
        return view("table_products", $data);
    }
}
