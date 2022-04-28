<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Technologies extends BaseController
{
    public function index()
    {
        $json ="";
        $url = 'http://devel.crissad.com/api/nvidia';
        $json = file_get_contents($url);
        $json = json_decode($json, true);

        $data = [
            'title' => "Technologies by Nvidia",
            'page' => 'technologies',
            'json' => $json
        ];
        return view("technologies", $data);


    }
}
