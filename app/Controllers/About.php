<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagasta Arsindo',
            'bagas' => 'u_about'
        ];
        return view('temp_users/u_wrapp', $data);
    }
}
