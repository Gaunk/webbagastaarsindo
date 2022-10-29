<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Service extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagasta Arsindo',
            'bagas' => 'u_service'
        ];
        return view('temp_users/u_wrapp', $data);
    }
}
