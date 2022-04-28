<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DriverDatatable;
use Config\Services;

class Driver extends BaseController
{
    public function index()
    {
        $data = 
        [   'title' => "Drivers",
            'page' => "drivers"
        ];
        return view("driver", $data);
    }

    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new DriverDatatable($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->name;
                $row[] = $list->version;
                $row[] = $list->product_type;
                $row[] = $list->product_series;
                $row[] = $list->os;
                $row[] = $list->language;
                $row[] = $list->download_type;
                $row[] = $list->link;
                $row[] = $list->release_date;
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
}
