<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Team extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagasta Arsindo',
            'bagas' => 'u_team'
        ];
        return view('temp_users/u_wrapp', $data);
    }
}
