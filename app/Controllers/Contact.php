<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagasta Arsindo',
            'bagas' => 'u_contact'
        ];
        return view('temp_users/u_wrapp', $data);
    }
}
