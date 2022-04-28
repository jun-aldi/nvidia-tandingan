<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data = 
        [   'title' => "Contact",
            'page' => "contact"
        ];
        return view("contact", $data);
    }
}
